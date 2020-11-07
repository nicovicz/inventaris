<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use yii\base\DynamicModel;
use Exception;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use app\models\KendaraanSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout','profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'api-pegawai' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = '//login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionApiPegawai()
    {
        $nip = Yii::$app->request->post('nip');
        $client = new \mongosoft\soapclient\Client([
            'url' => 'https://sik.dephub.go.id/api/index.php/soap_services/sik_api?wsdl',
            'options' => [
                'cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 1,
                'login'=>'getdatasik',
                'password'=>'123456',
                'exception' => 1,
                'connection_timeout' => 15,
            ]
        ]); 


        $req = $client->__call('get_pegawai_by_nip',
                [
                    'nip'=>$nip
                ]);

       
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        
        if ($req['return']){
            return $req['return'][0];
        }

        return [];
    }

    public function actionProfile()
    {
        $model = User::findOne(Yii::$app->user->id);
        $modelPassword = new DynamicModel([
            'password_lama',
            'password_baru',
            'ulangi_password_baru'
        ]);
        $modelPassword->addRule(['password_lama','password_baru','ulangi_password_baru'],'safe');
        $modelPassword->addRule(['ulangi_password_baru'],'compare',
        ['compareAttribute'=>'password_baru']);
        $request = Yii::$app->request;

        if ($request->isPost){

            $model->load($request->post());
            $modelPassword->load($request->post());

            try{

                $transaction = Yii::$app->db->beginTransaction();
                $msg = 'Data Profile Berhasil Diubah';
                if (!$model->save()){
                    throw new Exception('Data Profile Gagal Diubah');
                }

                if (!empty($modelPassword->password_lama) && $modelPassword->validate()){
                    
                   
                    if (!$model->validatePassword($modelPassword->password_lama)){
                        throw new Exception('Password Lama Salah');
                    }

                    $model->setPassword($modelPassword->password_baru);
                    if (!$model->save()){
                        throw new Exception('Password Gagal Diubah');
                    }
                    $msg = 'Password Berhasil Diubah';
                }
               

                $transaction->commit();
                Yii::$app->session->setFlash('success',$msg);
                return $this->refresh();
            }catch(Exception $e){
                $transaction->rollback();
                Yii::$app->session->setFlash('error',$e->getMessage());
            }
        }

        return $this->render('profile',[
            'model'=>$model,
            'modelPassword'=>$modelPassword
        ]);
    }

     /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $this->layout = '//login';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        $this->layout = '//login';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionKendaraan()
    {
        $this->layout = '//pencarian';
        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->searchItem2(Yii::$app->request->queryParams);
        return $this->render('nopol', [
           
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



}

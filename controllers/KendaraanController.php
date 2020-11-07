<?php

namespace app\controllers;

use Yii;
use app\models\Kendaraan;
use app\models\KendaraanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use thamtech\uuid\helpers\UuidHelper;
use yii\helpers\FileHelper;
use app\helpers\Utils;
/**
 * KendaraanController implements the CRUD actions for Kendaraan model.
 */
class KendaraanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kendaraan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kendaraan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kendaraan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kendaraan();
        $model->jenis_id = 1;
        if ($model->load(Yii::$app->request->post())) {
           
            $model->file_stnk = UploadedFile::getInstance($model,'file_stnk');
            $model->file_bpkb = UploadedFile::getInstance($model,'file_bpkb');
            $model->gambar = UploadedFile::getInstance($model,'gambar');

            if ($model->validate()){

                if ($model->file_stnk){
                    $stnk_folder = Yii::getAlias('@uploadStnk');
                    $stnk_file = UuidHelper::uuid().
                        '_'.str_replace(' ','_',$model->no_plat_merah).'.'.
                        $model->file_stnk->extension;
                    if ($model->file_stnk->saveAs($stnk_folder.'/'.$stnk_file)){
                        $model->file_stnk = $stnk_file;
                    }
                }

                if ($model->file_bpkb){
                    $bpkb_folder = Yii::getAlias('@uploadBpkb');
                    $bpkb_file = UuidHelper::uuid().'_bpkb.'.$model->file_bpkb->extension;
                    if ($model->file_bpkb->saveAs($bpkb_folder.'/'.$bpkb_file)){
                        $model->file_bpkb = $bpkb_file;
                    }
                }

                if ($model->gambar){
                    $gambar_folder = Yii::getAlias('@uploadGambar');
                    $gambar_file = UuidHelper::uuid().'_gambar.'.$model->gambar->extension;
                    if ($model->gambar->saveAs($gambar_folder.'/'.$gambar_file)){
                        $model->gambar = $gambar_file;
                    
                    }
                }

               

                if ($model->save(false)){
                    Utils::populatePajak($model,Yii::$app->request->post());
                    Yii::$app->session->setFlash('success','Data Kendaraan Berhasil Disimpan');
                    return $this->refresh();
                }else{
                     Yii::$app->session->setFlash('error','Data Kendaraan Gagal Disimpan');
                }

                
            }

            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kendaraan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_stnk = $model->file_stnk;
        $old_bpkb = $model->file_bpkb;
        $old_gambar = $model->gambar;

       if ($model->load(Yii::$app->request->post())) {
           
            $model->file_stnk = UploadedFile::getInstance($model,'file_stnk');
            if (!$model->file_stnk){
                $model->file_stnk = $old_stnk;
            }
            $model->file_bpkb = UploadedFile::getInstance($model,'file_bpkb');
            if (!$model->file_bpkb){
                $model->file_bpkb = $old_bpkb;
            }
            $model->gambar = UploadedFile::getInstance($model,'gambar');
            if (!$model->gambar){
                $model->gambar = $old_gambar;
            }

            if ($model->validate()){

                if ($model->file_stnk instanceof UploadedFile){
                    $stnk_folder = Yii::getAlias('@uploadStnk');
                    $stnk_file = UuidHelper::uuid().
                    '_'.str_replace(' ','_',$model->no_plat_merah).'.'.
                    $model->file_stnk->extension;
                    if ($model->file_stnk->saveAs($stnk_folder.'/'.$stnk_file)){
                        $model->file_stnk = $stnk_file;
                    }
                }

                if ($model->file_bpkb instanceof UploadedFile){
                    $bpkb_folder = Yii::getAlias('@uploadBpkb');
                    $bpkb_file = UuidHelper::uuid().'_bpkb.'.$model->file_bpkb->extension;
                    if ($model->file_bpkb->saveAs($bpkb_folder.'/'.$bpkb_file)){
                        $model->file_bpkb = $bpkb_file;
                    }
                }

                if ($model->gambar instanceof UploadedFile){
                    $gambar_folder = Yii::getAlias('@uploadGambar');
                    $gambar_file = UuidHelper::uuid().'_gambar.'.$model->gambar->extension;
                    if ($model->gambar->saveAs($gambar_folder.'/'.$gambar_file)){
                        $model->gambar = $gambar_file;
                         if (!empty($old_gambar)){
                             FileHelper::unlink($gambar_folder.'/'.$old_gambar);
                         }
                    }
                }

                if ($model->save(false)){
                    Utils::populatePajak($model,Yii::$app->request->post());
                    Yii::$app->session->setFlash('success','Data Kendaraan Berhasil Diubah');
                    return $this->refresh();
                }else{
                     Yii::$app->session->setFlash('error','Data Kendaraan Gagal Diubah');
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kendaraan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        //$model->status = 0;

        if ($model->delete()){
            Yii::$app->session->setFlash('success','Data Kendaraan Berhasil Dihapus');
        }else{
            Yii::$app->session->setFlash('error','Data Kendaraan Gagal Dihapus');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kendaraan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kendaraan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kendaraan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionPreview($id)
    {
        $model = $this->findModel($id);
        $pathFile = Yii::getAlias('@uploadGambar').'/'.$model->gambar;

        if (!is_file($pathFile)){
            $pathFile = Yii::getAlias('@app').'/web/img/noimage.png';
        }
       
        return  Yii::$app->response->sendFile($pathFile, 'Gambar_Kendaraan',[
            'inline'=>true
        ])->send();
    }

    public function actionPreviewStnk($id)
    {
        $model = $this->findModel($id);
        $pathFile = Yii::getAlias('@uploadStnk').'/'.$model->file_stnk;
        if (!is_file($pathFile)){
            $pathFile = Yii::getAlias('@app').'/web/img/noimage.png';
        }
        return  Yii::$app->response->sendFile($pathFile, 'Gambar_STNK',[
            'inline'=>true
        ])->send();
    }

    public function actionPreviewBpkb($id)
    {
        $model = $this->findModel($id);
        $pathFile = Yii::getAlias('@uploadBpkb').'/'.$model->file_bpkb;
        if (!is_file($pathFile)){
            $pathFile = Yii::getAlias('@app').'/web/img/noimage.png';
        }
        return  Yii::$app->response->sendFile($pathFile, 'Gambar_BPKB',[
            'inline'=>true
        ])->send();
    }
}

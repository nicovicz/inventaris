<?php

namespace app\controllers;

use Yii;
use app\models\Peminjam;
use app\models\PeminjamSearch;
use app\models\KendaraanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\helpers\Master;
use kartik\mpdf\Pdf;
/**
 * PeminjamController implements the CRUD actions for Peminjam model.
 */
class PeminjamController extends Controller
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
     * Lists all Peminjam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PeminjamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peminjam model.
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
     * Creates a new Peminjam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Peminjam();

        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->searchItem(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post())) {
            $ttd = Master::getTtd();
            if ($ttd){
                $model->nip_ttd = $ttd->nip;
                $model->nama_ttd = $ttd->nama;
                $model->pangkat_ttd = $ttd->pangkat;
                $model->golongan_ttd = $ttd->golongan;
                $model->jabatan_ttd = $ttd->nip;
            }
           
            if ($model->save()){
                Yii::$app->session->setFlash('success','Data Pemegang Kendaraan Dinas Berhasil Disimpan');
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash('error','Data Pemegang Kendaraan Dinas Gagal Disimpan');

            }
            
        }

        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Updates an existing Peminjam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->searchItem(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post())) {
            $ttd = Master::getTtd();
            if (!empty($ttd)){
                $model->nip_ttd = $ttd->nip;
                $model->nama_ttd = $ttd->nama;
                $model->pangkat_ttd = $ttd->pangkat;
                $model->golongan_ttd = $ttd->golongan;
                $model->jabatan_ttd = $ttd->nip;
            }
            if ($model->save()){
                Yii::$app->session->setFlash('success','Data Pemegang Kendaraan Dinas Berhasil Diubah');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error','Data Pemegang Kendaraan Dinas Gagal Diubah');

            }
        }

        return $this->render('update', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Peminjam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
         Yii::$app->session->setFlash('success','Data Peminjam Berhasil Dihapus');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Peminjam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Peminjam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Peminjam::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionPdf($id)
    {
        $model = $this->findModel($id);
        $ttd = Master::getTtd();
            if (!empty($ttd)){
                $model->nip_ttd = $ttd->nip;
                $model->nama_ttd = $ttd->nama;
                $model->pangkat_ttd = $ttd->pangkat;
                $model->golongan_ttd = $ttd->golongan;
                $model->jabatan_ttd = $ttd->nip;
                $model->save(false);
            }
        $content = $this->renderPartial('pdf',[
            'model'=>$model
        ]);
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_LANDSCAPE, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti SPPKD'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>false, 
            'SetFooter'=>false,
        ]
        ]);
    
    // return the pdf output as per the destination setting
        return $pdf->render(); 

    }
    
    public function actionExcel()
    {
        $file = Yii::getAlias('@app').'/web/DATA_PEMEGANG_KENDARAAN_DINAS.xlsx';
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($file);
        $sheet = $spreadsheet->setActiveSheetIndex(0);
        $results = Yii::$app->db->createCommand("SELECT 'Mobil',
        CASE
            WHEN peminjam.status = '1' THEN 'Dinas Operasional'
            WHEN peminjam.status = '2' THEN 'Operasional Jabatan'
            ELSE 'Operasional Jabatan'
        END posisi,
        peminjam.nama_peminjam,
        year(tgl_pembuatan) thn_kendaraan,
        'Baik',
        pajak.tanggal,
        '-',
        nomor_mesin,
        nomor_rangka,
        pajak2.tanggal

        FROM kendaraan 
        JOIN peminjam ON kendaraan.id =peminjam.kendaraan_id
        LEFT JOIN pajak on pajak.kendaraan_id = kendaraan.id and pajak.status = 0 and pajak.jenis = 1
        LEFT JOIN pajak pajak2 on pajak2.kendaraan_id = kendaraan.id and pajak2.status = 0 and pajak2.jenis = 3
        WHERE kendaraan.status='1' and peminjam.status <> '0'")->queryAll();

        $sheet->fromArray($results, '-', 'B5');
        $styleArray = array(
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                   
                ),
            ),
        );

        $sheet = $sheet ->getStyle('A5:K'.(5+count($results)-1))->applyFromArray($styleArray);
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $fileName = 'DATA_PEMEGANG_KENDARAAN_DINAS.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
        exit(0);
    }
}

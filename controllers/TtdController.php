<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/**
 * TtdController implements the CRUD actions for Ttd model.
 */
class TtdController extends Controller
{
   use \app\helpers\CrudTrait;

    protected $modelClass = '\app\models\Ttd';
    protected $modelSearchClass = '\app\models\TtdSearch';

    protected static $messages=[
        'SUCCESS_SAVE'=>'Data TTD SPPKD Berhasil Disimpan',
        'FAIL_SAVE'=>'Data TTD SPPKD Gagal Disimpan',
        'SUCCESS_UPDATE'=>'Data TTD SPPKD Berhasil Diubah',
        'FAIL_UPDATE'=>'Data TTD SPPKD Gagal Diubah',
        'SUCCESS_DELETE'=>'Data TTD SPPKD Berhasil Dihapus',
        'FAIL_DELETE'=>'Data TTD SPPKD Gagal Dihapus'
    ];
}

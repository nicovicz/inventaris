<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/**
 * UnitController implements the CRUD actions for Unit model.
 */
class UnitController extends Controller
{
   use \app\helpers\CrudTrait;

    protected $modelClass = '\app\models\Unit';
    protected $modelSearchClass = '\app\models\UnitSearch';

    protected static $messages=[
        'SUCCESS_SAVE'=>'Data Unit Berhasil Disimpan',
        'FAIL_SAVE'=>'Data Unit Gagal Disimpan',
        'SUCCESS_UPDATE'=>'Data Unit Berhasil Diubah',
        'FAIL_UPDATE'=>'Data Unit Gagal Diubah',
        'SUCCESS_DELETE'=>'Data Unit Berhasil Dihapus',
        'FAIL_DELETE'=>'Data Unit Gagal Dihapus'
    ];
}

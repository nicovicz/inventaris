<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/**
 * MerkController implements the CRUD actions for Merk model.
 */
class MerkController extends Controller
{
    use \app\helpers\CrudTrait;

    protected $modelClass = '\app\models\Merk';
    protected $modelSearchClass = '\app\models\MerkSearch';

    protected static $messages=[
        'SUCCESS_SAVE'=>'Data Merk Berhasil Disimpan',
        'FAIL_SAVE'=>'Data Merk Gagal Disimpan',
        'SUCCESS_UPDATE'=>'Data Merk Berhasil Diubah',
        'FAIL_UPDATE'=>'Data Merk Gagal Diubah',
        'SUCCESS_DELETE'=>'Data Merk Berhasil Dihapus',
        'FAIL_DELETE'=>'Data Merk Gagal Dihapus'
    ];
}

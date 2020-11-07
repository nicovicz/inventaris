<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name'=>'SiKendi',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@uploadStnk'   => '@app/storages/stnk',
        '@uploadBpkb'   => '@app/storages/bpkb',
        '@uploadGambar'   => '@app/storages/kendaraan',
        
    ],
    'language'=>'id',
    'timeZone'=>'Asia/Jakarta',
    'as access' => [
        'class' => '\hscstudio\mimin\components\AccessControl',
        'allowActions' => [
           'site/login',
           'site/profile',
           'site/request-password-reset',
           'site/reset-password',
           'site/kendaraan',
           'peminjam/excel',
           'kendaraan/preview-stnk',
           'gii/*',
           
         
       ],
    ],
    'container'=>[
        'definitions'=>[
            'yii\widgets\Breadcrumbs'=>[
                'options'=>[
                    'class'=>'breadcrumb al-breadcrumb pull-left'
                ]
            ],
            'yii\grid\SerialColumn'=>[
                'header'=>'No.',
                'contentOptions'=>['class'=>'text-center','style'=>'vertical-align:middle']
            ],
            'yii\grid\ActionColumn'=>[
                'header'=>'Aksi',
                'headerOptions'=>['class'=>'text-center'],
                'contentOptions'=>['class'=>'text-center action','style'=>'vertical-align:middle;']
            ],
            'yii\data\Pagination'=>[
                'pageSize'=>10
            ],
            'yii\grid\GridView'=>[
                'layout'=>"<div class='panel panel-blur light-text with-scroll animated zoomIn'>
                    <div class='panel-body'>
                    
                      {items}
                      <hr/>
                      {summary}
                      <div class='pull-right'>{pager}</div>
                      <div class='clearfix'></div>
                    </div>
                 </div>"
            ],
           

        ]
    ],
    'modules'=>[
        'utilitas' => [
            'class' => 'app\modules\utilitas\Module',
        ],
    ],
    'components' => [
         'formatter' => [
            'dateFormat' => 'php:d F Y',
            'datetimeFormat' => 'php:d F Y H:i',
            'decimalSeparator' => ',',
            'thousandSeparator' => '.',
            'currencyCode' => 'IDR',
       ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'I8mZHzzaVCMSLWRqghMjMwBP11T7oRtb',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
             'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>'in-v3.mailjet.com',
                'username'=>'dbc6ae4159f4004932cb4cca87abe2db',
                'password'=>'9df671783fba1fa69811ca5de6872600',
                'port' => '587' ,
                'encryption' => 'tls' ,
            ],
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
         'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;

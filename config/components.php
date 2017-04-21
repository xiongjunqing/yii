<?php

 
$components = [

    'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'p1_ybSr6yH7DSdGGCBhauomKlAGkwjXa',
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
        'useFileTransport' => true,
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

    /*
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
        ],
    ],
    */
];

//  根据不同的环境加载不同的数据库配置
if(TESTING){
    $db = require(__DIR__ . '/test/db.php');
    $components = array_merge($components, $db);
} elseif(PRODUCTION) {
    $db = require(__DIR__ . '/product/db.php');
    $components = array_merge($components, $db);
}

return $components;

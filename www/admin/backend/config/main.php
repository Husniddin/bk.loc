<?php
$params = array_merge(
    require(__DIR__ . '/../../../common/config/params.php'),
    require(__DIR__ . '/../../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    //add vendor path.
    // 'vendorPath' => dirname(__DIR__)."/../www/vendor",

    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => 'site/index',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_backendCSRF',
            'csrfCookie' => [
                'httpOnly' => true,
                'path' => '/admin',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_backendIdentity',
                'path' => '/admin',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'BACKENDSESSID',
            'cookieParams' => [
                'path' => '/admin',
            ],
        ],
        // 'user' => [
        //     'identityClass' => 'common\models\User',
        //     'enableAutoLogin' => true,
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'bundles' => false, // Bu Yii ning css va js larini ulash uchun xizmat qiladi.
        ],
        'formatter' => [
            // 'dateFormat' => 'dd.MM.yyyy',
            'dateFormat' => 'php:Y-m-d',
            // 'decimalSeparator' => ',',
            // 'thousandSeparator' => ' ',
            // 'currencyCode' => 'EUR',
        ],
        // 'view' => [
        //      'theme' => [
        //          'pathMap' => [
        //             '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-advanced-app'
        //          ],
        //      ],
        // ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            // 'showScriptName' => false,
            // 'enableStrictParsing' => true,
            // 'rules' => [
            //     // ...
            // ],
        ],
    ],
    'params' => $params,
];

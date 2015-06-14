<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'fprotected\controllers',
    // 'layout'=>'landingMain',
    'layout'=>'column2',
    // 'layout'=>'main',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            // 'showScriptName' => false,
            // 'enableStrictParsing' => true,
            // 'rules' => [
            //     // ...
            // ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'bundles' => false, // Bu Yii ning css va js larini ulash uchun xizmat qiladi.
            // 'class' => 'yii\web\AssetManager',
            // 'forceCopy' => false,          
        ],
        // 'assetManager' => [
        //     'bundles' => [
        //         'yii\web\JqueryAsset' => [
        //             'js'=>[]
        //         ],
        //         'yii\bootstrap\BootstrapPluginAsset' => [
        //             'js'=>[]
        //         ],
        //         'yii\bootstrap\BootstrapAsset' => [
        //             'css' => [],
        //         ],

        //     ],
        // ],
    ],
    'params' => $params,
];

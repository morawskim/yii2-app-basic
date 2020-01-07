<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__) . '/src',
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'runtimePath' => dirname(__DIR__) . '/runtime',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => app\models\User::class,
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
        'db' => $db,
        'assetManager' => [
            'bundles' => [
                \yii\bootstrap4\BootstrapAsset::class => [
                    'sourcePath' => null,
                    'css' => [],
                ],
                \yii\bootstrap4\BootstrapPluginAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                ],
                \yii\web\JqueryAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'depends' => [
                        \app\assets\AppAsset::class
                    ]
                ],
                \yii\web\YiiAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'depends' => [
                        \app\assets\AppAsset::class
                    ]
                ],
                \yii\grid\GridViewAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ],
                \yii\captcha\CaptchaAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                ],
                \yii\widgets\MaskedInputAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ],
                \yii\widgets\ActiveFormAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ],
                \yii\widgets\PjaxAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                ],
                \yii\validators\PunycodeAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ],
                \yii\validators\ValidationAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ],
                \yii\gii\GiiAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'css' => []
                ],
                \yii\debug\DebugAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'css' => [],
                    'depends' => [
                        \app\assets\Yii2DebugAsset::class
                    ]
                ],
                \yii\debug\TimelineAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'css' => []
                ],
                \yii\debug\DbAsset::class => [
                    'sourcePath' => null,
                    'js' => [],
                    'css' => []
                ],
                \yii\debug\UserswitchAsset::class => [
                    'sourcePath' => null,
                    'js' => []
                ]
            ],
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

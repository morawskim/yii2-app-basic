<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__) . '/src',
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'runtimePath' => dirname(__DIR__) . '/runtime',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@webroot'   => dirname(__DIR__) . '/web',
    ],
    'language' => 'en-US',
    'components' => [
        'db' => null,
        'mailer' => [
            'useFileTransport' => true,
        ],
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
            'showScriptName' => true,
            'enablePrettyUrl' => true,
        ],
        'user' => [
            'identityClass' => app\models\User::class,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
    ],
    'params' => $params,
];

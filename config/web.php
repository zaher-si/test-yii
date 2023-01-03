<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id'             => 'Test Yii',
    'basePath'       => dirname(__DIR__),
    // 'bootstrap'      => ['languagesDispatcher'],
    'bootstrap'      => ['log'],
    'aliases'        => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    // set target language
    // 'language'       => 'en',

    // set source language to be English
    'sourceLanguage' => 'en',
    'components'     => [
        'request'      => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'MddwBiJUgVTnmrcD_NtKsBjqNYzaizVZ',
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'user'         => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'           => $db,

        'i18n'         => [
            'translations' => [
                'app*' => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'basePath'       => '@app/messages',
                    'sourceLanguage' => 'en',
                    'fileMap'        => [
                        'app'       => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'urlManager'   => [
            // 'class'                   => 'cetver\LanguageUrlManager\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            /*
             * The list of available languages.
             */
            // 'languages'               => ['en', 'ar'],
            /*
            or
            'languages' => function () {
            return \app\models\Language::find()->select('code')->column();
            },
            */
            /*
             * - true: processes the URL like "en.example.com"
             * - false: processes the URL like "example.com/en"
             * NOTE: If this property set to true, the domain containing a language, must be the first on the left side,
             * for example:
             * - en.it.example.com - is valid
             * - it.en.example.com - is invalid
             */
            // 'existsLanguageSubdomain' => false,
            /*
             * The regular expression patterns list, applied to path info, if there are matches, the request,
             * containing a language, will not be processed.
             * For performance reasons, the blacklist does not applied for URL creation (Take a look at an example).
             * @see \yii\web\Request::getPathInfo()
             * An example:
             * ~~~php
             * [
             *     '/^api.*$/'
             * ]
             * ~~~
             * - Requesting the blacklisted URL
             *   - $existsLanguageSubdomain = true
             *     - en.example.com/api (404 Not Found)
             *     - en.example.com/api/create (404 Not Found)
             *   - $existsLanguageSubdomain = false
             *     - example.com/en/api (404 Not Found)
             *     - example.com/en/api/create (404 Not Found)
             * - Creating the blacklisted URL
             *   - echo \yii\helpers\Html::a('API', ['api/index', Yii::$app->urlManager->queryParam => null]);
             */
            // 'blacklist'               => [],
            /*
             * The query parameter name that contains a language.
             */
            // 'queryParam'              => 'language'
        ],

        'view'         => [
            'theme' => [
                'basePath' => '@app/themes/sbadmin',
                'baseUrl'  => '@web/themes/sbadmin',
                'pathMap'  => [
                    '@app/views' => '@app/themes/sbadmin',
                ],
            ],
        ],



    ],
    'params'         => $params,
];

if (YII_ENV_DEV)
{
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
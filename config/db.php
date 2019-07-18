<?php

use yii\db\Connection;

return [
    'class' => Connection::class,
    'dsn' => getenv('DB_DSN'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => getenv('DB_CHARSET'),

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

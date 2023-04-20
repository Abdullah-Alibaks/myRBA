<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=rba',
    'username' => 'root',
    'password' => 'root', //als je xampp gebruikt blijf de password leeg en bij MAMP moet ook het password "root" zijn 
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

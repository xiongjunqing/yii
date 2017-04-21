<?php

//  YII的编程思想是纯对象的形式，即每个数据库配置都作为一个组件来加载
//  在使用数据库配置的时候使用Yii::$app->db加载配置名为db的数据库配置
return [
    'db' => [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=localhost;dbname=yii2basic',
        'username' => 'root',
        'password' => 'xjq07156618679',
        'charset'  => 'utf8',
    ],
];

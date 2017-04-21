<?php
//引入常亮定义
require(__DIR__ . '/../config/defined.php');

//  加载自动加载器
require(__DIR__ . '/../vendor/autoload.php');

//  引入yii框架
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

//  根据不同的环境引入不同的配置文件
if(TESTING){
    $config = require(__DIR__ . '/../config/web.php');
} else {
    $config = require(__DIR__ . '/../config/web.php');
}
(new yii\web\Application($config))->run();

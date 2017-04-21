<?php


// 产品环境
defined('PRODUCTION') or define('PRODUCTION', is_file('/etc/php.env.production'));

// 测试环境
defined('TESTING') or define('TESTING', is_file('/etc/php.env.testing'));

// comment out the following two lines when deployed to production
if(TESTING){
    defined('YII_DEBUG') or define('YII_DEBUG', true);
} else {
    define('YII_DEBUG', false);
}

defined('YII_ENV') or define('YII_ENV', 'dev');

<?php
/**
 * 如果composer提供的autoload已经加载，那么直接返回autoload对象。
 */
if(class_exists('asbamboo\\autoload\\Autoload')){
    return new asbamboo\autoload\Autoload();
}

/**
 * 加载composer自带的autoload
 * 返回一个初始化Autoload
 */
if(file_exists(__DIR__ . '/vendor/autoload.php')){
    require_once __DIR__ . '/vendor/autoload.php';
}else{
    require_once dirname(dirname(__DIR__)) . '/autoload.php';
}

return new asbamboo\autoload\Autoload();
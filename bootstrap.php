<?php
/**
 * 加载composer自带的autoload
 * 返回一个初始化Autoload
 * 如果composer提供的autoload已经加载，那么直接返回autoload对象。
 */
$vendor_dir = dirname(dirname(__DIR__));
if(!class_exists('asbamboo\\autoload\\Autoload')){
    if(file_exists(__DIR__ . '/vendor/autoload.php')){
        require_once __DIR__ . '/vendor/autoload.php';
        $vendor_dir = __DIR__ . '/vendor';
    }else{
        require_once dirname(dirname(__DIR__)) . '/autoload.php';
    }
}
$Autoload   = new asbamboo\autoload\Autoload();
$psr4s      = include $vendor_dir . '/composer/autoload_psr4.php';
foreach($psr4s AS $namespace => $dirs){
    $Autoload->addMappingDir($namespace, current($dirs));
}
return $Autoload;
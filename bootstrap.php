<?php
/**
 * 加载composer自带的autoload
 * 返回一个初始化Autoload
 */
require_once __DIR__ . '/vendor/autoload.php';

return new asbamboo\autoload\Autoload();
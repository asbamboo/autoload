<?php
namespace asbamboo\autoload\_test;

use PHPUnit\Framework\TestCase;
use asbamboo\autoload\Autoload;
use testload\Testload;

/**
 *
 * @author 李春寅 <licy2013@aliyun.com>
 * @since 2018年9月10日
 */
class AutoloadTest extends TestCase
{
    public function testMain()
    {
        /**
         *
         * @var Autoload $autoload
         */
        $autoload   = include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bootstrap.php';
        $autoload->addMappingDir('testload', __DIR__ . DIRECTORY_SEPARATOR . 'fixtures');
        $testload   = new Testload();
        $this->assertInstanceOf('testload\Testload', $testload);
    }
}

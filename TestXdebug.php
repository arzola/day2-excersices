<?php

require __DIR__.'/Xdebug.php';

use PHPUnit\Framework\TestCase;
use Xdebug as Debugger;

class TestXdebug extends TestCase
{
    public function test_if_xdebug_prints_3()
    {
        $xdebug = new Debugger();
        $this->assertEquals(4,$xdebug->getSteps());
    }
}
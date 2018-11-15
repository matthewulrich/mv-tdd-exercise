<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{

    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
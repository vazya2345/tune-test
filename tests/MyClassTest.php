<?php
require_once('../../src/MyClass.php');
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase {
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals([7,0,8], $my->test([2,4,3], [5,6,4]));
        $this->assertEquals([0], $my->test([0], [0]));
        $this->assertEquals([8,9,9,9,0,0,0,1], $my->test([9,9,9,9,9,9,9], [9,9,9,9]));
 }
}
<?php

namespace ForDummies;

class OperatorsTest extends \PHPUnit_Framework_TestCase
{
    public function testNullCoalescingOperator()
    {
        $v = ['foo', null];

        $this->assertEquals('foo', $v[2] ?? $v[1] ?? $v[0]);
    }

    public function testSpaceshipOperator()
    {
        $this->assertEquals(0, 1 <=> 1);
        $this->assertEquals(-1, 1 <=> 2);
        $this->assertEquals(1, 2 <=> 1);

        $this->assertEquals(0, 3.0 <=> 3.0);
        $this->assertEquals(0, 3.1 <=> 3.1);
        $this->assertEquals(1, 3.3 <=> 3.1);
        $this->assertEquals(-1, 3.3 <=> 3.5);

        $this->assertEquals(0, 'a' <=> 'a');
        $this->assertEquals(1, 'b' <=> 'a');
        $this->assertEquals(-1, 'a' <=> 'b');
    }
}

<?php


namespace ForDummies;

class CsprngTest extends \PHPUnit_Framework_TestCase
{
    public function testRandomBytes()
    {
        $bytes = random_bytes(32);

        $this->assertEquals(32, strlen($bytes));
        $this->assertEquals(64, strlen(bin2hex($bytes)));
    }

    public function testRandomInt()
    {
        $int = random_int(3, 10);

        $this->assertGreaterThanOrEqual(3, $int);
        $this->assertLessThanOrEqual(10, $int);
    }
}

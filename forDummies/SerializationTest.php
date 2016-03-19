<?php


namespace ForDummies;

use Fixture\Hound;
use Fixture\Wolf;

class SerializationTest extends \PHPUnit_Framework_TestCase
{
    public function testSerialization()
    {
        $s = serialize([new Hound(), new Wolf()]);
        $s = unserialize($s, ['allowed_classes' => ['Fixture\Hound']]);

        $this->assertInstanceOf('Fixture\Hound', $s[0]);
        $this->assertInstanceOf('__PHP_Incomplete_Class', $s[1]);

        $this->assertEquals('wuu', $s[0]->bark());
        // is not catchable with engine exception.
//        $this->assertEquals('wuuu..', $s[1]->bark());
    }
}

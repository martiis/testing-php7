<?php

namespace ForDummies;

use Fixture\DogInterface;

class AnonymousClassTest extends \PHPUnit_Framework_TestCase
{
    public function testAnonymClass()
    {
        $class = new class implements DogInterface {
            public function bark()
            {
                return 'wof';
            }
        };

        $this->assertContains('class@anonymous ' . __FILE__, get_class($class));
        $this->assertEquals('wof', $class->bark());
    }

    public function testAnonymClosure()
    {
        $class = new class implements DogInterface {

            private $times = 1;

            public function bark()
            {
                return 'wof ' . $this->times;
            }
        };

        $this->assertEquals('wof 1', $class->bark());

        $getTimes = function () {
            return $this->times;
        };

        $this->assertEquals(1, $getTimes->call($class));
    }
}

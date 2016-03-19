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

        $this->assertEquals('wof', $class->bark());
    }
}

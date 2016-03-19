<?php

namespace ForDummies;

use Fixture\{Hound, Wolf};

class GroupNsTest extends \PHPUnit_Framework_TestCase
{
    public function testLoad()
    {
        $this->assertInstanceOf('Fixture\Hound', new Hound());
        $this->assertInstanceOf('Fixture\Wolf', new Wolf());
    }
}

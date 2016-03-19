<?php

declare(strict_types=1);

namespace ForDummies;

class StrictTypeDeclarationTest extends \PHPUnit_Framework_TestCase
{
    public function testSuperStrict()
    {
        $div = function ($a, $b) : float {
            return $a / $b;
        };

        $this->assertEquals(2.5, $div(10, 4));
    }
}

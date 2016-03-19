<?php

namespace ForDummies;

class TypeDeclarationTest extends \PHPUnit_Framework_TestCase
{
    public function testCoercive()
    {
        $function = function (int ...$ints) {
            $this->assertTrue(is_array($ints));

            return array_sum($ints);
        };

        $this->assertEquals(10, $function(1, 2, 3, 4));
    }

    public function testStrict()
    {
//        declare(strict_types=1);

        $function = function (string ...$strings) : array {
            return array_map(
                function ($value) : int {
                    return strlen($value);
                },
                $strings
            );
        };

        $this->assertEquals([2, 3], $function('ok', 'not'));
    }
}

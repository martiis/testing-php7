<?php


namespace ForDummies;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testFinalReturn()
    {
        $gen = function () {
            yield 1;
            yield 2;

            return 3;
        };

        $i = 1;
        foreach ($gen as $num) {
            $this->assertEquals($i++, $num);
        }
    }

    public function testDelegation()
    {
        function gen()
        {
            yield 2;
        };

        function gen2()
        {
            yield 1;
            yield from gen();

            return 3;
        };

        $i = 1;
        foreach (gen2() as $num) {
            $this->assertEquals($i++, $num);
        }
    }
}

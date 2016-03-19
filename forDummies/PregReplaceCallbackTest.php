<?php


namespace ForDummies;

class PregReplaceCallbackTest extends \PHPUnit_Framework_TestCase
{
    private $pattern = 'Aa Bbb';

    public function testCallback()
    {
        preg_replace_callback_array(
            [
                '/[a]+/i' => [$this, 'a'],
                '/[b]+/i' => [$this, 'b'],
                '/[c]+/i' => [$this, 'c'],
            ],
            $this->pattern
        );
    }

    public function a($match)
    {
        $this->assertEquals('Aa', $match[0]);
    }

    public function b($match)
    {
        $this->assertEquals('Bbb', $match[0]);
    }

    public function c()
    {
        throw new \LogicException('Should not be called');
    }
}

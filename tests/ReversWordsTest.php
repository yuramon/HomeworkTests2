<?php

require "./src/reversWords.php";
use PHPUnit\Framework\TestCase;

class ReversWordsTest extends PHPUnit\Framework\TestCase
{
    public function myStringDataProvider()
    {
        return [
            ["ФЫВА олдж", "АВЫФ ждло"],
            ["Привет я Юра", "тевирП я арЮ"]
        ];
    }

    /**
     * @dataProvider myStringDataProvider
     */

    public function testPositive($myString, $result)
    {
        $reversString = reversWords($myString);
        $this->assertEquals($result, $reversString);

    }

}
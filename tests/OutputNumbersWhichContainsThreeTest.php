<?php

require "./src/outputNumbersWhichContainsThree.php";
use PHPUnit\Framework\TestCase;

class OutputNumbersWhichContainsThreeTest extends PHPUnit\Framework\TestCase
{
    public function myArrayDataProvider()
    {
        return [
            [[342, 55, 33, 123, 66, 63, 9], 4],
            [[42, 55, 11, 12, 66, 6, 9], 0],
            [[342, 55, 33, 123, 66, 63, 9, 34, 13, 3], 7]
        ];
    }

    /**
     * @dataProvider myArrayDataProvider
     */

    public function testPositive($myArray, $countOfThree)
    {
        $result = outputNumbersWhichContainsThree($myArray);
        $this -> assertCount($countOfThree, $result);
    }



}
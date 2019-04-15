<?php

require "./src/countOfThreeNumberInArray.php";
use PHPUnit\Framework\TestCase;

class CountOfThreeNumberInArrayTest extends PHPUnit\Framework\TestCase
{
    public function myArrayDataProvider()
    {
        return[
            [[342, 55, 33, 123, 66, 63, 9], 5],
            [[42, 55, 12, 66, 6, 9], 0],
            [[342, 55, 33, 123, 66, 63, 9, 333, 0, 12, 3], 9]
        ];
    }

    /**
     * @dataProvider myArrayDataProvider
     */

    public function testPositive($myArray, $countOfThree)
    {
        $result  = countOfThreeNumberInArray($myArray);
        $this -> assertEquals($countOfThree, $result);
    }

}
<?php

require "./src/convertMyString.php";
use PHPUnit\Framework\TestCase;

class ConvertMyStringTest extends PHPUnit\Framework\TestCase
{
    public function containStringDataProvider()
    {
        return [
            ["var_test_text"],
            ["Bumm___run_gun_Ban"],
            ["var_test_text_india"],
            ["blabalalad"]
        ];
    }

    /**
     * @dataProvider containStringDataProvider
     */

    public function testPositive($myString)
    {
        $result = convertMyString($myString);
        $this -> assertStringContainsString('_', $result);
    }

    public function containMyStringDataProvider()
    {
        return [
            ["var_test_text", "varTestText"],
            ["Bumm___run_gun_Ban", "bummRunGunBan"],
            ["var_test_text_india", "varTestTextIndia"],
            ["blabalalad", "blabalalad"]

        ];
    }

    /**
     * @dataProvider containMyStringDataProvider
     */


    public function testEquals($myString, $expectedString)
    {
        $result = convertMyString($myString);
        $this -> assertEquals($expectedString, $result);
    }

}
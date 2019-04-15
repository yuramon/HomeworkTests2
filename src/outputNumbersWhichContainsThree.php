<?php

function outputNumbersWhichContainsThree($a)
{
    $arrayWithThree = [];
    $length = count($a);
    for ($i = 0; $i < $length; $i++) {
        $ourNumber = $a[$i];
        $lengthOfOurNumber = strlen($ourNumber);
        $splitArray = str_split($ourNumber);
        for ($j = 0; $j < $lengthOfOurNumber; $j++) {
            if ($splitArray[$j] == 3) {
                array_push($arrayWithThree, $ourNumber);
                break;
            }
        }
    }
    return $arrayWithThree;
}

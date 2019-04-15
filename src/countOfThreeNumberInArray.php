<?php

function countOfThreeNumberInArray($a)
{
    $threeCounter = 0;
    $length = count($a);
    for ($i = 0; $i < $length; $i++) {
        $ourNumber = $a[$i];
        $lengthOfOurNumber = strlen($ourNumber);
        $splitArray = str_split($ourNumber);
        for ($j = 0; $j < $lengthOfOurNumber; $j++) {
            if ($splitArray[$j] == 3) {
                $threeCounter++;
            }
        }
    }
    return $threeCounter;
}
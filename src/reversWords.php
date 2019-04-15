<?php

function reversWords($myString)
{
    $mySplitString = preg_split('/[\s]+/', $myString, null, PREG_SPLIT_NO_EMPTY);
    $newArray = [];
    for ($i = 0; $i < count($mySplitString); $i++) {
        $reversWord = $mySplitString[$i];
        $reversWord = mb_strrev($reversWord);
        array_push($newArray, $reversWord);
    }
    $reversString = implode(" ", $newArray);
    return $reversString;
}
function mb_strrev($str)
{
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
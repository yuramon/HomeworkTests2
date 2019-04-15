<?php

function convertMyString($myString)
{
    $clearString = str_replace("_", " ", $myString);
    $clearString = ucwords($clearString);
    $clearString = lcfirst($clearString);
    $clearString = str_replace(" ", "", $clearString);
    return $clearString;
}
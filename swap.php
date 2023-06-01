<?php

$swapVal = [];
function swap($inputOne,$inputTwo)
{
    $inputOne = $inputOne + $inputTwo;
    $inputTwo = $inputOne - $inputTwo;
    $inputOne = $inputOne - $inputTwo;

    echo "inputOne = $inputOne"."\n";
    echo "inputTwo = $inputTwo"."\n";
}
swap(123,254);

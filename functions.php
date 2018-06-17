<?php

function celsToFahren($cels) {
    $fahren = ($cels * 1.8) + 32;
    return $fahren;
}

function divideableByThree($number)
{
    $number2 = $number / 3;
    if (is_int($number2)) {
        return $number2;
    } else {
        echo "Getal is niet deelbaar door 3.";
    }
}

function reverseString($string) {
    $stringReverse = strrev($string);
    return $stringReverse;
}

echo celsToFahren(86);
echo "<br>";
echo divideableByThree(8);
echo "<br>";
echo reverseString("abcdefghijklmnopqrstuvwxyz");


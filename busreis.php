<?php
    $leeftijd = 10;
    $five = "De reis kost 5 euro";
    $ten = "De reis kost 10 euro";
    $zero = "De reis is gratis";

    if ($leeftijd > 65) {
            echo $five;
    }
    else if ($leeftijd <= 12 && $leeftijd > 2) {
            echo $five;
    }
    else if ($leeftijd <= 2 ) {
            echo $zero;
    } else {
            echo $ten;
    }
 ?>
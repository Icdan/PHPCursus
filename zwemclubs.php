<?php
$swimimage = "<img style='width:30px; margin-bottom:-10px;' src='https:d30y9cdsu7xlg0.cloudfront.net/png/684-200.png'>";
$zwemclub["De spartelkuikens"] = 25;
$zwemclub["De waterbuffels"] = 32;
$zwemclub["Plonsmderin"] = 11;
$zwemclub["Bommetje"] = 23;
foreach ($zwemclub as $names => $numbers) {
    echo "$names $numbers";
    for ($i = 0; $i < round(floor($numbers/5), 0, PHP_ROUND_HALF_DOWN); $i++) {
        echo  $swimimage;

    }   echo "<br>";
}
?>
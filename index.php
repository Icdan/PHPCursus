<center>
<?php
    $row = 15;

    for($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
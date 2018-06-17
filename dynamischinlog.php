<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label>name</label><input type="text" name="text1" required><br>
    <label>password</label><input type="password" name="password1" required><br>
    <input type="submit" name="submit">

</form>
<pre>
<?php
if ($_GET) {
    echo 'Contents of $_GET <br>';
    print_r($_GET);
} elseif ($_POST) {
    echo 'Contents of $_POST <br>';
    print_r($_POST);
}

$naam = $_POST["text1"];
$wachtwoord = $_POST["password1"];

//if ($naam == "piet@worldonline.nl" && $wachtwoord == "doetje123") {
//    inloggen($naam, $wachtwoord);
//} elseif ($naam == "klaas@carpets.nl" && $wachtwoord == "snoepje777") {
//    inloggen($naam, $wachtwoord);
//} elseif ($naam == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201") {
//    inloggen($naam, $wachtwoord);
//} else {
//    echo "Sorry, geen toegang.";
//}

if ($loggedIn) {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang";
}

function inloggen($naam, $wachtwoord) {
    if ($naam == "piet@worldonline.nl" && $wachtwoord == "doetje123") {
        $loggedIn = true;
        return $loggedIn;
    } elseif ($naam == "klaas@carpets.nl" && $wachtwoord == "snoepje777") {
        $loggedIn = true;
        return $loggedIn;
    } elseif ($naam == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201") {
        $loggedIn = true;
        return $loggedIn;
    } else {
        $loggedIn = false;
    }
}

//function welcome() {
//    echo "Welkom";
//}


?>
</pre>
</body>
</html>

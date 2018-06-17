<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label>name</label><input type="text" name="text1" required><br>
    <label>address</label><input type="text" name="text2" required><br>
    <label>email</label><input type="email" name="email1" required><br>
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


?>
</pre>
</body>
</html>

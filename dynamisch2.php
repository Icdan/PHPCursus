<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beasties</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <p>You may control-click (Windows) or command-click (Mac) to select more than one.</p>
    <select multiple size="4" name="animal[]" id="animalSelection">
        <option value="monkey">monkey</option>
        <option value="sheep">sheep</option>
        <option value="rhino">rhino</option>
        <option value="unicorn">unicorn</option>
    </select>
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

foreach ($_POST["animal"] as $animal) {
    echo "<img src='img/" . $animal . ".jpg'>";
    echo "<br>";
}

?>
</pre>
</body>
</html>

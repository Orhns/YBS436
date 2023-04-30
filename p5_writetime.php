<?php 
function writeTime(){
    date_default_timezone_set('Europe/Istanbul');
    echo "<p>The datetime is now " . date("Y-m-d H:i:s T") . "</p>";
}
function writeTime2(){
    date_default_timezone_set('Europe/Istanbul');
    echo date("Y-m-d H:i:s T");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Practice</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <br>
    <h3>Write a PHP function writeTime() that does not return a value</h3>
    <?php
    writeTime();
    ?>
    <hr>
    <h3>Write a PHP function writeTime() that returns a value</h3>
    <p>The datetime is now <?= writeTime2() ?></p>
    <hr>
</body>
</html>
<?php
function passParameterByValue($arg) {
    $arg += 300;
    echo "<br/>arg=" . $arg;
}
function passParameterByReference(&$arg){
    $arg +=300;
    echo "<br/>arg=" . $arg;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Shop</h1>
    <p> Arguments passed to functions by value <strong>do not change</strong> the initial value.</p>
    <p>
    <?php 
    $initial = 15;
    echo "<br/>initial=" . $initial; //output initial 15
    passParameterByValue($initial); // output arg=315
    echo "<br/>initial=" . $initial; //output initial =15
    ?>
    </p>
    <hr>
    <p> Arguments passed to functions by reference <strong>changes</strong> the initial value.</p>
    <p>
    <?php 
    $initial = 15;
    echo "<br/>initial=" . $initial; // output: initial=15
    passParameterByReference($initial); // output: arg=315
    echo "<br/>initial=" . $initial; // output: initial=315    
    ?>
    </p>    
</body>
</html>
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
    <h1>The Candy Store</h1>
    <p>A global variable is not, by default, available within functions.</p>
    <?php
    $count=22;
    function testScope1(){
       // echo $count; //cannot reach the count value because 
       //its not global or passed into the function.
    }
    testScope1();
    echo "<p>" . $count . "</p>"; //output 22
    ?>
    <hr>
    <p>PHP does allow variables with global scope to be accessed within a function using the global keyword.</p>
    <?php
    $count = 34;
    function testScope2(){
        global $count;
        echo "<p>" . $count . "</p>"; //outputs 34
    }
    testScope2();
    echo "<p>" . $count . "</p>"; //outputs 34
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles5.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <p>
        <?php 
        $forecast = array("Mon"=>40,"Tue"=>47,"Wed"=>52,"Thu"=>40,"Fri"=>37);
        // foreach - iterating through the values
        foreach ($forecast as $value) {
            echo $value . "<br>";
        }
        ?>
    </p>
    <hr>
    <p>
        <?php
        // foreach with values and also keys
        foreach ($forecast as $key => $value) {
            echo "day " . $key . "=" . $value . "<br>";
        }
        ?>
    </p>
</body>
</html>
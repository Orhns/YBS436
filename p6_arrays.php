<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/styles5.css">
</head>
<body>
    <h1>The Candy Shop</h1>
    <p>
        <?php
        $days = array();
        $days = array("Mon","Tue","Wed","Thu","Fri"); 
        //while loop
        $i = 0;
        while ($i < count($days)) {
            echo $days[$i] . "-";
            $i++;
        }
        ?>
    </p>
    <hr>
    <p>
        <?php
        $days = array();
        $days = ["Mon","Tue","Wed","Thu","Fri"];
        //do while loop
        $i = 0;
        do {
            echo $days[$i] . "-";
            $i++;
        } while ($i < count($days));
        ?>
    </p>
    <hr>
    <p>
    <?php
        $days = array(0=>"Mon",1=>"Tue",2=>"Wed",3=>"Thu",4=>"Fri");
        //for loop
        for ($i=0 ; $i < count($days) ; $i++ ) { 
            echo $days[$i] . "-";
        }
        ?>
    </p>
</body>
</html>
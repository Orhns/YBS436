<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <?php
    $hourOfDay = 22;
    if ($hourOfDay > 6 && $hourOfDay < 12) {
        echo "<h2>"."good morning"."</h2>";
    }
    elseif ($hourOfDay >= 12 && $hourOfDay < 18) {
        echo "<h2>"."good afternoon"."</h2>";
    }
    else {
        echo '<h2>good evening</h2>';
    }    
    ?>
</body>
</html>
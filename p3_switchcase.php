<!DOCTYPE html>
<html>
  <head>
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <?php
    $hourOfDay = 13;
    switch (true)
    {
      case ($hourOfDay > 6 && $hourOfDay < 12):
        echo "<h2>"."good morning"."</h2>";
        break;
      case ($hourOfDay >= 12 && $hourOfDay < 18):
        echo "<h2>"."good afternoon"."</h2>";
        break;
      default:
        echo "<h2>"."good evening"."</h2>";
    }
    ?>  
  </body>
</html>

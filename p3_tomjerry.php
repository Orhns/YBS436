<?php
    $name1 = "Tom";
    $name2 = "Jerry";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom & Jerry</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h3>Example 1</h3>
    <?php
        echo "<em>" . $name1 . " and " . $name2 . "</em>";
        echo "<br><br>";
        echo "<em> $name1 and $name2 </em>";
    ?>
    <hr>
    <h3>Example 2</h3>
    <?php
    echo "<p>Tom and Jerry</p>";
    echo '<p>Tom and Jerry</p>';
    ?>
    <hr>
    <h3>Example 3</h3>
    <?php
        echo '<img src="img/tomjerry.jpg">';
        echo "<img src=\"img/tomjerry.jpg\">";
    ?>
    <hr>
    <h3>More complicated concatenation examples</h3>
    <?php
    $id = "tomjerry";
    echo "<img src='img/tomjerry.jpg' alt='". $name1 . " and " . $name2 . "'>";
    echo "<img src='img/$id.jpg' alt='$name1 and $name2'>";
    echo "<img src=\"img/$id.jpg\" alt=\"$name1 and $name2\">";
    echo '<img src="img/' . $id . '.jpg" alt="' . $name1 . ' and ' . $name2 . '">';
    echo '<a href="p3_tomjerry.php?id=' . $id .'">' . $name1 . ' and ' .
    $name2 . '</a>';
    ?>
    <hr>
    <h3>Illustration of components in a printf statement </h3>
    <?php
    $product = "box";
    $weight = 1.56789;
    printf("The %s is %.2f kg.", $product, $weight)
    ?>
    <hr>
</body>
</html>
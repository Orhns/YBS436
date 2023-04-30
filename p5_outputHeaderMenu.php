<?php
function outputHeaderMenu(){
    echo '<a href="#">Home</a> | ';
    echo '<a href="#">Products</a> | ';
    echo '<a href="#">Services</a> | ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Php Practice</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <header style="background-color: #730720; 
                    padding: 10px; 
                    width: 100%;
                    position: relative;
                    top: 0;
                    margin: 15px;">
        <?php 
        outputHeaderMenu();
        ?>
    </header>
</body>
</html>
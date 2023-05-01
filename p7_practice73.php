<?php include "p7_includes/header.php" ?>
<form action="p7_practice73.php" method="POST">
    Name <input type="text" name="username">
    Password <input type="text" name="password">
    <input type="submit">
</form>
<hr>
<?php
    if (empty($_POST["username"]) or empty($_POST["password"])) {
        echo "Please fill the form";
    } else {
        echo "username = " . $_POST["username"] . "<br>";
        echo "password = " . $_POST["password"] . "<br>";
        echo "This form was submittet using " . $_SERVER['request_method'] . "<br>";
        print_r($_POST);
    }
?>
<?php include "p7_includes/footer.php" ?>
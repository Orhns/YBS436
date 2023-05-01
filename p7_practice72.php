<?php include "p7_includes/header.php" ?>
<form action="p7_practice72.php" method="get">
    Name <input type="text" name="username">
    Password <input type="text" name="password">
    <input type="submit">
</form>
<hr>
<?php 
if (empty($_GET["username"]) or empty($_GET["password"])) {
    echo "Please fill the form buddy.";
} else {
    echo "username =" . $_GET["username"] . "<br>";
    echo "password =" . $_GET["password"] . "<br>";
    echo "This form was submitted using " . $_SERVER["REQUEST_METHOD"] . "<br>";
    print_r($_GET);
}
?>
<?php include "p7_includes/footer.php" ?>

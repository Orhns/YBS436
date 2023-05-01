<?php include 'p7_includes/header.php' ?>
<form action="p7_practice74.php" method="POST">
    Name <input type="text" name="username">
    Password <input type="text" name="password">
    <br><br>
    <p>Please Select the days of the week based on your course schedule: </p>
    <br>
    Monday <input type="checkbox" name="day" value="Monday">
    Tuesday <input type="checkbox" name="day" value="Tuesday">
    Wednesday <input type="checkbox" name="day" value="Wednesday">
    Thursday <input type="checkbox" name="day" value="Thursday">
    Friday <input type="checkbox" name="day" value="Friday">
    <input type="submit" value="submit">
</form>
<hr>   
<?php 
if (empty($_POST["username"]) or empty($_POST["password"])) {
    echo "Please fill the form.";
} else {
    echo "username=" .$_POST['username'] . "<br>";
    echo "password=" .$_POST["password"] . "<br>";
    echo "This form was submitted using " . $_SERVER["REQUEST_METHOD"] . "<br>";
    print_r($_POST);
}
?>
<?php include 'p7_includes/footer.php' ?>
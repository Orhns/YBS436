<?php include 'includes/header.php' ?>

<?php 
//To connect to the mysql database
$host = "localhost";
$database = "bookcrm";
$username = "root";
$password = "root";
$connection = mysqli_connect($host,$username,$password,$database);

//to check the connection
if (!$connection) {
    die("<p>" . "Connection failed. " . mysqli_connect_error() ."</p>");
} else {
    echo "<p>" . "Connection established to the database with mysqli (procedural)." . "</p>";
}
?>

<?php include 'includes/footer.php' ?>
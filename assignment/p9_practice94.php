<?php include 'includes/header.php' ?>

<?php 
// Connection to database with mysqli (procedural)
$host = "localhost";
$database = "bookcrm";
$username = "root";
$password = "root";
$connection = mysqli_connect($host,$username,$password,$database);

//Checking the connection
if (!$connection) {
    die("<p>" ."Connection failed ". mysqli_connect_error()."</p>");    
} else {
    echo "<p>" . "Connection established to the database with mysqli (procedural)." . "</p>"; 
}

$sql = "SELECT * FROM Categories ORDER BY CategoryName";
//returns a mysqli_result object
$result = mysqli_query($connection,$sql);
echo "<hr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['ID'] . " - "
       . $row['CategoryName'] . "<br>";
}
?>

<?php include 'includes/footer.php' ?>
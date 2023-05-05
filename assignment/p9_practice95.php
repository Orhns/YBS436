<?php include 'includes/header.php' ?>

<?php 
// Connecting to DB by PDO (OOP)
try {
    $connString = "mysql:host=localhost;dbname=bookcrm";
    $username = "root";
    $password = "root";

    $pdo = new PDO($connString,$username,$password);
    echo "<p>"."Connection established to the database with pdo (object oriented)"."</p>";

    $sql = "SELECT * FROM Categories ORDER BY CategoryName";
    //returns PDO's statement object
    $result = $pdo->query($sql);
    echo "<hr>";

    while ($row = $result->fetch()) {
        echo $row['ID'] . " - "
        .    $row['CategoryName'] . "<br>";
    }
    $pdo = null;

} catch (PDOException $e) {
    die("<p>" .$e->getMessage(). "</p>");
}
?>

<?php include 'includes/footer.php' ?>
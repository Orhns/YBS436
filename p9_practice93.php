<?php include 'p9_includes/header.php' ?>

<?php
// to connect database with PDO (Object Oriented)
try {
    $connString = "mysql:host=localhost;dbname=bookcrm";
    $username = "root";
    $password = "root";

    $pdo = new PDO($connString,$username,$password);

    echo "<p>" . "Connection established to the DB with PDO (Object Oriented)" . "</p>";
} catch (PDOException $e) {
    die("<p>".$e->getMessage()."</p>");
}
?>

<?php include 'p9_includes/footer.php' ?>
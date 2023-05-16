<?php include 'p10_includes/header.php' ?>
<?php require_once 'p10_includes/p10_config.php' ?>

<?php 
try {
    $connString = "mysql:host=".DBHOST.";dbname=".DBNAME;
    $pdo = new PDO($connString,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>"."Connection established to the database with pdo (object-oriented)."."</p>";
    echo "<hr>";

    $sql = "UPDATE Categories SET CategoryName='Literature' WHERE
            CategoryName='Business'";
    $count = $pdo->exec($sql);
    echo "<p>Updated " . $count . " rows.</p>";
    $pdo = null;

} catch (PDOException $e) {
    die( $e->getMessage() );
}

?>


<?php include 'p10_includes/footer.php' ?>
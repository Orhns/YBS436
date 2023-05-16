<?php 
define('DBHOST','localhost');
define('DBNAME','bookcrm');
define('DBUSER','root');
define('DBPASS','root');

try  {
    $connString = "mysql:host=".DBHOST.";dbname=".DBNAME;
    $pdo = new PDO($connString,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    echo "<p>"."Connection established to the database with pdo (object-oriented)."."</p>";
}
catch (PDOException $e) {
    die( $e->getMessage() );
}

?>
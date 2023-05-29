<?php

define('DBHOST','localhost');
define('DBNAME','bookcrm');
define('DBUSER','root');
define('DBPASS','root');

try {

    $connString = "mysql:host=".DBHOST.";dbname=".DBNAME;
    $pdo = new PDO($connString,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>"."Connection established to the database with pdo."."</p>";

}
catch (PDOException $e) {
    die($e->getMessage());
}

?>
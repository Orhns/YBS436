<?php include 'p7_includes/header.php' ?>
<a href="p7_practice75.php">Some of the keys and their values of $_SERVER superglobal array.</a>
<hr>
<?php 
    echo "SERVER_NAME=" . $_SERVER["SERVER_NAME"] . "<br>";
    echo "SERVER_SOFTWARE=" . $_SERVER["SERVER_SOFTWARE"] . "<br>";
    echo "SERVER_PROTOCOL=" . $_SERVER["SERVER_PROTOCOL"] . "<br><hr>";
    echo "DOCUMENT_ROOT=" . $_SERVER["DOCUMENT_ROOT"] . "<br>";
    echo "SCRIPT_NAME=" . $_SERVER["SCRIPT_NAME"] . "<hr>";
    echo "REQUEST_METHOD=" . $_SERVER["REQUEST_METHOD"] . "<br>";
    echo "REQUEST_TIME=" . $_SERVER["REQUEST_TIME"] . "<hr>";
    echo "HTTP_USER_AGENT=" . $_SERVER["HTTP_USER_AGENT"] . "<br>";
    echo "HTTP_REFERER=" . $_SERVER["HTTP_REFERER"] . "<hr>";
?>
<?php include 'p7_includes/footer.php' ?>
<?php include 'p12_includes/header.php' ?>
<?php require_once 'p12_includes/config.php' ?>

<?php

$sql = "SELECT * FROM Categories ORDER BY CategoryName";
$result = $pdo->query($sql);

while ($row = $result->fetch()) {
    echo '<li>';
    echo '<a href="p12_practice1.php?category=' . $row['ID'] . '">';
    echo $row['CategoryName'];
    echo '</a>';
    echo '</li>';
}

?>

<?php include 'p12_includes/footer.php' ?>

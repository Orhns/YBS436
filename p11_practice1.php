<?php include 'p10_includes/header.php' ?>
<?php require_once 'p10_includes/p10_config.php' ?>

<?php

$sql = "SELECT * 
FROM Categories 
ORDER BY ID";
// returns a PDOStatement object
$result = $pdo->query($sql);

echo "<table><thead><tr><th>ID</th><th>CategoryName</th></thead><tbody>";
while($row = $result->fetch()) {
    $tr = "<tr>";
    $tr .= "<td>" . $row['ID'] . "</td>";
    $tr .= "<td>" . $row['CategoryName'] . "</td>";
    $tr .= "</tr>";
    echo $tr;
}
echo "</tbody></table>";
?>   
  
<form method="post" action="p11_practice1.php">
    <p>Old <input type="text" name="old" />
    New <input type="text" name="new" size=50/>
    <input type="submit" /></p>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $old = $_POST['old'];
    $new = $_POST['new'];
    $sql = "UPDATE Categories SET CategoryName=:new WHERE
            CategoryName=:old";
    $preparesql = $pdo->prepare($sql);
    $preparesql->bindValue(':old', $_POST['old']);
    $preparesql->bindValue(':new', $_POST['new']);
    $preparesql->execute();
    $pdo = null;

}
?>

<?php include 'p10_includes/footer.php' ?>

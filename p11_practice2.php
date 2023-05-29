<?php include 'p10_includes/header.php' ?>
<?php require_once 'p10_includes/p10_config.php' ?>

<form method="get" action="p11_practice2.php">
    <p>ID <input type="text" name="id" />
    <input type="submit" name="submit" value="search"/></p>
</form>

<?php

// retrieve parameter value from query string
$id = $_GET['id'];

$sql = "SELECT ID, Title, CopyrightYear FROM Books WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $id);
$statement->execute();

echo "<table><thead><tr><th>ID</th><th>Title</th><th>CopyrightYear</th></thead><tbody>";
while($row = $statement->fetch()) {
    $tr = "<tr>";
    $tr .= "<td>" . $row['ID'] . "</td>";
    $tr .= "<td>" . $row['Title'] . "</td>";
    $tr .= "<td>" . $row['CopyrightYear'] . "</td>";
    $tr .= "</tr>";
    echo $tr;
}
echo "</tbody></table>";
?>   

<?php include 'p10_includes/footer.php' ?>

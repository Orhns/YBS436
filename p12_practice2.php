<?php include 'p12_includes/header.php' ?>
<?php require_once 'p12_includes/config.php' ?>

<form method="get" action="p12_practice2.php">
 <fieldset>
 <legend>Search Title</legend>
 <input type="search" name="txtSearch"
 placeholder="Enter search string"
 value="<?php echo $_GET['txtSearch']; ?>" />
 <input type="submit" />
 </fieldset>
</form>

<table border="1">
<?php
if (!empty($_GET['txtSearch'])) {

 try {
    // add SQL wildcard characters to search term
    $searchfor = '%' . $_GET['txtSearch'] . '%';
    $sql = "SELECT * FROM Books WHERE Title LIKE :searchfor";
    $result = $pdo->prepare($sql);
    $result->bindValue(':searchfor', $searchfor);
    $result->execute();
 }
 catch (PDOException $e) {
    die($e->getMessage());
 }

 while ($row = $result->fetch()) {
 echo "<tr>";
 echo "<td>".$row['ISBN10']."</td>";
 echo "<td>".$row['Title']."</td>";
 echo "<td>".$row['CopyrightYear']."</td>";
 echo "</tr>";
 }
} 
?>
</table>

<?php include 'p12_includes/footer.php' ?>

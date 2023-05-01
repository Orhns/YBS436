<?php
    $message = ''; //initialize
?>

<?php include 'p7_includes/header.php' ?>
<form action="p8_practice81.php" method="POST" enctype="multipart/form-data">
    <label for="image"><b>Upload File:</b></label>
    <input type="file" name="image" accept="image/*" id="image"><br>
    <input type="submit" value="Upload">
</form>
<?= $message ?>
<?php include 'p7_includes/footer.php' ?>
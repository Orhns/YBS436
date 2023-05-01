<?php
    $message = ''; //initialize
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //if form sent
        if ($_FILES['image']['error'] === 0) {  //is there is no errors
            $message = '<b>File:</b> ' . $_FILES['image']['name'] . '<br>';
            $message .= '<b>Size:</b> ' . $_FILES['image']['size'] . ' bytes <br>';
            $message .= '<b>Type:</b> ' . $_FILES['image']['type'] . '<br>';
            $message .= '<b>Tmp:</b> ' . $_FILES['image']['tmp_name'] . '<br>';
        } else {
            $message = 'The file could not be uploaded.';
        }
    }
?>

<?php include 'p7_includes/header.php' ?>
<form action="p8_practice83.php" method="POST" enctype="multipart/form-data">
    <label for="image"><b>Upload File:</b></label>
    <input type="file" name="image" accept="image/*" id="image"><br>
    <input type="submit" value="Upload">
</form>
<hr>
<?= $message ?>
<?php include 'p7_includes/footer.php' ?>
<?php
    $message = '';
    $moved = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {//if sent
        if ($_FILES['image']['error'] === 0) {//if no errors
            //store temp path and new destination
            $temp = $_FILES['image']['tmp_name'];
            $path = 'upload/' . $_FILES['image']['name'];
            //move the file and store the result in $moved
            $moved = move_uploaded_file($temp,$path);
        }
        if ($moved === true) { //if move worked, show image
            $message = '<img src="' . $path . '" >';
        } else {
            $message = 'The file could not be saved.';
        }
    }
?>
<?php include 'p7_includes/header.php' ?>
<?= $message ?>
<form method="POST" action="p8_practice84.php" enctype="multipart/form-data">
    <label for="image"><b>Upload file:</b></label>
    <input type="file" name="image" accept="image/*" id="image"><br>
    <input type="submit" value="upload">
</form>
<?php include 'p7_includes/footer.php' ?>
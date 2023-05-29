<?php include 'p12_includes/header.php' ?>
<?php require_once 'p12_includes/config.php' ?>

<?php

$book = null;
$id=null;
$title=null;
$copyrightyear=null;

//case1: viewing the webpage
if($_SERVER['REQUEST_METHOD']=='GET')
{
    $id="";
    $title="";
    $copyrightyear="";
    $buttonText = 'Add';
}

//case2: when adding record
if($_SERVER['REQUEST_METHOD']=='POST' && empty($_POST['id']))
{
    $id="";
    $title=$_POST['title'];
    $copyrightyear=$_POST['copyrightyear'];

    $sql="INSERT INTO books(Title,CopyrightYear) VALUES (:title, :copyrightyear)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title',$title);
    $statement->bindValue(':copyrightyear',$copyrightyear);
    $statement->execute();
    $id=$pdo->lastInsertId();

    $buttonText='Edit';
}

//case3: when editing existing record
if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['id']))
{
    $id=$_POST['id'];
    $title=$_POST['title'];
    $copyrightyear=$_POST['copyrightyear'];

    $sql="UPDATE books SET Title=:title, CopyrightYear=:copyrightyear 
          WHERE ID=:id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title',$title);
    $statement->bindValue(':copyrightyear',$copyrightyear);
    $statement->bindValue(':id',$id);
    $statement->execute();

    $buttonText='Edit';
}

?>

<form method="post" action="p12_practice3.php">
    <fieldset>
    <legend>Book Form</legend>
    <input type="hidden" name="id" value="<?php echo $id ?>"/>
    <label>Title</label>
    <input type="text" name="title" placeholder="Enter title" 
           value="<?php echo $title ?>">
    <label>CopyrightYear</label>
    <input type="text" name="copyrightyear" placeholder="Enter copyrightyear"
           value="<?php echo $copyrightyear ?>">
    <input type="submit" name="submit" 
           value="<?php echo $buttonText ?>">
    </fieldset>
</form>
<?php include 'p12_includes/footer.php' ?>

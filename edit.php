
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
      
    
    ?>
</head>
<body>
    <form action="" method="post">
    <?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'post'){
    $id =$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "UPDATE book SET name = '$name',description='$description', price=$price WHERE id=$id ";
    if($conn ->query($sql) === TRUE){
        header('Location: index.php');
        exit;
    }else{
        echo"Error;" .$sql ."<br>".$conn->error;
    }
 

}
else if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql ="SELECT * FROM book WHERE id =$id ";
    $result =$conn->query($sql);
    $row = $result->fetch_assoc();
 }

?>
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <br>
        <input type="text" name="name" placeholdar="name" value="<?php echo $row['name']?>">
        <br>
        <input type="number" name="price" placeholdar="price" value="<?php echo $row['price']?>">
        <br>
        <input type="text" name="description" placeholdar="description" value="<?php echo $row['description']?>">
        <br>
        <input type="submit" value="add">
    </form>
    <a class="btn btn_secodary mt-3" href="index.php">back</a>
</body>
</html>
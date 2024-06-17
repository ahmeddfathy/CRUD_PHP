<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'post'){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "INSERT INTO book(name,description,price) VALUES ('name','description',price)";
    if($conn->query($sql) === TRUE){
        header('Location: index.php');
        exit;
    }else{
        echo"Error;" .$sql ."<br>".$conn->error;
    }

}

?>
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
        <input type="text" name="name" placeholdar="name">
        <br>
        <input type="number" name="price" placeholdar="price">
        <br>
        <input type="text" name="description" placeholdar="description">
        <br>
        <input type="submit" value="add">
    </form>
</body>
</html>
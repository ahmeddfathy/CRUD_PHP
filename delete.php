<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'post'){
    $id =$_POST['id'];
    
    $sql = "DELETE FROM book WHERE id=$id ";
    if($conn->query($sql) === TRUE){
        header('Location: index.php');
        exit;
    }else{
        echo"Error;" .$sql ."<br>".$conn->error;
    }
 

}
else if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql ="SELECT * FROM book WHERE id ='$id' ";
    $result =$conn->query($sql);
    $row = $result->fetch_assoc();
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
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <br>
        <input type="submit" value="Delete">
    </form>
    <a class="btn btn_secodary mt-3" href="index.php">Cancel</a>
</body>
</html>
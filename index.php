<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $sql="SELECT * FROM book";
            $result =$conn->query($sql);
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['description']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td><a href='edit.php?id={$row['id']}'>edit</a>";
                    echo "<td><a href='delete.php?id={$row['id']}'>delete</a>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
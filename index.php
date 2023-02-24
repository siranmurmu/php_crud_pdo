<?php
require_once("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h3>View Data</h3>
    <a href="add.php">Add</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $pdo_statement = $pdo_conn->prepare("SELECT * FROM blogs");
                $pdo_statement->execute();
                $result = $pdo_statement->fetchAll();

                if(!empty($result)){
                    foreach($result as $row){
     
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                <td><a href="del.php?id=<?php echo $row['id'] ?>">Delete</a></td>
            </tr>

            <?php 
                    }
                }
             ?>
        </tbody>
    </table>
</body>
</html>
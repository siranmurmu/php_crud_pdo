<?php
    if(!empty($_POST["add_record"])) {
        require_once("db.php");
        $sql = "INSERT INTO blogs ( name ) VALUES ( :name )";
        $pdo_statement = $pdo_conn->prepare( $sql );
            
        $result = $pdo_statement->execute( array( ':name'=>$_POST['name'] ) );
        if (!empty($result) ){
          header('location:index.php');
        }
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <h3>Add Data</h3>
    Name:
    <input type="text" name="name"><br>
    <input type="submit" name="add_record" value="Add">
    </form>
</body>
</html>

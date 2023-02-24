<?php
require_once("db.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("UPDATE blogs SET name='" . $_POST[ 'name' ] . "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:index.php');
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM blogs where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

	if(!empty($result)){
       foreach($result as $row){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Edit Data</h1>
<form action="" method="post">
	Name:
	<input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
	<input type="submit" name="save_record" value="Update">
</form>
</body>
</html>

<?php 
        }
    }
?>
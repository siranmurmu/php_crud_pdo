<?php
require_once("db.php");
$pdo_statement=$pdo_conn->prepare("delete from blogs where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php');
?>
<?php
require_once('dbconfig.php');
$post_id = $_POST['id'];
$sql = "DELETE FROM post WHERE id=:id";
$query = $conn->prepare($sql);
$query->bindParam(':id', $post_id, PDO::PARAM_STR);
$query->execute();
header("location:../index.php");

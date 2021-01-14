<?php 
include_once("./config/db.php");
$post_id=$_GET["id"];
$sorgu = $db->prepare("DELETE FROM posts WHERE id=:post_id");
$sorgu->bindValue(":post_id", $post_id);
$sorgu->execute();

header("Location:blog.php");
?>
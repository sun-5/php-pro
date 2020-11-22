<?php
include 'mysqli.php';
$id=$_GET["id"];
$sql = "delete from message WHERE id=".$id;
$mysqli->query($sql);
header("Refresh:1;url=add.html");
?>
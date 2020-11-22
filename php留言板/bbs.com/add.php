<?php

 
include 'mysqli.php';
header('Content-type:text/html;charset=utf-8');
$id= $_POST["id"];
$user=$_POST["user"];
$title=$_POST["title"];
$content=$_POST["content"];
//id自增 不要插入
    $sql="insert into message(user,title,content,lastdate) values('$user','$title','$content',CURRENT_TIMESTAMP)";
  
    if($mysqli->query($sql))
    {
        echo "<script>alert('留言成功,1秒后跳转原页面')</script>";
    }else{
        echo "<script>alert('留言失败,1秒后跳转原页面')</script>";
     
    }
    header("Refresh:1;url=add.html");
 







?>
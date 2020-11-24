<?php
include "./config.php";

header("Content-type:text/html;charset=utf-8");//设置编码
$title= $_POST["title"];
$content = $_POST['content'];
$time=date("Y-m-d H:i:s");

$sql = "insert into new(title,content,cre_time) values('$title','$content','$time')";
//$conn->query($sql);//连接数据库并执行语句
if($conn->query($sql)){
    echo "<script>alert('发布成功，1秒后跳转原页面')</script>";
}else{
    echo "<script>alert('发布失败，1秒后跳转原页面')</script>";
}
header("Refresh:1;url=index.html");









?>
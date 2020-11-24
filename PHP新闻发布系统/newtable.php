<?php
include "./config.php";

//使用sql创建数据库表
$sql = "CREATE TABLE new(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content text NOT NULL,
    cre_time datetime
)ENGINE InnoDB DEFAULT CHARSET=utf8;";
// 先连接数据库 再执行sql语句
 if(mysqli_query($conn,$sql)){
     echo "数据表  new 创建成功";
 }else{
     echo "创建数据库表错误：".mysqli_error($conn);
 }

 mysqli_close($conn);
?>
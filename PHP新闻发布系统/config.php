<?php
header("Content-type:text/html;charset=utf-8");//设置编码
//数据库配置
$Host = "localhost";
$username = "xinwen";
$password = "xinwen";
$dbname = "xinwen";
//创建连接
$conn = mysqli_connect($Host,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');//设定字符集

//检测连接
// if(!$conn){
//     die("连接失败：".mysqli_connect_error());
// }else{
//     echo "连接数据库成功！";
// }
 
 

?>
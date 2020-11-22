<?php
include 'conn.inc.php';
$mysqli=new mysqli(HOST,USER,PWD,DBNAME);
//$mysqli变量 为 连接的资源句柄
$mysqli->set_charset("utf8");// 通过对象方式设置字符编码
if($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}
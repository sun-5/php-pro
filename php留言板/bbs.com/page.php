<?php
//后端数据分页
/*
1.链接数据库
2.从数据库中获取想要的数据
3.使用sql语句编写获取分页数据
4.把sql语句传入数据库
5.处理得到的分页过数据在页面展示
6.获取数据总数，计算页数和显示的数据以及偏移量
7.将分页数据初始化，对头部和尾部省略处理
8.设置分页条样式

*/
// 连接数据库
include 'mysqli.php';

//传入页码
$page=$_GET['pageid'];
$PageSize = 10;
// 根据页码取出数据，就是使用php操作mysql
//sql语句获取分页数据 select * from 表名 limit 起始位置，显示条数
$sql="select * from message limit ".($page-1) * $PageSize.",$PageSize ";
//传递sql语句到数据库中  执行结果 $res
$res = $mysqli->query($sql);

//输出对应分页的数据
if($res->num_rows>0)
{
    while ($row=$res->fetch_assoc()) //循环输出对应的数据
    {
        $arr[$row["id"]]["id"]=$row["id"];
        $arr[$row["id"]]["user"]=$row["user"];
        $arr[$row["id"]]["title"]=$row["title"]; 
        $arr[$row["id"]]["content"]=$row["content"];
        $arr[$row["id"]]["lastdate"]=$row["lastdate"];
    }
}

$data = array_values($arr);//重置数组索引 

//获取数据总条数
$count_sql = "SELECT COUNT(*) FROM message";
$count_res = $mysqli->query($count_sql);
list($total) = $count_res->fetch_row();  

//计算页数
$pages = ceil($total/$PageSize) ;
$arr2["data"] = $data;
$arr2["total"] = $total;
$arr2["pages"] = $pages;

echo json_encode($arr2);

mysqli_close($mysqli);//关闭连接

?>
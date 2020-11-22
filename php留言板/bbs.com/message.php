<?php

include 'mysqli.php';
$sql="select * from message";
$result=$mysqli->query($sql);
if($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        $arr[$row["id"]]["id"]=$row["id"];
        $arr[$row["id"]]["user"]=$row["user"];
        $arr[$row["id"]]["title"]=$row["title"];//$arr[1]["title"]=$row["title"]
        $arr[$row["id"]]["content"]=$row["content"];//$arr[1]["content"]=$arr["content"]
        $arr[$row["id"]]["lastdate"]=$row["lastdate"];
    }
}
echo json_encode(array_values($arr) );//重置数组索引



?>
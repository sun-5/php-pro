<?php
include "./config.php";

header("Content-type:text/html;charset=utf-8");//设置编码

$sql = "select * from new";
$res = $conn->query($sql);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻列表</title>
    <style>
        body{background:#eee}
        th{    min-width: 80px;}
    </style>
</head>
<body>
 
<a href="index.html">返回发布页面</a>
<table border='1' cellspacing="0" width="360">
    <tr>
        <th>编号</th>
        <th>文章标题</th>
        <th>文章内容</th>
        <th>编辑文章</th>
        <th>发布时间</th>
    </tr>
    <?php 
        while($row=mysqli_fetch_array($res)){ 
            ?>
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["title"];?></td>
        <td><?php echo $row["content"];?></td>
        <td>
            <a href="edit.php?id=<?php echo $row["id"];?>">编辑</a>
            <a href="del.php?id=<?php echo $row["id"];?>">删除</a>
        </td>
        <td><?php echo $row["cre_time"];?></td>
        <?php  } ?>
    </tr>

   

</table>

</body>
</html>
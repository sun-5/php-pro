# php打造留言板功能

## 创建所需的php文件 
## 创建本地站点bbs.com，放入对应的文件

### phpMyadmin 创建本地数据库 库名 liuyan
#### 图形化直接创建数据库表 表名message
#### sql语句创建
-  CREATE TABLE `message`(  <br>
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,  <br>
    `user` varchar(25) NOT NULL,  <br>
    `title` varchar(50) NOT NULL,  <br>
    `content` tinytext NOT NULL,  <br>
    `lastdate` timestamp NOT NULL,  <br>
    PRIMARY KEY(`id`)  <br>
)ENGINE InnoDB DEFAULT CHARSET=utf8  <br>
AUTO_INCREMENT=1;  <br>

### add.html  评论页面

### add.php   提交评论页面传输内容到数据库

### conn.inc.php  连接数据库的配置文件  增删改查数据，都需要通过mysql语句执行数据库

### style.css 文件美化样式

### del.php  删除评论文件

### list.php  获得数据库中所有数据展示在页面上


# php打造留言板功能

## 创建所需的php文件

### phpMyadmin 创建本地数据库 bbs
#### 图形化直接创建数据库表
#### sql语句创建
-  CREATE TABLE 'message'(
    'id' tinyint(5) NOT NULL AUTO_INCREMENT,
    'user' varchar(25) NOT NULL,
    'title' varchar(50) NOT NULL,
    'content' tinytext NOT NULL,
    'lastdate' timestmap NOT NULL,
    PRIMARY KEY('id')
)ENGINE InnoDB DEFAULT CHARSET=utf8
AUTO_INCREMENT=1;

### add.html  评论页面

### add.php   提交评论页面传输内容到数据库

### conn.php  连接数据库的配置文件

### style.css 文件美化样式

### del.php  删除评论文件

### list.php  获得数据库中所有数据展示在页面上


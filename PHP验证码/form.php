 <?php
 if(isset($_REQUEST["code"])){
     session_start();
     if(strtolower($_REQUEST["code"])==$_SESSION["code"]){
         header('content-type:text/html;charset=utf8');
         echo  "输入正确";
     }else{
        header('content-type:text/html;charset=utf8');
        echo  "输入错误";
     }
     exit();
 }
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>验证码使用验证</title>
 </head>

 <body>
 
     <form action="form.php" method="post">
     <span>验证码</span>
         <img  id="erwima" src="code.php" title="验证码看不清，换一张" onclick="this.src=this.src+'?' + new Date().getTime()">
        <span>请输入验证码：<input type="text" name="code" id="" value=''></span>
        <button type="submit" value="提交">提交</button>
     </form>
<script>
 
</script>
 </body>

 </html>
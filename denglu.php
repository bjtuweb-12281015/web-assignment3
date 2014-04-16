<html>
<head>
      <title>登陆界面</title>
</head>

<body>
<?php
    if (!$_denglu["denglu_name"]) {
      ?>
<form action="login.php" method="post">
<center>
      
     <a href="http://so.360.cn/s?q=chrome&src=360chrome_addr&ie=utf-8">登陆</a>
      <a href="register.html?str=denglu">注册</a>

<br><br>
登陆账户:<input type="text" name="name" id="zhanghu" maxlength="10">
<br></br>
登陆密码:<input type="text" name="password" id="mima" maxlength="10">
<br><br>
</center>
</form>
</body>
</html>
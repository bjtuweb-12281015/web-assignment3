<?php  
require_once("denglu.php");  
 
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  
    echo "请填写用户名<br>";  
     echo"<script type='text/javascript'>alert('请填写用户名');location='denglu.php';  
            </script>";  
      
      
       
  
}  
elseif($password == "")  
{  
  
      
    echo"<script type='text/javascript'>alert('请填写密码');location='denglu.php';</script>";  
      
}  
else  
{   
    $colum=collect_data();  
     if(($colum['name'] == $name) && ($colum['password'] == $password))  
  
        {  
  
         
            echo"<script type='text/javascript'>alert('登陆成功');location='liuyu.html';</script>";  
  
         }  
           
     else  
  
         
        echo"<script type='text/javascript'>alert('密码错误');location='denglu.php';</script>";  
  
     
  
}  
?>  
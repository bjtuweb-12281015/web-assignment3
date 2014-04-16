<?php  

function(){  
      
$db = mysql_connect("localhost","root","")   
    or die("连接数据库失败！");  
  
mysql_select_db("user")  
    or die ("不能连接到user".mysql_error());  
      
      
}  
      
?>  
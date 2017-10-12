<?php
header('Content-type:text/html;charset=utf8'); 
$username=trim($_POST['username']);
$username=strtolower($username);
$password=$_POST['pwd'];
//加密
$username=addslashes($username);
$password=addslashes($password);
//包含数据库连接文件，建立数据库连接
require('cn.php');

if(empty($username)){
	    echo '<script>alert("请输入用户名");history.back()</script>';
}else if(empty($password)){
	    echo '<script>alert("请输入密码");history.back()</script>';
}
else{
$sql="select * from newsuserinfo where username='{$username}' and password='{$password}'";


// $sql="select * from userinfo";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if ($result) {
 //  echo '登录成功！欢迎你，'.$result['username'];
    session_start();
    $_SESSION['username']=$username;
    // $_SESSION['nickname']=$result['nickname'];
    header('Location:index.php');
}else{
    echo '<script>alert("用户名或密码错误");history.back()</script>';
    exit();
    }
}
?>
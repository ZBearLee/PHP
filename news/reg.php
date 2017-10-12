<?php
header('Content-type:text/html;charset=utf-8');
$username=trim($_POST['username']);
$username=strtolower($username);
$password=$_POST['password'];
$email=$_POST['email'];
require('cn.php');
$pdo->query('set names utf8');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$sql="select * from newsuserinfo where username='{$username}'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if ($result) {
    echo '<script>alert("用户名已存在,请重新注册");history.back();</script>';
    exit();
}
$sql="insert into newsuserinfo(username,password,email) values('{$username}','{$password}','{$email}')";
// echo $sql;
if ($pdo->exec($sql)) {
    // echo '注册成功！';
    // // echo '欢迎你，'.$nickname;
    //     echo '欢迎你，'.$username;
    // echo '，<a href="login.html">单击登录</a>';
    // <a href="login.html">回到主页</a>;
    header('Location:login.html');
}else{
    echo '<script>alert("注册失败");history.back();</script>';
    exit();
}
?>
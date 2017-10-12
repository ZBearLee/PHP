<?php 
require('news_cn.php');
$tname=$_POST['tname'];
$head=$_POST['head'];
$content=$_POST['con'];
$sql="INSERT INTO $tname (`head`, `content`) VALUES ('$head','$content')";
if ($pdo->exec($sql)) {
    header('Location:index.php');
}else{
	echo "错误";
}
 ?>



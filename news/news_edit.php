<?php 
require('news_cn.php');
$tname=$_POST['tname'];          //表格名
$id=$_POST['id'];//标题
$head=$_POST['head'];//新闻标题
$content=$_POST['con'];//新闻内容
/*$sql="SELECT * FROM `$tname` WHERE where head=";
$newsid=*/
$sql="UPDATE $tname SET `head`='$head',`content`='$content' WHERE id=$id";
if ($pdo->exec($sql)) {
    header('Location:index.php');
}else{
	echo "请确认是否进行了修改";
}
 ?>
<?php 
require('news_cn.php');
$class=$_GET['class'];
$head=$_GET['head'];    //name of head
/*echo "$class";
echo "$head";
*/if ($class=='s') {
	$tname='sport';      //name of table
}
if ($class=='t') {
	$tname='tec';
}
if ($class=='k') {
	$tname='kno';
}
if ($class=='c') {
	$tname='car';
}
$sql="DELETE FROM `{$tname}` WHERE head='{$head}'";
if ($pdo->exec($sql)) {
    header('Location:index.php');
}else{
  echo "错误";
}
 ?>

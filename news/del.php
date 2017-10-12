<?php
$id=$_GET['id'];
require('cn.php');
$sql="delete from newsuserinfo where id={$id}";
if ($pdo->exec($sql)) {
    $url='list.php';
    header('Location:'.$url);
}
?>
<?php 
require('cn.php');
$class=$_GET['class'];
if ($class=='s') {
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="seeall">
<h1>汇聚天下大事&nbsp;&nbsp;关注社会焦点</h1>
        <div class="scontent">
            <div class="ssport">
            <h3><?=$tname?></h3>
                <?php
                    $sql="SELECT * FROM $tname";
                ?>
                    <table>
                        <tbody>
                          <?php foreach ($pdo->query($sql) as $value) {?>
                            <tr>
                                <td width="400px"><?=$value['head']?></td>
                                <td width="100px"><?=$value['content']?></td>
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>
            </div>
</div><!-- content -->
</div>   
</body>
</html>
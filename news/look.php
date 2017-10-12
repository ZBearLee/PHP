<?php 
require('news_cn.php');
$class=$_GET['class'];
$head=$_GET['head'];    //name of head
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
$sql="SELECT * FROM {$tname} WHERE head='{$head}'";
$rs=$pdo->query($sql);
$list=$rs->fetchAll(PDO::FETCH_ASSOC);
foreach ($list as $key => $value) {
	$headcon=$value['head'];
	$contentcon=$value['content'];
}
 ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看</title>
    <style>
    *{
    	margin:0px;
    	padding:0px;
    }
    body{
    	background: url("./images/234913.jpg");
    	background-size:100%;
    }
    .container{
    	padding-left: 600px;
    	margin-top: 250px;

    }
  .container h1{
	font-size: 40px;
	font-weight: bold;
	color: #65BE60;
	margin-left: 130px;
}
</style>
</head>
<body>
<div class="container">
    <h1>查看</h1>
    <form action="news_edit.php" method="post" name="form">
       <table>
                        <tbody>                       
                            <tr>
                                <td> <label for="head">标题：</label></td>
                                <td ><input type="text" name="head" id="head" value="<?php echo $headcon?>"></td>
                            </tr> 
                              <tr>
                                <td><label for="con" >内容：</label></td>
                                <td ><textarea name="con" id="con" cols="30" rows="10" ><?php echo $contentcon?></textarea></td>
                            </tr>                             
                        </tbody>
                    </table>
        </p>
    </form>
    </div>
</body>
</html>
 









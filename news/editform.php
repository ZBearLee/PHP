<?php 
require('news_cn.php');
$class=$_GET['class'];
$head=$_GET['head'];

if ($class=='s') {
	$tname='sport';
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
$sql="select * from $tname where head='{$head}'";

$rs=$pdo->query($sql);
$list=$rs->fetchAll(PDO::FETCH_ASSOC);
foreach ($list as $key => $value) {
	$id=$value['id'];
	$headcon=$value['head'];
	$contentcon=$value['content'];
	
}
 ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改</title>
 <style>
    *{
        padding:0px;
        margin:0px;
    }
    body{
      background: url('./images/290301.jpg');
      background-size:100%;
    }
      #class{
      margin-top: 210px;
      margin-left: 800px;
    }
    .sub{
      font-size: 22px;
      color: #634239;
      margin-left: 75px;
    }
   tbody tr{
      padding-top: 15px;
    }
    h1{
      font-size: 40px;
      color: #A3937D;
      margin-left: 120px;
    
    }
    .center{  
      width: 50px;
      height: -200px;
    }
    </style>
</head>
<body>
 <div id="class">
    <h1>修改</h1>
    <form action="news_edit.php" method="post" name="form">
       <table>
                        <tbody>           
                        <div class="center">            
                            <tr>
                                <td> <label for="head">标题：</label></td>
                                <td ><input type="text" name="head" id="head" value="<?php echo $headcon?>"></td>
                            </tr> 
                              <tr>
                                <td><label for="con" >内容：</label></td>
                                <td ><textarea name="con" id="con" cols="30" rows="10" ><?php echo $contentcon?></textarea></td>
                            </tr>
                                 </div>
                               <tr>
                                  <td ><input type="hidden" value="<?php echo "$id"?>" name="id"></td>
                                <td ><input type="submit" value="修改" class="sub"></td>
                               <td><input type="hidden" value="<?php echo "$tname"?>" name="tname">
                               </td>
                            </tr>                              
                        </tbody>
                    </table>
        </p>
    </form>
    </div>
</body>
</html>

 



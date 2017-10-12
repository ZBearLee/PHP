<?php 
require('news_cn.php');
$class=$_GET['class'];

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
 ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>添加</title>
    <style>
    *{
       padding:0px;
       margin:0px;
    }
    body{
         background: url('./images/281302.jpg');
         background-size:100%;
}
.container{
    margin-left: 1100px;
    margin-top: 300px;
}
.container h1{ 
    font-size: 40px;
    margin-left: 100px;
    color: #A96E5C;
}
.sub{
      font-size: 20px;
      color: #634239;
      margin-left: 75px;
      font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
<!-- <div id="dtitle"> -->
    <h1>添加</h1>
    <form action="add.php" method="post" name="form">
       <table>
                        <tbody>                       
                            <tr>
                                <td> <label for="head">标题：</label></td>
                                <td ><input type="text" name="head" id="head"></td>
                            </tr> 
                              <tr>
                                <td><label for="con" >内容：</label></td>
                                <td ><textarea name="con" id="con" cols="30" rows="10" ></textarea></td>
                            </tr>
                               <tr>
                                  <td ><input type="hidden" value="<?php echo "$tname"?>" name="tname"></td>
                                <td ><input type="submit" value="添加" class="sub"></td>
                            </tr>                              
                        </tbody>
                    </table>
        </p>
    </form>
    </div>
</body>
</html>


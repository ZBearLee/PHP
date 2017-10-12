<?php
//建立数据库连接
    try{
        $dsn='mysql:host=localhost;dbname=news';
        $pdo=new PDO($dsn, 'root', '');
        //设置字符集为utf8
        $pdo->query('set names utf8');
        //设置PDO错误警告模式，用于调试
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }catch( PDOException $e){
        echo "error:". $e->getMessage() . '<br>';
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <link rel="stylesheet" href="index.css">
   <script type="text/javascript" src="js/myfocus-2.0.4.min.js"></script><!--引入myFocus库-->
<script type="text/javascript" src="js/mf-pattern/slide3D.js"></script><!--引入风格js文件-->
<link href="js/mf-pattern/slide3D.css" type="text/css" /><!--引入风格css文件-->
</head>
<body>
      <div class="head">
            <h1>新闻连连看<a href="home.html" class="logout">退出</a></h1>      
        </div> 
        <div class="content">        
            <div class="sport">
            <h3 class="h">体育<span><a href="addform.php?class=s" class="rights">添加</a></span></h3>
                <?php
                    $sql="select * from sport";
                ?>
                    <table>
                        <tbody>
                          <?php foreach ($pdo->query($sql) as $value) {?>
                            <tr>
                                <td width="400px"><?=$value['head']?></td>
                                <td width="100px"><a href="look.php?class=s&head=<?php echo $value['head']?>">查看</a></td>
                                <td width="100px"><a href="editform.php?class=s&head=<?php echo $value['head']?>">修改</a></td>
                                <td width="100px"><a href="news_del.php?class=s&head=<?php echo $value['head']?>">删除</a></td>
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>
            </div>

            <div class="tec">
            <h3 class="h">教育<span><a href="addform.php?class=t" class="right">添加</a></span></h3>
              <?php
                    $sql="select * from tec";
                ?>
                    <table>
                        <tbody>
                          <?php foreach ($pdo->query($sql) as $value) {?>
                            <tr>
                                <td width="400px"><?=$value['head']?></td>
                                <td width="100px"><a href="look.php?class=t&head=<?php echo $value['head']?>">查看</a></td>
                                <td width="100px"><a href="editform.php?class=t&head=<?php echo $value['head']?>">修改</a></td>
                                <td width="100px"><a href="news_del.php?class=t&head=<?php echo $value['head']?>">删除</a></td>
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>
            </div>
            <div class="kno">
               <h3 class="h">科技<span><a href="addform.php?class=k" class="right">添加</a></span></h3>
                  <?php
                    $sql="select * from kno";
                ?>
                    <table>
                        <tbody>
                          <?php foreach ($pdo->query($sql) as $value) {?>
                            <tr>
                                <td width="400px"><?=$value['head']?></td>
                                <td width="100px"><a href="look.php?class=k&head=<?php echo $value['head']?>">查看</a></td>
                                <td width="100px"><a href="editform.php?class=k&head=<?php echo $value['head']?>">修改</a></td>
                                <td width="100px"><a href="news_del.php?class=k&head=<?php echo $value['head']?>">删除</a></td>
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>
            </div>
            <div class="car">
               <h3 class="h">汽车<span><a href="addform.php?class=c" class="right">添加</a></span></h3>
                <?php
                    $sql="select * from car";
                ?>
                    <table>
                        <tbody>
                          <?php foreach ($pdo->query($sql) as $value) {?>
                            <tr>
                                <td width="400px"><?=$value['head']?></td>
                                <td width="100px"><a href="look.php?class=c&head=<?php echo $value['head']?>">查看</a></td>
                                <td width="100px"><a href="editform.php?class=c&head=<?php echo $value['head']?>">修改</a></td>
                                <td width="100px"><a href="news_del.php?class=c&head=<?php echo $value['head']?>">删除</a></td>
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div><!-- content -->
</div>
</body>
</html>
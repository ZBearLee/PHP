<?php
//防跳墙，需要在登录后的每个页面上包含
require('check_login.php');
echo "<p>{$_SESSION['username']}，你好！<a href='logout.php'>注销</a></p>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
    <style>
        table{
            width:60%;
            border-collapse: collapse;
        }
        table,th,td{
            border:1px solid #aaa;
        }
    </style>
</head>
<body>

    <?php
    require('cn.php');
    $sql="select * from newsuserinfo";
    ?>
    <table>
        <caption>用户列表</caption>
        <thead>
            <tr>
                <th>用户名</th>
                <th>email</th>
                <th>登录次数</th>
                <th>登录时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sql) as $value) {?>
            <tr>
                <td><?=$value['username']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['login_count']?></td>
                <td><?=empty($value['login_time'])?'':date('Y-m-d',$value['login_time'])?></td>
                <td><a href="edit.php?id=<?=$value['id']?>">修改</a> <a href="del.php?id=<?=$value['id']?>" onclick="return del_comfirm();">删除</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        function del_comfirm(){
            if (confirm('是否确认删除？')) {
                return true;
            }else{
                return false;
            }
        }
    </script>
</body>
</html>

<h1 class="text-center">會員管理中心</h1>   


<div class="col-8 mx-auto d-flex justify-content-between">

</div>
 <?php


$dsn="mysql:host=localhost;dbname=mypolling;charset=utf8";
$pdo=new PDO($dsn,'root','');
// $sql="SELECT * FROM `users`";

$sql="select `users`.`id`,`account`,`name`,`birthday`,`gender`,`email` from `users` where `id` > 0;";
$users=$pdo->query($sql)->fetchALL();


echo "<table class='table col-8 mx-auto'>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>帳號</td>";
echo "<td>姓名</td>";
echo "<td>性別</td>";
echo "<td>生日</td>";
echo "<td>信箱</td>";
echo "<td>操作</td>";

echo "</tr>";
foreach($users as $user){
    echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['account']}</td>";
        echo "<td>{$user['name']}</td>";
        echo "<td>{$user['gender']}</td>";
        echo "<td>{$user['birthday']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>";
        echo "<a href='edit_user.php?id={$user['id']}'><button class='btn btn-sm btn-success'>編輯</button></a>";
        // echo "<a href='del_user.php?id={$user['id']}'><button class='btn btn-sm btn-danger'>刪除</button></a>";
        
        echo "</td>";
    echo "</tr>";
}


echo "</table>"
?>


</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<h1 class="text-center font-weight-bold  text-primary">會員管理中心系統</h1>   
<div class="col- mx-auto d-flex justify-content-between">

</div>
 <?php 

// include_once "./api/db.php";
// $dsn = "mysql:host=localhost;charset=utf8;dbname=mypolling"; 
// $dsn = "mysql:host=220.128.133.15;charset=utf8;dbname=s1100411";
// $pdo=new PDO($dsn,'root','');
// $sql="SELECT * FROM `users`";

$sql="select `users`.`id`,`account`,`name`,`birthday`,`gender`,`email` from `users` where `id` > 0;";
$users=$pdo->query($sql)->fetchALL();


echo "<table class='table col-12  mx-auto table-hover table table-striped'>";
echo "<thead  class='table-secondary text-center thead-light'>";
echo "<td>id</td>";
echo "<td>帳號</td>";
echo "<td>姓名</td>";
echo "<td>性別</td>";
echo "<td>生日</td>";
echo "<td>信箱</td>";
echo "<td>操作選項</td>";
// echo "<td>刪除</td>";

echo "</thead>";





foreach($users as $user){
    echo "<tr class='text-center'>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['account']}</td>";
        echo "<td>{$user['name']}</td>";
        if($user['gender'] == 1 ){
            echo "<td>男</td>";
        }else if($user['gender'] == 2 ){
            echo "<td>女</td>";
        }else if($user['gender'] == 3 ){
            echo "<td>其他</td>";
        }
        echo "<td>{$user['birthday']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>";
        echo "<a href='../api/edit_user.php?id={$user['id']}'><button class='btn btn-sm btn-success mx-1'>編輯</button></a>";
        echo "<a href='del_user.php?id={$user['id']}'><button class='btn btn-sm  btn-danger'>刪除</button></a>";

        echo "</td>";
        echo "</tr>";
}

echo "</table>"
?>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

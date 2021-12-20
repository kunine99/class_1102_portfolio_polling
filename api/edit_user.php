<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


<?php
//更新使用者資料

include_once "db.php";


$dsn="mysql:host=localhost;dbname=mypolling;charset=utf8";
$pdo=new PDO($dsn,'root','');

//編輯會員資料
$user_id=$_GET['id'];  //login資料表的id .member資料表login_id
$user_sql="select * from `users` where  `users`.`id`='$user_id'";
// echo $user_sql;
$user=$pdo->query($user_sql)->fetch();

?>
<div class="container">

<h2>編輯會員資料</h2>
<form action="save_user.php" method="post" class="col-md-6">
    <div class="list-group">
        <input type="hidden" name="id" value='<?=$user['id'];?>'>
        <li class="list-group-item">帳號:<input type="text" name='account' value='<?=$user['account'];?>'></li>
        <li class="list-group-item">密碼:<input type="password" name='password' value='<?=$user['password'];?>'></li>
        <li class="list-group-item">姓名:<input type="text" name='name' value='<?=$user['name'];?>'></li>
        <li class="list-group-item">生日:<input type="date" name='birthday' value='<?=$user['birthday'];?>'></li>
        <li class="list-group-item">性別:<input type="text" name='gender' value='<?=$user['gender'];?>'></li>
        <li class="list-group-item">email:<input type="text" name='email' value='<?=$user['email'];?>'></li>

        
    </div>
    <input type="submit" value="確認修改" class="btn btn-primary my-3">
    <input type="reset" value="重置" class="btn btn-warning my-3">
</form>

</div>

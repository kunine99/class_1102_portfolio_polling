<?php
//更新使用者資料


$dsn="mysql:host=localhost;dbname=mypolling;charset=utf8";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$account=$_POST['account'];
$password=$_POST['password'];
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$email=$_POST['email'];


$update_users_sql="update `users` set `account`='$account',`password`='$password',`name`='$name',`email`='$email' where `id`='$id'";
$pdo->exec($update_users_sql);



// echo "login更新<br>".$update_users_sql."<br>";
// header("../backend/member.php");


// to("../backend/?do=member");

?>
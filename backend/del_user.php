<?php 
include_once "../api/db.php";
// echo "123";

del('mypolling_users',$_GET['id']);

to("./index.php");
?>
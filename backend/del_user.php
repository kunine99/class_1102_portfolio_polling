<?php 
include_once "../api/db.php";
// echo "123";

del('users',$_GET['id']);

to("./index.php");
?>
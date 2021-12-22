<?php 
include_once "../api/db.php";
// echo "123";
del('topics',$_GET['id']);

to("./index.php");


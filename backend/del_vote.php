<?php 
include_once "../api/db.php";
// echo "123";
del('mypolling_topics',$_GET['id']);

to("./index.php");


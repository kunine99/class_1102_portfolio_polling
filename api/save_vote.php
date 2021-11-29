<?php
include_once "db.php";

$opt=$_POST['opt'];
$opt=find("options",$opt_id);
//$opt['count']++;
//$opt['count']+=1;
$opt['count']=$opt['count']+1;

update('options',['count'=>$opt['opt']],['id'=>$opt_id]);


header("location:../index.php?do=vote_result");
















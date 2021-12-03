<?php include_once "db.php"?>
<?php
// 看這個session有沒有被建立，如果有被建立就+1
// 如果沒有被建立就預設是一個

//新增完主題後要回到後台
$topic=['topic'=>$_POST['subject']];
insert('topics',$topic);

to("../backend");



// $subject=$_GET['id'];
// topic_id=我們拿到的這個主題的id
// insert('option',['opt'=>"",'topic_id'=>$id]);

// to("../backend/?do=edit_subject_");









?>
















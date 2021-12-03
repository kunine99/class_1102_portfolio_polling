<?php include_once "db.php"?>
<?php
// 看這個session有沒有被建立，如果有被建立就+1
// 如果沒有被建立就預設是一個

$id=$_GET['id'];
insert('options',['opt'=>"",'topic_id'=>$id]);

to("../backend/?do=edit_subject&id=$id");



// $subject=$_GET['id'];
// // topic_id=我們拿到的這個主題的id
// insert('option',['opt'=>"",'topic_id'=>$id]);

// to("../backend/?do=edit_subject_");









?>
















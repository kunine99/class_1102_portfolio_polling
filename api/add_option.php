<?php include_once "db.php";?>
<?php
// 看這個session有沒有被建立，如果有被建立就+1
// 如果沒有被建立就預設是一個

//接收由URL傳過來的題目id值
$id=$_GET['id'];

//執行新增空白選項紀錄，並紀錄此選項為主題$id的選項
insert('options',['opt'=>"",'topic_id'=>$id]);

//新增空白選項紀錄完成後，導回管理問卷頁面，帶上主題的id才能在顯示時顯示原本的問題
to("../backend/?do=edit_subject&id=$id");



// $subject=$_GET['id'];
// // topic_id=我們拿到的這個主題的id
// insert('option',['opt'=>"",'topic_id'=>$id]);

// to("../backend/?do=edit_subject_");

?>
















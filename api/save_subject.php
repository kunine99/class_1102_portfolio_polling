<!-- 儲存題目和選項 -->
<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 * 
 */

// print_r($_POST);
//post裡面現在有subj跟id 一定會錯?

$topic_array = ['topic' => $_POST['subject']];
insert('topics', $topic_array);
$topic_sql = "select * from `topics` where `topic`='{$_POST['subject']}'";
echo $topic_sql;
$topic = $pdo->query($topic_sql)->fetch();

//myvote裡的資料表
// 不是空白才把我的資料加進去
foreach ($_POST['options'] as $opt) {
    if ($opt != "") {

    $opt_array = ["opt" => $opt, "topic_id" => $topic['id']];
    insert('options', $opt_array);
}

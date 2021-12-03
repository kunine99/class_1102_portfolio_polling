<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 * 
 */

$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    // if(array_key_exists($key,$opt_id)){
    // 判斷選項是否有內容，有則更新，無則刪除
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        // insert('options',['opt'=>$opt,'topic_id'=>$topic_id]);
        // 如果有空白資料讓你編輯，但你不打任何東西要怎麼辦?
        //db.php 有寫好的函式
        del('options',$opt_id[$key]);
    }

}
to("../backend/index.php")

?>



<!-- 不是空白才把我的資料加進去
但如果是空白的話，他是不要被更新?還是要刪除?
為了寫的完善，我們還要再寫判斷 -->

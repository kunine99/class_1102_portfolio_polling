<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

 //依據表單傳過來的topic欄位取得問卷主題資料
$topic=$_POST['topic'];

//依據表單傳過來的topic_id欄位取得問卷id資料
$topic_id=$_POST['topic_id'];

//使用update自訂函式來更新問卷主題內容
update('topics',['topic'=>$topic],['id'=>$topic_id]);

//依據表單傳過來的選項內容，取得選項內容，為一個陣列
$options=$_POST['options'];

//依據表單傳過來的選項id內容，取得選項id，為一個陣列
$opt_id=$_POST['opt_id'];

//使用迴圈對選項內容進行編歷
foreach ($options as $key => $opt) {
    // if(array_key_exists($key,$opt_id)){
    //判斷選項是否有內容，有則更新，無則刪除
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        // insert('options',['opt'=>$opt,'topic_id'=>$topic_id]);
        // 如果有空白資料讓你編輯，但你不打任何東西要怎麼辦?
        //db.php 有寫好的函式
        del('options',$opt_id[$key]);
    }
}

//完成問卷和選項更新，導向回後台首頁
to("../backend/index.php")


// 不是空白才把我的資料加進去
// 但如果是空白的話，他是不要被更新?還是要刪除?
// 為了寫的完善，我們還要再寫判斷 

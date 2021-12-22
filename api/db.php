<?php
//填資料庫名稱
$dsn = "mysql:host=localhost;charset=utf8;dbname=mypolling"; 
// $pdo = new PDO($dsn, 'root', '');

// $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100411"; 
$pdo = new PDO($dsn, 'root', '');

// $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100411";
// $pdo = new PDO($dsn, 's1100411', 's1100411');

session_start();

//取得符合條件的一筆資料
function find($table, $id)
{
    global $pdo;
    // $sql = "SELECT * FROM `$table` WHERE `id`='$id'";
    $sql = "SELECT * FROM `$table` WHERE ";

    if (is_array($id)) {
        foreach ($id as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        $sql = $sql . implode(" AND ", $tmp);
    } else {
        $sql = $sql . "`id`='$id'";
    }

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}



//計算符合條件的資料筆數
function rows($table, $array)
{
    global $pdo;
    $sql = "SELECT count(*) FROM `$table` WHERE ";
    foreach ($array as $key => $value) {
        $tmp[] = "`$key`='$value'";
    }

    $sql = $sql . implode(" AND ", $tmp);
    return $pdo->query($sql)->fetchColumn();
}


//取出指定資料表的所有資料
function all($table, ...$arg)
{
    global $pdo;
    $sql = "SELECT * FROM `$table` ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach ($arg[0] as $key => $value) {
                $tmp[] = "`$key`='$value'";
            }

            $sql = $sql . "where " . implode(" AND ", $tmp);
        } else {
            $sql = $sql . $arg[0];
        }
    }

    if (isset($arg[1])) {
        $sql = $sql . $arg[1];
    }

    // echo $sql;

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    // return $pdo->exec($sql)告訴我影響了幾筆資料


    // implode('`,`')用在欄位

    // update函式設計
    // 1.指定資料表 $table
    // 2.指定更新的欄位 ????
    // 3.指定更新的條件 ????



    // 把陣列轉成c括的字串
    // $array=[
    //     'col1'=>'va11',
    //     'col2'=>'val2',
    //     'col3'=>'val3'];

    // echo implode
    // foreach ($array as $key => $value) {
    //     $sql="`$key`='$value'";
    // echo $sql;  如果echo放在迴圈外只會得到最後一次執行的結果

}

// 更新 新增 查詢
function update($table, $column, $where)
{
    global $pdo;

    $sql_set = '';
    foreach ($column as $key => $value) {
        $sql_set = $sql_set . "`$key`='$value',";
    }
    $sql_set = trim($sql_set, ',');

    $sql_where = '';
    foreach ($where as $key => $value) {
        $sql_where = $sql_where . "`$key`='$value' AND ";
    }
    $sql_where = mb_substr($sql_where, 0, mb_strlen($sql_where) - 5);;

    mb_substr($sql_where, 0, mb_strlen($sql_where) - 5);
    $sql = "UPDATE `$table` SET $sql_set WHERE $sql_where ";
    echo $sql . "<br>";
    // 投票票數資料進去資料庫
    $pdo->exec($sql);
    
   // "UPDATE `expenditure` 
    //     SET `date`='2021-11-22',`place`='泰山訓練場' 
    //      WHERE `payment_method`='信用卡' AND `classification`='教育'";

    //echo $sql;

}


function insert($table,$array){
    global $pdo;


    $sql="INSERT into $table(`" . implode('`,`',array_keys($array)) . "`) 
                       value('" . implode("','",$array) ."')";

   echo $sql."<br>";
   return $pdo->exec($sql);

}





function del($table,$id){
   global $pdo;
   // $sql = "DELETE FROM `$table` WHERE `id`='$id'";
   $sql="DELETE FROM `$table` WHERE ";
   if(is_array($id)){
       foreach($id as $key=>$value){
           $tmp[]="`$key`='$value'";
       }
       
       $sql=$sql. implode(" AND ",$tmp);
   }else{
      $sql=$sql . "`id`='$id'";
   }
   return $pdo->exec($sql);
}

//設定條件變數為where

// function update($table,$colum,$where){
//     global $pdo;
//     $sql="UPDATE `$table` SET `col1`='val1',`col2`='val2',`col3`='val3'
//                         WHERE `col1`='val1' && `col2`='val2',`col3`='val3'}

// -- 有指定陣列形式的就可以用swwitch case撈出來

function to($url){
   header("location:".$url);
}

//任意查詢函式
function q($sql){
   global $pdo;
   return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

// dd全名 direct dump 中文就是請印(出來)
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}








?>
<script>
// show密碼
function myFunction() {
    var x = document.getElementById("myInputPasswoed");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

</script>




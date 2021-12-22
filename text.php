<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<h1 class="text-center">會員管理中心</h1>   
<div class="col-8 mx-auto d-flex justify-content-between">
</div>
 < ?php 


$sql="select `users`.`id`,`account`,`name`,`birthday`,`gender`,`email` from `users` where `id` > 0;";
$users=$pdo->query($sql)->fetchALL();
?>
<tbody>
<tr class="yel">
<td width="45%"></td>
<td width="23%">帳號</td>
<td width="7%">姓名</td>
<td width="7%">性別</td>
<td width="7%">生日</td>
<td width="7%">信箱</td>
<td width="7%">操作</td>
<td></td>
</tr>


< ?php
$users = $DB->all();
foreach($users as $user){
   ?>
   <tr>
                        <td width="45%">
                            < ?php $user['id'];?>
                        </td>
                        <td width="23%">
                        </td>
                        <td width="7%">

                            <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td width="7%">
                        </td>
                        <td>
                            <!-- id因為會加多筆資料所以要用陣列的方式送出多筆資料 -->
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <!-- 只要是更新就一定要知道對象是誰 -->
                            <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload_title.php?id=<?= $row['id']; ?>&#39;)" value="更新圖片">
                            <!-- 按下後去modal_upload -->
                        </td>
                    </tr>
<?php
                // }


?>



</tbody>

</body>


 -->























<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div>
  <h2>Responsive Table</h2>
  <p>The .table-responsive class adds a scrollbar to the table when needed:</p>
  
  <table class="table table-bordered table-hover">
  <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>City</th>
          <th>Country</th>
          <th>Sex</th>
        </tr>
      </thead>
  </table>
  
  <table class="table table-bordered table-hover">
        <!-- <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>City</th>
          <th>Country</th>
          <th>Sex</th>

        </tr>
      </thead> -->
      <tbody>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>

        </tr>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>

        </tr>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>

        </tr>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>

        </tr>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>

        </tr>
      </tbody>
    </table>



</body>
</html>
















































<h1 class="text-center">會員管理中心</h1>   


<div class="col-8 mx-auto d-flex justify-content-between">

</div>
 <?php 

include_once "./api/db.php";
// $dsn = "mysql:host=localhost;charset=utf8;dbname=mypolling"; 
// $dsn = "mysql:host=220.128.133.15;charset=utf8;dbname=s1100411";
// $pdo=new PDO($dsn,'root','');
// $sql="SELECT * FROM `users`";

$sql="select `users`.`id`,`account`,`name`,`birthday`,`gender`,`email` from `users` where `id` > 0;";
$users=$pdo->query($sql)->fetchALL();

echo "<table class='table col-8 mx-auto  table-hover'>";
echo "<thead  class='table-secondary'>";
echo "<td>id</td>";
echo "<td>帳號</td>";
echo "<td>姓名</td>";
echo "<td>性別</td>";
echo "<td>生日</td>";
echo "<td>信箱</td>";
echo "<td>操作</td>";
echo "</thead>";





foreach($users as $user){
    echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['account']}</td>";
        echo "<td>{$user['name']}</td>";
        if($user['gender'] == 1 ){
            echo "<td>男</td>";
        }else if($user['gender'] == 2 ){
            echo "<td>女</td>";
        }else if($user['gender'] == 3 ){
            echo "<td>其他</td>";
        }
        echo "<td>{$user['birthday']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>";
        echo "<a href='../api/edit_user.php?id={$user['id']}'><button class='btn btn-sm btn-success'>編輯</button></a>";
        // echo "<a href='del_user.php?id={$user['id']}'><button class='btn btn-sm btn-danger'>刪除</button></a>";
        // echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
        echo "</td>";
        echo "</tr>";
}

echo "</table>"
?>


</body>

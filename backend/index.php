<?php include_once "../api/db.php";

if (!isset($_SESSION['user'])) {
  to("../index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統後台</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .container {
      min-height: 544px;
    }

  </style>
</head>

<body style="height:1000px">
  <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
  <a href="index.php">
        <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
          <div class="carousel-inner position-absolute" style="top:-250px">
            <?php
            $images = all('mypolling_ad', ['sh' => 1]);

            foreach ($images as $key => $image) {
              if ($key == 0) {
                echo "<div class='carousel-item active'>";
              } else {
                echo "<div class='carousel-item'>";
              }

              echo "  <img class='d-block w-100' src='../image/{$image['name']}' alt='{$image['intro']}'>";
              echo "</div>";
            }


            ?>
          </div>
        </div>
      </a>
  </div>
  </div>
  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->


  <nav id="mySidenav" class="sidenav text-white" style="">
    <div>
      <?php

    if (isset($_SESSION['user'])) {
      echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
    ?>
      <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">&times;</a>
      <a class='px-2 text-white' href="?do=show_vote_list">問卷管理</a>
      <a class='px-2 text-white' href="?do=member">會員管理</a>
      <a class='px-2 text-white' href="?do=ad">廣告管理</a>
      <a class='px-2 text-white' href="../index.php">回到前台首頁</a>

      <div>
        <a class="btn btn-sm  mx-1 text-white" href="../logout.php">登出</a>
      </div>
    <?php
    }
    ?>


    </div>

  </nav>



  <div class=" main">
    <span style="font-size:30px;cursor:pointer" class="font-weight-bold  text-primary" onclick="openNav()">&#9776;開啟管理列表</span>

    <?php

    // 如果有do我就用後面的變數，如果沒有do我就用add_subject_form
    // $do = (isset($_GET['do'])) ? $_GET['do'] : 'add_subject_form';
    $do = (isset($_GET['do'])) ? $_GET['do'] : 'manage_vote';

    $file = $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      // 如果沒有的話直接載入 add_subject_form
      // include "add_subject_form.php";
      include "manage_vote.php";
    }
    ?>
    
  </div>
  
  <div class="p-3 text-center text-light bg-primary fixed-bottom">@ 2021 泰山php班第2期 版權所有、歡迎盜用</div>



















  
  <!-- 
    要控制元件必須要有東西存在，如果前面東西還沒存在就放就沒用
    所以後來習慣大家就先放後面了
-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<!-- 陰影的script w3c的How TO - Side Navigation
 -->
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

</body>

</html>
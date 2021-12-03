<?php include_once "../api/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>我的問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
<div class="jumbotron p-0"  style="overflow:hidden;height:250px">
    <a href="index.php">
      <div id="carouselExampleSlidesOnly" class="carousel slide  position-relative" data-ride="carousel">
        <div class="carousel-inner position-absolute" style="top:-250px">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../image/dessert-01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../image/dessert-03.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../image/dessert-06.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </a>
  </div>
  </div>
  <div class="container">

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

  <div class="p-3 text-center text-light bg-primary fixed-bottom">mack版權所有、歡迎盜用</div>

  <!-- 
    要控制元件必須要有東西存在，如果前面東西還沒存在就放就沒用
    所以後來習慣大家就先放後面了
-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>

</html>
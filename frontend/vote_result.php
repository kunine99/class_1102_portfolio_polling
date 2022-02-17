<!-- 問卷結果 -->
<?php include_once "./api/db.php"; ?>
<?php
$sql = "select * 
      from `mypolling_topics`,
           `mypolling_options` 
      where `mypolling_topics`.`id`=`mypolling_options`.`topic_id` AND 
            `mypolling_topics`.`id`='{$_GET['id']}'";

$rows = q($sql);
?>

<!-- 就是我的題目了，把它拿來當標題 -->
<h1><?= $rows[0]['topic']; ?></h1>
<ol class="list-group col-md-4" style="font-size:1.2rem">
  <?php
  foreach ($rows as $row) {
    echo "<li class='list-group-item'>";
    echo "<span>{$row['opt']}</span>";
    echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
    echo "</li>";
  }

  ?>
</ol>

<?
// $con = mysqli_connect("localhost", "root", "", "mypolling"); 
// $con = mysqli_connect("localhost", "root", "", "s1100411"); 
// 連不上~~~為什麼???????????????????????????
// $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100411"; 
// $pdo = new PDO($dsn, 'root', '');
// if($dsn){
//     echo "1111";
// };
?>

<!-- youtube教學 -->
<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['opt', 'count'],
        //   < ?php
        //   $sql = "SELECT * FROM options";
        //   $fire = mysqli_query($con,$sql);
        //   while ( $result = mysqli_fetch_assoc($fire)){
        //       echo "['".$result['opt']."',".$result['count']."]";
        //   }
        // ?>
        <?php
        $rows = all('mypolling_options', ['topic_id' => "{$_GET['id']}"]);
        foreach ($rows as $row) {
          echo "['" . $row['opt'] . "'," . $row['count'] . "] ,";
        }
        ?>
      ]);

      var options = {
        title: '我的圓餅圖'
      };


      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>
<!-- youtube教學 結束-->


</head>

<body>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
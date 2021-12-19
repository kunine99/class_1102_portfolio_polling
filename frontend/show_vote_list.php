<style>
.votebox{
width: 150px;
height: 150px;
}
#question{
    font-size: 50px;
}
</style>
<div class="d-flex justify-content-between">
  <div class="bd-highlight font-weight-bold" id="question">列出所有的問題</div>
  <div class="bd-highlight"><p id="animContainer" class="votebox"></p></div>
</div>

<?php
$subjects = all('topics');
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
    if (rows('options', ['topic_id' => $value['id']]) > 0) {
        echo "<li class='list-group-item'>";
        //題目
        //有登入的會員才能使用投票功能
        if (isset($_SESSION['user'])) {
            echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
            echo $value['topic'];
            echo "</a>";
        } else {

            echo "<span class='d-inline-block col-md-8'>" . $value['topic'] . "</span>";
        }

        //總投票數顯示
        $count = q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
        echo "<span class='d-inline-block col-md-2 text-center'>";
        echo $count[0]['總計'];
        echo "</span>";

        //主題沒有topic_id,後面的id是來自我迴圈再跑的id..?
        //看結果按鈕
        //count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['topic_id']}'");
        // echo "<span class='d-inline-block col-md-2 text-center'>";
        // echo "<button class='btn btn-primary'>觀看結果</button>";
        // echo "</span>";
        echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
        echo "<button class='btn btn-primary'>觀看結果</button>";
        echo "</a>";

        echo "</li>";
    }
}
echo "</ol>";

?>
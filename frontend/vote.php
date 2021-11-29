<!-- 投票頁面 -->
<?php
$id = $_GET['id'];
$subject = find('topics', $id);

$options = all('options', ['topic_id' => $id]);
?>

<h1><?= $subject['topic']; ?></h1>
<ol>
    <!-- 我要請他到api裡面 -->
    <form action="./api/save_vote.php" method="post">
        <?php

        foreach ($options as $key => $opt) {
            // 一定要加value
            //我現在資料表的欄位是options，name盡量要取跟資料表一樣
            //如果是多選，因為要知道你有幾個，所以要用陣列存
            //單選的話
            echo "<li>";
            echo "<input type='radio' name='opt' value='{$opt['id']}'>";
            echo $opt['opt'];
            echo "</li>";
        }



        ?>
</ol>
<input type="submit" value="投票">
</form>
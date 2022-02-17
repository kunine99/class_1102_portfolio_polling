<?php

$subject = find('topics', $_GET['id']);
$options = all('mypolling_options', ['topic_id' => $_GET['id']]);

?>

<br>

<form action="../api/edit_subject.php" method='post' class='col-6 m-auto text-primary'>
    <label>問卷主題 <input type="text" name="topic" value='<?= $subject['topic']; ?>' class="form-control form-control-sm "></label>
    <input type="hidden" name="topic_id" value="<?= $subject['id']; ?>">
    <!-- button 這個東西如果預設是在form表單選單裡面，那他預設就是submit功能，
         如果你希望他不是submit功能，就要跟他指定它的功能是button(button type="button") -->
    <!-- 用連結的方式增加選項，為了要告訴他增加哪個選項所以+id告訴他(subject裡的id) -->
    <a href="../api/add_option.php?id=<?= $subject['id']; ?>">
        <input class='btn btn-outline-primary btn-sm active' type="button" value="增加選項+" >
    </a>
    <?php
    foreach ($options as $key => $opt) {
        echo "<label class='list-group-item'>\n";
        echo   "選項" . ($key + 1) . "\n";
        echo   "<input type='text' name='options[]' value='{$opt['opt']}'>\n";
        echo   "<input type='hidden' name='opt_id[]' value='{$opt['id']}'>\n";
        echo "</label>\n";
    }

    // if(count($options)<=4){
    // for($i=0;$i<(4-count($options));$i++){
    // echo "<label class='list-group-item'>";
    // echo   "選項" .(count($options)+1+$i); // ($key+1);
    // 既然我要增加一個新的選項，我就在資料庫增加空白的選項，這樣資料庫只要做更新就好
    // 當你按下按鈕時我就去資料庫新增一筆出來，再回來告訴你該如何處理
    // echo   "<input type='text' name='options[]' value='{$opt['opt']}'>";
    // echo "</label>";
    // }
    ?>
    <input type="submit" value="送出" class="btn btn-outline-primary">
</form>
<!-- 投票頁面 -->
<?php
$id=$_GET['id'];
$subject=find('topics' , $id);

$options=all('options',['topic_id'=>$id]);
?>

<h1><?=$subjects['topic']?></h1>
<ol>
<?php

foreach()





</ol>
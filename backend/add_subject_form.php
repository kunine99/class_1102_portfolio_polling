<h1 class="text-center font-weight-bold">新增問卷</h1>
<form action="../api/new_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject"></label>
<div><input type="submit" value="送出"></div>
</form>


<!-- <form action="api/save_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題：<input type="text" name="subject"></label> -->
    <!-- name後面接value -->
    <!-- 如果表單要送給servie端重複的東西要加....讓它變成陣列的方式傳回來 -->
    <!-- <label class='list-group-item'>選項一: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項二: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項三: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項四: <input type="text" name="options[]" ></label>

    <input type="submit" value="送出">

</form> -->



<!-- <div><input type="submit" value="送出"></div> -->


<!-- <h1 class="text-center font-weight-bold">新增問卷</h1>
<form action="../api/new_subject.php" method='post' class='col-6 m-auto'>
     onchange="api/tmp.php"  請到api/tmp.php 這個地方去幫我把資料暫存起來
    <label>問卷主題: <input type="text" name="subject"></label>
     增加選項 
     <a href="../api/add_option.php">
        <input class='bg-warning' type="button" value="+">
    </a>  -->


    <?php
// if(isset($_SESSION['option'])){
//     for($i=1;$i<=$_SESSION['option'];$i++){
//         \n   檢查原始碼會斷行
//         echo "<label class='list-group-item'>\n";
//         echo "選項" . $i ."\n";
//         echo "<input type='text' name='options[]' value=''>\n";
//         echo "</label>\n";
//     }
// }


// ?> 
   <!-- <div> <input type="submit" value="送出"></div> -->

<!-- </form> -->
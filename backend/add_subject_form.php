<form action="api/save_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題：<input type="text" name="subject"></label>
    <!-- name後面接value -->
    <!-- 如果表單要送給servie端重複的東西要加....讓它變成陣列的方式傳回來 -->
    <label class='list-group-item'>選項一: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項二: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項三: <input type="text" name="options[]" ></label>
    <label class='list-group-item'>選項四: <input type="text" name="options[]" ></label>

    <input type="submit" value="送出">

</form>
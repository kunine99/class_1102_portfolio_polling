<?php include_once "db.php";

//編輯會員資料
$user_id = $_GET['id'];  //login資料表的id .member資料表login_id
$user_sql = "select * from `users` where  `users`.`id`='$user_id'";
// echo $user_sql;
$user = $pdo->query($user_sql)->fetch();

?>
<style>
    #boxx:hover {
        background: white;
        box-shadow: 0px 20px 20px rgba(0, 0, 0, .25);
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card p-3 mb-5 bg-white rounded;" style="border-radius: 15px;" id="boxx">
                    <div class="card-body p-5">
                        <h2 class="text-center font-weight-bold">編輯會員資料</h2>
                        <form action="save_user.php" method="post" id="regForm">
                            <table class='table m-auto w-auto'>
                                <input type="hidden" name="id" value='<?= $user['id']; ?>'>
                                <tr>
                                    <td><i class="fas fa-user"></i>帳號：</td>
                                    <td><input name="account" id="form3Example1cg" class="form-control form-control-sm" value='<?= $user['account']; ?>' disabled></td>
                                    <!-- 這方法不好，如果會程式的人就會被他F12測試刪掉DISABLED去更改 -->
                                </tr>

                                <tr>
                                    <td><i class="fas fa-lock "></i>密碼：</td>
                                    <td><input type="password" name="password" id="myInputPasswoed" class="form-control form-control-smvalue=" value='<?= $user['password']; ?>'>
                                        <input type="checkbox" onclick="myFunction()">顯示密碼
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-envelope">電子郵件：</td>
                                    <td><input type="text" name="email" id="form3Example1cg" class="form-control form-control-sm" placeholder="@gmail.com" value='<?= $user['email']; ?>'></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-user">姓名：</td>
                                    <td><input type="text" name="name" id="form3Example1cg" class="form-control form-control-sm" value='<?= $user['name']; ?>'></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-birthday-cake">生日：</td>
                                    <td><input type="date" name="birthday" id="form3Example1cg" class="form-control form-control-sm" value='<?= $user['birthday']; ?>'></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-stream">性別：</td>
                                    <td>

                                        <!-- gender=1  顯示checked else gender=2 checked else -->
                                        <input type="radio" name="gender" <?= $user['gender'] == 1 ? "checked" : ""; ?>>
                                        <label for="man">男性</label>
                                        <input type="radio" name="gender" <?= $user['gender'] == 2 ? "checked" : ""; ?>>
                                        <label for="woman">女性</label>
                                        <input type="radio" name="gender" <?= $user['gender'] == 3 ? "checked" : ""; ?>>
                                        <label for="other">其他</label>
                                    </td>
                                    <!-- 
                                    <select name="gender">
                                        <option value="會員" < ?= ($user['role'] == '會員') ? "selected" : ""; ?>>會員</option>
                                        <option value="VIP" < ?= ($user['role'] == 'VIP') ? "selected" : ""; ?>>VIP</option>
                                        <option value="管理員" < ?= ($user['role'] == '管理員') ? "selected" : ""; ?>>管理員</option>
                                    </select> -->
                                </tr>

                            </table>
                            <div class='text-center '><input type="submit" value="確認修改" class="btn btn-primary my-3"></div>
                            <div class='text-center '><input type="reset" value="重置" class="btn btn-warning my-3"></div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</form>

</div>


<!-- 
     <div class="list-group">
                                     <input type="hidden" name="id" value='<?= $user['id']; ?>'>
                                     <li class="list-group-item">帳號:<input type="text" name='account' value='<?= $user['account']; ?>'></li>
                                     <li class="list-group-item">密碼:<input type="password" name='password' value='<?= $user['password']; ?>'></li>
                                     <li class="list-group-item">姓名:<input type="text" name='name' value='<?= $user['name']; ?>'></li>
                                     <li class="list-group-item">生日:<input type="date" name='birthday' value='<?= $user['birthday']; ?>'></li>
                                     <li class="list-group-item">性別:<input type="text" name='gender' value='<?= $user['gender']; ?>'></li>
                                     <li class="list-group-item">email:<input type="text" name='email' value='<?= $user['email']; ?>'></li>


                                 </div> -->
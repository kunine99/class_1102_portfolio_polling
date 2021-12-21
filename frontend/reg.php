<!-- 註冊用網頁 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="../css/style.css"> 放外部吃不到 -->
<style>
    #boxx:hover {
        background: white;
        box-shadow: 0px 20px 20px rgba(0, 0, 0, .25);
    }
</style>


<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card p-3 mb-5 bg-white rounded;" style="border-radius: 15px;" id="boxx">
                    <div class="card-body p-5">
                        <h2 class="text-center font-weight-bold">註冊會員</h2>
                        <form action="./api/reg.php" method="post" id="regForm">
                            <table class='table m-auto w-auto'>
                                <tr>
                                    <td><i class="fas fa-user"></i>帳號：</td>
                                    <td><input type="text" name="account" id="form3Example1cg" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-lock ">密碼：</td>
                                    <td><input type="password" name="password" id="myInputPasswoed" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-envelope">電子郵件：</td>
                                    <td><input type="text" name="email" id="form3Example1cg" class="form-control form-control-sm" placeholder="@gmail.com"></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-user">姓名：</td>
                                    <td><input type="text" name="name" id="form3Example1cg" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-birthday-cake">生日：</td>
                                    <td><input type="date" name="birthday" id="form3Example1cg" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-stream">性別：</td>
                                    <td> 
                                        <input type="radio" id="html" name="gender" value="男性">
                                        <label for="man">男性</label>
                                        <input type="radio" id="css" name="gender" value="女性">
                                        <label for="woman">女性</label>
                                        <input type="radio" id="javascript" name="gender" value="其他">
                                        <label for="other">其他</label>
                                    </td>
                                </tr>
                            </table>



                            <div class='text-center '><input type="submit" value="確認送出"> </div>
                            <!-- <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-3 text-body">Register</button>
                            </div> -->
                            <p class="text-center text-muted mt-4 mb-0">已經是會員了嗎 <a href="?do=login" class="fw-bold text-body"><u>從這裡登入</u></a></p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


</form>
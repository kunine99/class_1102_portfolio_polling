<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="card  p-3 mb-5 bg-white rounded;" style="border-radius: 15px;" id="boxx">
                    <div class="card-body p-5">
                        <h2 class='text-center font-weight-bold'>會員登入</h2>

                        <form action="./api/check_login.php" method="post">
                            <table id="loginForm" class='table m-auto w-auto'>
                                <tr>
                                    <td><i class="fas fa-user">帳號：</td>
                                    <td><input type="text" name="account" placeholder="請輸入帳號" class="form-control form-control-sm"></td>
                                </tr>



                                <tr>
                                    <td><i class="fas fa-lock ">密碼：</td>
                                    <td><input type="password" name="password" placeholder="請輸入密碼" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="登入">
                                        <input type="reset" value="重罝">
                                    </td>

                                </tr>
                            </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</form>
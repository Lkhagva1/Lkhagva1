<?php
session_start();
if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "та аль хэдийн нэвтэрсэн байна";
    if ($_SESSION['role_as'] == 1) {
        header('Location: admin/index.php');
    } else {
        header('Location: index.php');
    }
    exit();
}
include('includes/header.php');
?>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img src="https://i.imgur.com/CXQmsmF.png" class="logo">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <form action="function/auth.php" method="POST">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Нэвтрэх</h6>
                            <div class="facebook text-center mr-3">
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                            <div class="twitter text-center mr-3">
                                <i class="fa-brands fa-twitter"></i>
                            </div>
                            <div class="linkedin text-center mr-3">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">эсвэл</small>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Цахим хаяг</h6>
                            </label>
                            <input class="mb-4" type="text" name="email" placeholder="цахим хаягаа оруулна уу!">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Нууц үг</h6>
                            </label>
                            <input type="password" name="password" placeholder="Нууц үгээ орууна уу">
                        </div>
                        <div class="row px-3 mb-4">

                            <a href="#" class="ml-auto mb-0 text-sm">нууц үгээ мартсан?</a>
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" name="login_btn" class="btn btn-blue text-center"><a href="index.php">Нэвтрэх</a></button>
                        </div>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Бүртгэл байхгүй бол? <a href="signup.php" class="text-danger ">Шинээр бүртгүүлэх</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
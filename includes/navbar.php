<!--header-->
<div class="header_top">
    <!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li>
                            <a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i> info@domain.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav ">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header_top-->
<section class="header-main border-bottom bg-white">
    <div class="container-fluid">
        <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
            <div class="col-md-2">
                <img class="d-none d-md-flex" src="https://i.imgur.com/R8QhGhk.png" width="100">
            </div>
            <div class="col-md-8">
                <div class="d-flex form-inputs">
                    <input class="form-control" type="text" placeholder="Search any product...">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <div class="col-md-2">
                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                    <span class="shop-bag"><i class='fas fa-shopping-bag'></i></span>
                    <div class="d-flex flex-column ms-2">
                        <span class="qty">1 Product</span>
                        <span class="fw-bold">$27.90</span>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-1">
                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                    <span class="shop-bag"><i class='fas fa-user-circle'></i></span>
                    <div class="d-flex flex-column ms-2">

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="index.php">ONESHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">нүүр хуудас </a>
                </li>
                <li class="nav-item dropdown" style="display: content;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Бүх Ангилал
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="categories.php">Манай бүтээгдэхүүн</a></li>
                        <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                        <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                        <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                        <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                        <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="signup.php">Шинээр бүртгүүлэх</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Хэрэглэгчийн бүртгэл</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">борлуулагчийн данс</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">захиалгыг хянах</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Бидний тухай</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fas fa-shopping-cart" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fas fa-heart" href="#"></a>
                </li>
                <?php if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fas fa-user-circle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <!--  $_SESSION['auth_user']['name'];  -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Хөнгөлөлт</a></li>

                            <li><a class="dropdown-item" href="login.php">Тооцоо хийх</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Гарах</a></li>
                        </ul>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fas fa-user-circle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.php">Нэвтрэх</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="signup.php">Шинээр бүртгүүлэх</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
                <div class="mognol" style="margin-top: 5px;">
                    <?php if (isset($_SESSION['auth'])) {
                    ?>

                        <?= $_SESSION['auth_user']['name']; ?>
                    <?php
                    } ?>
                </div>
            </ul>
        </div>
    </div>
</section>
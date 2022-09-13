<?php
session_start();

if (isset($_SESSION['auth'])) {

    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message'] = "Амжилттай гарлаа";
}
header('Location: index.php');

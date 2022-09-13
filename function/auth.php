<?php
session_start();
include('../config/dbcon.php');
include('../middleware/myFunctions.php');
if (isset($_POST['signup_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    // check email  already registered
    $check_email_quary = "SELECT email FROM users WHERE email='$email'";
    $check_email_quary_run = mysqli_query($con, $check_email_quary);


    if (mysqli_num_rows($check_email_quary_run) > 0) {
        $_SESSION['message'] = "цахим хаяг аль хэдийн бүртгүүлсэн байна";
        header('Location: ../signup.php');
    } else {


        if ($password == $cpassword) {
            $insert_query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);
            if ($insert_query_run) {
                $_SESSION['message'] = "амжилттай бүртгүүллээ";
                header('Location: ../login.php');
            } else {
                $_SESSION['message'] = "Алдаа гарлаа. Дараа дахин оролдоно уу";
                header('Location: ../signup.php');
            }
        } else {
            $_SESSION['message'] = "Нууц үг таарахгүй байна";
            header('location: ../signup.php');
        }
    }
} else if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($login_query_run);
        $userName = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        $_SESSION['auth_user'] =
            [
                'name' => $userName,
                'email' => $useremail
            ];
        $_SESSION['role_as'] = $role_as;
        if ($role_as == 1) {
            $_SESSION['message'] = "Амжилттай нэвтэрлээ Админ";
            header('location: ../admin/index.php');
        } else {
            $_SESSION['message'] = "Амжилттай нэвтэрлээ";
            header('location: ../Index.php');
        }
    } else {
        $_SESSION['message'] = "Нэвтрэх боломжгүй";
        header('location: ../login.php');
    }
}

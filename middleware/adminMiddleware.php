<?php
include('../middleware/myFunctions.php');
if (isset($_SESSION['auth'])) {
    if ($_SESSION['role_as'] != 1) {
        redirect("../index.php", "та энэ хуудсанд хандах эрхгүй байна");
    }
} else {
    redirect("../login.php", "үргэлжлүүлэхийн тулд нэвтэрнэ үү");
}

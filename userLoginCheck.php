<?php
session_start();
include 'config/connect.php';

$stmt = $coon->prepare(" SELECT* FROM register WHERE re_name = ? and re_email = ? ");
$stmt->execute([$_POST["name"], $_POST["email"]]);
$count = $stmt->rowCount(PDO::FETCH_ASSOC);

if ($count == 0) {
    echo "

    <script>
    $(document).ready(function() {
        Swal.fire({
            title: 'ไม่พบรายชื่อนี้',
            text: 'ท่านสามารถเข้าสู่ระบบนี้ได้ กรุณาทำการลงทะเบียนก่อน',
            icon: 'warning',
            confirmButtonText: 'กลับไปลงทะเบียนใหม่อีกครั้ง'
        }).then((result) => {
            if (result['isConfirmed']) {
                window.location = 'register.php';
            }
        })
    });
    </script>
    
    ";
} else {

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION["userLogin"] = $row["re_code"];
    $_SESSION["checkBtn"] = "o";

    header("location: question1.php");
}

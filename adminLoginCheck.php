<?php
session_start();
include 'config/connect.php';

$stmt = $coon->prepare(" SELECT* FROM admin WHERE ad_user = ? AND ad_pass = ? ");
$stmt->execute([$_POST["user"], $_POST["pass"]]);

$row = $stmt->rowCount(PDO::FETCH_ASSOC);

if ($row == 0) {
    header("location: adminLogin.php");
    exit();
} else {
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["checkLogin"] = $r["ad_check"];
    header("location: adminPage.php");
}

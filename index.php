<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>

    <?php include('banner/banner.php'); ?>

    <div class="container detailCenter">
        <div class="row">
            <div class=" col-md-8 animate__animated animate__bounceInLeft">
                <div class="textDetail">แบบคัดกรองภาวะซึมเศร้าและความเสี่ยงต่อการฆ่าตัวตาย <br>(Depression and
                    Risk of
                    suicide)</div>
                <hr>
                <div class="textDetailSub">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</div>
                <div class="btnClick"><a class="btnLink" href="question1.php" role="button"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i> เริ่มทำแบบคัดกรอง</a></div>
            </div>
            <div class=" col-md-4 animate__animated animate__bounceInRight">
                <div class="detailImg"><img src="image/logo.png" alt="" srcset=""></div>
            </div>
        </div>
    </div>

    <div class="container detailCenterList">
        <div class="row">
            <div class=" col-md-4 animate__animated animate__bounceInRight">
                <div class="detailImg"><img src="image/logo.png" alt="" srcset=""></div>
            </div>
            <div class=" col-md-8 animate__animated animate__bounceInLeft">
                <div class="textDetail">แบบคัดกรองภาวะซึมเศร้าและความเสี่ยงต่อการฆ่าตัวตาย <br>(Depression and
                    Risk of
                    suicide)</div>
                <hr>
                <div class="textDetailSub">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</div>
                <div class="btnClick"><a href="question1.php" class="btnLink" role="button">เริ่มทำแบบคัดกรอง</a></div>
            </div>

        </div>
    </div>

</body>

</html>
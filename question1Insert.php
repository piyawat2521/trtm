<?php
session_start();
$n = 20;
for ($i = 0; $i <= $n; $i++) {
    $qt1 += $_POST["mood$i"];
}

$_SESSION["qt1"] = $qt1;

if ($_SESSION["checkBtn"] == "o") {
    $btnShow = '<div class="btnNo">
                <div class="d-grid gap-2">
                    <a name="" id="" class="btn btn-success" href="question2.php" role="button">ทำแบบประเมินในส่วนต่อไป</a>
                </div>
                </div>
    ';
} else {
    $btnShow = '<div class="btnNo">
                <div class="d-grid gap-2">
                    <a name="" id="" class="btn btn-success" href="register.php" role="button">ลงทะเบียนเพื่อทำแบบประเมินในส่วนต่อไป</a>
                </div>
                </div>
                <br>
                <div class="btnCon">
                    <div class="d-grid gap-2">
                        <a name="" id="" class="btn btn-danger" href="out.php" role="button">ไม่ทำแบบประเมินในส่วนต่อไปแล้ว</a>
                    </div>
                </div>';
}

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
    <link rel="stylesheet" href="css/qt.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php include('../banner/banner.php'); ?>


    <div class="container" style="margin-top: 13rem;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="showText">ผลการประเมินแบบวัดอารมณ์โดยรวม</div>
            <div class="showImg"><img src="image/icon-1.png" alt="" srcset=""></div>
            <div class="showNumSum"><?= $qt1 ?></div>
            <div class="showDetail">
                <h5>คำอธิบาย</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus debitis consectetur quos incidunt
                    voluptatibus tempora in labore odio totam ducimus beatae explicabo dignissimos atque veritatis
                    doloremque rem, neque laborum quod. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi maiores architecto repudiandae corrupti deserunt corporis harum voluptatum id officia quas
                    quo est libero, numquam ducimus distinctio aliquam omnis. Consequatur, praesentium.</p>
            </div>
            <hr>
            <?= $btnShow ?>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>

</html>
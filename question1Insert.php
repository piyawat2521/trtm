<?php
session_start();
$sumP = $_POST["q2"] + $_POST["q4"] + $_POST["q5"] + $_POST["q7"] + $_POST["q9"] + $_POST["q13"] + $_POST["q14"] + $_POST["q16"] + $_POST["q17"] + $_POST["q20"];
$sumD = $_POST["q1"] + $_POST["q3"] + $_POST["q6"] + $_POST["q8"] + $_POST["q10"] + $_POST["q11"] + $_POST["q12"] + $_POST["q15"] + $_POST["q18"] + $_POST["q19"];

$qt1 = $sumP - $sumD;

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
    <?php include('banner/banner.php'); ?>

    <?php
    if ($qt1 >= 0) {
        $text = "คะแนนเป็นบวก หรือ 0 มีอารมณ์เป็นบวก <br><h5>ข้อแนะนำ</h5> ไม่ต้องทำอะไร ออกจากระบบได้เลย หรือหากต้องการประเมิน Stress ต่อก็ได้ แต่ต้องลงทะเบียน";
        $imgShow = '<img src="image/icon-1.png" alt="" srcset="">';
    } elseif ($qt1 <= -1) {
        $text = "คะแนนเป็นลบ (-40 ถึง -1) มีอารมณ์เป็นลบ <br><h5>ข้อแนะนำ</h5> ให้ทำแบบประเมิน Stress โดยจะต้องลงทะเบียนก่อน";
        $imgShow = '<img src="image/icon-3.png" alt="" srcset="">';
    }

    ?>


    <div class="container" style="margin-top: 13rem;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="showText">ผลการประเมินแบบวัดอารมณ์โดยรวม</div>
            <div class="showImg"><?= $imgShow ?></div>
            <div class="showNumSum"><?= $qt1 ?></div>
            <div class="showDetail">
                <h5>คำอธิบาย</h5>
                <p><?= $text ?></p>
            </div>
            <hr>
            <?= $btnShow ?>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>

</html>
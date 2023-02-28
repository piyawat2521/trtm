<?php
session_start();
$n = 5;
for ($i = 0; $i <= $n; $i++) {
    $qt2 += $_POST["st$i"];
    //echo $i . ":" . $_POST["st$i"] . "<br>";
}

$_SESSION["qt2"] = $qt2;
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
    if ($qt2 >= 0 and $qt2 <= 4) {
        $text = "ความเครียดน้อย <br><h5>ข้อแนะนำ</h5> ฝึกคิดบวก ";
        $imgShow = '<img src="image/icon-1.png" alt="" srcset="">';
    } elseif ($qt2 >= 5 and $qt2 <= 7) {
        $text = "ความเครียดปานกลาง <br><h5>ข้อแนะนำ</h5> ฝึกผ่อนคลายความเครียด และคิดบวก ตามคำแนะนำบน app ได้ด้วยตนเองและสามารถปรึกษานักจิตวิทยา หรือแพทย์ทั่วไปเพิ่มเติม";
        $imgShow = '<img src="image/icon-2.png" alt="" srcset="">';
    } elseif ($qt2 >= 8 and $qt2 <= 9) {
        $text = "ความเครียดมาก <br><h5>ข้อแนะนำ</h5> มีความเครียดมาก ถึงมากที่สุด ให้ทำแบบทดสอบ Depression";
        $imgShow = '<img src="image/icon-3.png" alt="" srcset="">';
    } elseif ($qt2 >= 10 and $qt2 <= 15) {
        $text = "ความเครียดมากที่สุด <br><h5>ข้อแนะนำ</h5> มีความเครียดมาก ถึงมากที่สุด ให้ทำแบบทดสอบ Depression";
        $imgShow = '<img src="image/icon-4.png" alt="" srcset="">';
    }

    ?>


    <div class="container" style="margin-top: 13rem; position: relative; min-height: 100vh;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="showText">ผลการประเมินแบบวัดอารมณ์โดยรวม</div>
            <div class="showImg"><?= $imgShow ?></div>
            <div class="showNumSum"><?= $qt2 ?></div>
            <div class="showDetail">
                <h5>คำอธิบาย</h5>
                <p><?= $text ?></p>
            </div>
            <hr>
            <div class="btnNo">
                <div class="d-grid gap-2">
                    <a name="" id="" class="btn btn-success" href="question3.php" role="button">ทำแบบประเมินในส่วนต่อไป</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <?php include 'title-footer/footer.php'; ?>

</body>

</html>
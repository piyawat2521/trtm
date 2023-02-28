<?php
session_start();
$n = 9;
for ($i = 0; $i <= $n; $i++) {
    $qt3 += $_POST["drear$i"];
    //echo $i . ":" . $_POST["drear$i"] . "<br>";
}
$_SESSION["qt3"] = $qt3;
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
    if ($qt3 >= 0 and $qt3 < 7) {
        $text = "ไม่มีอาการของโรคซึมเศร้า หรือมีอาการของโรคซึมเศร้าระดับน้อยมาก <br><h5>ข้อแนะนำ</h5> ฝึกผ่อนคลายความเครียด และคิดบวกเพื่อลดอาการซีมเศร้า ตามคำแนะนำบน app ได้ด้วยตนเอง หรือสามารถปรึกษานักจิตวิทยา หรือแพทย์ทั่วไปเพิ่มเติม ";
        $imgShow = '<img src="image/icon-1.png" alt="" srcset="">';
    } elseif ($qt3 >= 7 and $qt3 <= 12) {
        $text = "มีอาการของโรคซึมเศร้า ระดับน้อย <br><h5>ข้อแนะนำ</h5> สามารถทำแบบประเมินความเสี่ยงฆ่าตัวตายต่อได้ และควรเริ่มปรึกษานักจิตวิทยา แพทย์ทั่วไป";
        $imgShow = '<img src="image/icon-2.png" alt="" srcset="">';
    } elseif ($qt3 >= 13 and $qt3 <= 18) {
        $text = "มีอาการของโรคซึมเศร้า ระดับปานกลาง <br><h5>ข้อแนะนำ</h5> ทำแบบประเมินความเสี่ยงฆ่าตัวตาย แจ้งญาติ เฝ้าระวังการฆ่าตัวตาย เช่น เก็บอาวุธ ไม่ปล่อยให้อยู่คนเดียว และต้องปรึกษาจิตแพทย์";
        $imgShow = '<img src="image/icon-3.png" alt="" srcset="">';
    } elseif ($qt3 > 19) {
        $text = "มีอาการของโรคซึมเศร้า ระดับรุนแรง <br><h5>ข้อแนะนำ</h5> แจ้งญาติ เฝ้าระวังการฆ่าตัวตาย เช่น เก็บอาวุธ ไม่ปล่อยให้อยู่คนเดียว ปรึกษาจิตแพทย์ และ/หรือส่งต่อโรงพยาบาล";
        $imgShow = '<img src="image/icon-4.png" alt="" srcset="">';
    }

    ?>


    <div class="container" style="margin-top: 13rem;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="showText">ผลการประเมินแบบวัดอารมณ์โดยรวม</div>
            <div class="showImg"><?= $imgShow ?></div>
            <div class="showNumSum"><?= $qt3 ?></div>
            <div class="showDetail">
                <h5>คำอธิบาย</h5>
                <p><?= $text ?></p>
            </div>
            <hr>
            <div class="btnNo">
                <div class="d-grid gap-2">
                    <a name="" id="" class="btn btn-success" href="question4.php" role="button">ทำแบบประเมินในส่วนต่อไป</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <?php include 'title-footer/footer.php'; ?>

</body>

</html>
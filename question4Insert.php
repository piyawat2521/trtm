<?php
session_start();

$n = 9;
for ($i = 0; $i <= $n; $i++) {
    $qt4 += $_POST["kill$i"];
    //echo $i . ":" . $_POST["kill$i"] . "<br>";
}

$_SESSION["qt4"] = $qt4;

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
    if ($qt4 <= 0) {
        $text = "ไม่มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน <br><h5>ข้อแนะนำ</h5> ฝึกผ่อนคลายความเครียดและคิดบวก เพื่อลดอาการซึมเศร้า ตามคำแนะนำบน app ได้ด้วยตนเอง และสามารถปรึกษานักจิตวิทยา และแพทย์ทั่วไป ";
        $imgShow = '<img src="image/icon-1.png" alt="" srcset="">';
    } elseif ($qt4 >= 1 and $qt4 <= 8) {
        $text = "มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบันในระดับน้อย <br><h5>ข้อแนะนำ</h5> ฝึกผ่อนคลายความเครียดและคิดบวก เพื่อลดอาการซึมเศร้า ตามคำแนะนำบน app ได้ด้วยตนเอง และปรึกษานักจิตวิทยา และแพทย์ทั่วไป แจ้งญาติเฝ้าระวังการฆ่าตัวตาย เช่น เก็บอาวุธหรือสิ่งของที่สามารถทำร้ายตัวเอง ไม่ปล่อยให้อยู่คนเดียว";
        $imgShow = '<img src="image/icon-2.png" alt="" srcset="">';
    } elseif ($qt4 >= 9 and $qt4 <= 16) {
        $text = "มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบันในระดับปานกลาง <br><h5>ข้อแนะนำ</h5> ฝึกผ่อนคลายความเครียดและคิดบวก เพื่อลดอาการซึมเศร้า ตามคำแนะนำบน app ได้ด้วยตนเอง แจ้งญาติเฝ้าระวังการฆ่าตัวตาย เช่น เก็บอาวุธหรือสิ่งของที่สามารถทำร้ายตัวเอง 
และไม่ปล่อยให้อยู่คนเดียว และปรึกษาจิตแพทย์
";
        $imgShow = '<img src="image/icon-3.png" alt="" srcset="">';
    } elseif ($qt4 >= 17) {
        $text = "มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบันในระดับรุนแรง <br><h5>ข้อแนะนำ</h5> แจ้งญาติเฝ้าระวังการฆ่าตัวตาย เช่น เก็บอาวุธหรือสิ่งของที่สามารถทำร้ายตัวเอง และไม่ปล่อยให้อยู่คนเดียว ปรึกษาจิตแพทย์ รีบส่งต่อโรงพยาบาล";
        $imgShow = '<img src="image/icon-4.png" alt="" srcset="">';
    }

    ?>


    <div class="container" style="margin-top: 13rem;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="showText">ผลการประเมินแบบวัดอารมณ์โดยรวม</div>
            <div class="showImg"><?= $imgShow ?></div>
            <div class="showNumSum"><?= $qt4 ?></div>
            <div class="showDetail">
                <h5>คำอธิบาย</h5>
                <p><?= $text ?></p>
            </div>
            <hr>
            <div class="btnNo">
                <div class="d-grid gap-2">
                    <a name="" id="" class="btn btn-success" href="insertData.php" role="button">ส่งแบบประเมิน</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <?php include 'title-footer/footer.php'; ?>

</body>

</html>
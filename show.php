<?php
session_start();

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

    <div class="container" style="margin-top: 10rem">
        <div class="col-md-12">
            <div class="textSum">
                <h3>สรุปผลการประเมิน</h3>
                <ul class="boxMainUl">
                    <li>แบบวัดอารมณ์โดยรวม <br><br> <span><?= $_SESSION["qt1"] ?></span></li>
                    <li>แบบประเมินความเครียด <br><br> <span><?= $_SESSION["qt2"] ?></span></li>
                    <li>แบบประเมินโรคซึมเศร้า <br><br> <span><?= $_SESSION["qt3"] ?></span></li>
                    <li>แบบประเมินความเสี่ยงฆ่าตัวตาย <br><br> <span><?= $_SESSION["qt4"] ?></span></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'title-footer/footer.php'; ?>

</body>

</html>
<?php
session_start();
if (empty($_SESSION["userLogin"])) {
    $id = md5(date("dmYHis") . rand(000, 999));
    $_SESSION["idCode"] = $id;
} else {
    $_SESSION["idCode"] = $_SESSION["userLogin"];
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

    <form method="POST" action="question1Insert.php">



        <div class="container" style="margin-top: 10rem;">
            <div class="showId">Id : <span><?= $_SESSION["idCode"] ?></span></div>
            <div class="col-md-12">
                <div class="headQ">
                    <h3>แบบวัดอารมณ์โดยรวม</h3>
                    <hr>
                </div>


                <div class="mainQ">
                    <div class="headTitle">
                        <h6><?= $row["qt_title"] ?></h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check mm1">
                            <input class="form-check-input mood<?= $row["qt_id"] ?>" type="radio" name="mood<?= $row["qt_id"] ?>" id="flexRadioDefault<?= $nn ?>-1" value="1">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check mm1">
                            <input class="form-check-input mood<?= $row["qt_id"] ?>" type="radio" name="mood<?= $row["qt_id"] ?>" id="flexRadioDefault<?= $nn ?>-2" value="2">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check mm1">
                            <input class="form-check-input mood<?= $row["qt_id"] ?>" type="radio" name="mood<?= $row["qt_id"] ?>" id="flexRadioDefault<?= $nn ?>-3" value="3">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check mm1">
                            <input class="form-check-input mood<?= $row["qt_id"] ?>" type="radio" name="mood<?= $row["qt_id"] ?>" id="flexRadioDefault<?= $nn ?>-4" value="4">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check mm1">
                            <input class="form-check-input mood<?= $row["qt_id"] ?>" type="radio" name="mood<?= $row["qt_id"] ?>" id="flexRadioDefault<?= $nn ?>-5" value="5">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btnSub">บันทกข้อมูล</button>
                </div>
            </div>
        </div>

    </form>

    <?php include 'title-footer/footer.php'; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".btnSub").click(function() {
                for (let i = 1; i <= 20; i++) {
                    if ($(".mood" + i + ":checked").length == "") {
                        $(".mood" + i).focus();
                        alert("กรุณาตอบคำถามข้อที่ " + i + " ด้วย !!");
                        return false
                    }
                }
            });
        });
    </script>


</body>

</html>
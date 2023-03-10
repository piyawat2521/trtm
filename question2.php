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
    <link rel="stylesheet" href="css/qt.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <?php include('banner/banner.php'); ?>

    <form method="POST" action="question2Insert.php">

        <div class="container" style="margin-top: 10rem;">
            <div class="showId">Id : <span>
                    <?= $_SESSION["idCode"] ?>
                </span></div>
            <div class="col-md-12">
                <div class="headQ">
                    <h3>แบบประเมินความเครียด</h3>
                    <hr>
                </div>
                <?php
                include 'config/connect.php';
                $stmt = $coon->prepare(" SELECT* FROM qt_2 ");
                $stmt->execute();
                $nn = 1;

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                ?>

                    <div class="mainQ">
                        <div class="headTitle">
                            <h6><?= $row["qt2_title"] ?></h6>
                        </div>
                        <div class="subQ">
                            <div class="form-check mm1">
                                <input class="form-check-input st<?= $row["qt2_id"] ?>" type="radio" name="st<?= $row["qt2_id"] ?>" id="flexRadioDefault<?= $nn ?>-1" value="0">
                                <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-1">
                                    1. เป็นน้อยมากหรือแทบไม่มี
                                </label>
                            </div>
                            <div class="form-check mm1">
                                <input class="form-check-input st<?= $row["qt2_id"] ?>" type="radio" name="st<?= $row["qt2_id"] ?>" id="flexRadioDefault<?= $nn ?>-2" value="1">
                                <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-2">
                                    2. เป็นบางครั้ง
                                </label>
                            </div>
                            <div class="form-check mm1">
                                <input class="form-check-input st<?= $row["qt2_id"] ?>" type="radio" name="st<?= $row["qt2_id"] ?>" id="flexRadioDefault<?= $nn ?>-3" value="2">
                                <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-3">
                                    3. เป็นบ่อยครั้ง
                                </label>
                            </div>

                            <div class="form-check mm1">
                                <input class="form-check-input st<?= $row["qt2_id"] ?>" type="radio" name="st<?= $row["qt2_id"] ?>" id="flexRadioDefault<?= $nn ?>-4" value="3">
                                <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-4">
                                    4. เป็นประจำ
                                </label>
                            </div>
                            <!--
                        <div class="form-check mm1">
                            <input class="form-check-input st<?= $row["qt2_id"] ?>" type="radio"
                                name="st<?= $row["qt2_id"] ?>" id="flexRadioDefault<?= $nn ?>-5" value="5">
                            <label class="form-check-label" for="flexRadioDefault<?= $nn ?>-5">
                                5. รู้สึกมากที่สุด
                            </label>
                         </div>
                        -->
                        </div>
                    </div>

                <?php
                    $nn++;
                }
                ?>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btnSub">บันทกข้อมูล</button>
                </div>
            </div>
        </div>

    </form>

    <?php include 'title-footer/footerNo.php'; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".btnSub").click(function() {
                for (let i = 1; i <= 5; i++) {
                    if ($(".st" + i + ":checked").length == "") {
                        $(".st" + i).focus();
                        alert("กรุณาตอบคำถามข้อที่ " + i + " ด้วย !!");
                        return false
                    }
                }
            });
        });
    </script>


</body>

</html>
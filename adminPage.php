<?php
session_start();
include 'config/connect.php';
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
    <?php include 'banner/banner.php'; ?>

    <div class="container" style="margin-top: 13rem;">
        <div class="col-md-12">
            <div class="headQ">
                <h3>รายชื่อผู้ที่ลงทะเบียน</h3>
            </div>

            <hr>
            <table class="table table-striped tabalFont">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col">No</th>
                        <th scope="col">ชื่อเล่น</th>
                        <th scope="col">Email</th>
                        <th scope="col">วันที/เวลา</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $coon->prepare(" SELECT* FROM register ORDER BY re_id DESC ");
                    $stmt->execute();
                    $n = 1;

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr style="text-align: center;">
                            <th scope="row"><?= $n ?>.</th>
                            <td><?= $row["re_name"] ?></td>
                            <td><?= $row["re_email"] ?></td>
                            <td><?= $row["re_date"] ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm btnShow" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $row["re_id"] ?>" role="button">ติดตามสถานะ</a>
                                <a class="btn btn-danger btn-sm" href="#" role="button">ลบ</a>
                            </td>
                        </tr>
                    <?php
                        $n++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'modalListOrder.php'; ?>



    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".btnShow").click(function() {
                //e.defaultPrevented();
                var dataId = $(this).attr("data-id");
                var url = "modalListOrderData.php";
                $.post(url, {
                    dataId: dataId
                }, function(data) {
                    $(".mm").html(data);
                });

            });



        });
    </script>

</body>

</html>
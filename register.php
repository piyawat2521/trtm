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
    <div class="container-fluid topIcon">
        <div class="iconBk">
            <div class="iconBkText">
                <h3>Mind TRTM </h3>
            </div>
            <img src="image/cross_top.png" alt="" srcset="">
        </div>
    </div>

    <div class="container" style="margin-top: 2rem;">
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="fromReg">
                <form action="insertRegister.php" method="post" novalidate>
                    <div class="reImg"><img src="image/2155221.jpg" alt="" srcset=""></div>
                    <div class="h5">ลงทะเบียน</div>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ชื่อเล่น *</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required>
                        <div class="valid-feedback">
                            ชื่อเล่น!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput2" required>
                        <div class="valid-feedback">
                            Email!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">ID Line</label>
                        <input type="text" class="form-control" name="idLine" id="exampleFormControlInput3">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary btn-sm" type="submit">บันทึกข้อมูล</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>

</html>
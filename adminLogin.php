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
        <div class="col-md-4"></div>
        <div class="col-md-4 showMainBk">
            <div class="fromReg">
                <form action="adminLoginCheck.php" method="post" novalidate>
                    <div class="reImg"><img src="image/login-icon.png" alt="" srcset=""></div>
                    <div class="h5"><i class="fa-solid fa-arrow-right-to-bracket"></i> เข้าสู่ระบบ</div>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="user" id="exampleFormControlInput1" required>
                        <div class="valid-feedback">
                            Username
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleFormControlInput2" required>
                        <div class="valid-feedback">
                            Password
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-sm" type="submit">เข้าสู่ระบบ</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>

</html>
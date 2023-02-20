<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<script src="js/jquery-3.6.3.min.js"></script>
<script>
    $(document).ready(function() {


        $(".iconMenu").click(function() {
            $(".menuMinSub").css("visibility", "visible");
            $(".iconMenu").css("visibility", "hidden")
            $(".iconMenuC").css("visibility", "visible")
        });

        $(".iconMenuC").click(function() {
            $(".menuMinSub").css("visibility", "hidden");
            $(".iconMenu").css("visibility", "visible")
            $(".iconMenuC").css("visibility", "hidden")
        });
    });
</script>


<div class="container-fluid topIcon">
    <div class="col-12 ">
        <div class="bannerBox">

            <div class="iconBk">
                <img src="image/cross_top.png" alt="" srcset="">
            </div>

            <div class="menuMin">
                <ul>
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="userlogin.php"><i class="fa-solid fa-person-circle-check"></i> เข้าสู่ระบบ</a></li>
                    <li><a href=""><i class="fa-regular fa-registered"></i> ลงทะเบียน</a></li>
                    <li><a href=""><i class="fa-regular fa-window-restore"></i> รายละเอียดแบบคัดกรอง</a></li>
                    <li><a href=""><i class="fa-regular fa-address-book"></i> ติดต่อสอบถาม</a></li>
                </ul>
            </div>

            <div class="iconMenu"><i class="fa-sharp fa-solid fa-bars"></i></div>
            <div class="iconMenuC" style="visibility: hidden;"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>

            <div class="menuMinSub">
                <ul>
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="userlogin.php"><i class="fa-solid fa-person-circle-check"></i> เข้าสู่ระบบ</a></li>
                    <li><a href=""><i class="fa-regular fa-registered"></i> ลงทะเบียน</a></li>
                    <li><a href=""><i class="fa-regular fa-window-restore"></i> รายละเอียดแบบคัดกรอง</a></li>
                    <li><a href=""><i class="fa-regular fa-address-book"></i> ติดต่อสอบถาม</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
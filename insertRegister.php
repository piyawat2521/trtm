<link rel="stylesheet" href="css/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>

<?php
session_start();


if(empty($_POST["name"]) or empty($_POST["email"])){

     echo "

    <script>
$(document).ready(function() {
    Swal.fire({
        title: 'ไม่สามารถบันทึกข้อมูลได้',
        text: 'ไม่สามารถบันทึกข้อมูลได้ เนื่องจากท่านใส่ข้อมูลไม่ครบ',
        icon: 'warning',
        confirmButtonText: 'กลับไปลงทะเบียนใหม่อีกครั้ง'
    }).then((result) => {
        if (result['isConfirmed']) {
            window.location = 'register.php';
        }
    })
});
</script>
    
    ";

   

}else{

    //echo "Okkkkkk";
try{
    $reId = "0";
    $dateTime = date("m/d/").(date("Y")+543).":".date("H:i:s");
    include 'config/connect.php';
    $stmt = $coon->prepare(" INSERT INTO register(re_id, re_name, re_email, re_line, re_code, re_date) VALUES (?,?,?,?,?,?) ");
    $stmt->execute([$reId,$_POST["name"],$_POST["email"],$_POST["idLine"],$_SESSION["idCode"],$dateTime]);

    if(!empty($stmt)){

         echo "

    <script>
$(document).ready(function() {
    Swal.fire({
        title: 'บันทึกข้อมูล',
        text: 'ระบบบันทึกข้อมูลของท่าเรียบร้อยแล้ว',
        icon: 'success',
        confirmButtonText: 'ทำแบบประเมินในส่วนที่ 2 ต่อไป'
    }).then((result) => {
        if (result['isConfirmed']) {
            window.location = 'question2.php';
        }
    })
});
</script>
    
    ";

    }else{
        echo "Noooo...";
    }
}catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
    
}

?>
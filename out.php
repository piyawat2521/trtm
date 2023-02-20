<link rel="stylesheet" href="css/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>

<?php
session_start();
session_destroy();
?>


<script>
$(document).ready(function() {
    Swal.fire({
        title: 'ออกจากระบบ',
        text: "คลิ๊กที่ปุ่ม 'ตกลง' เพื่อออกจากระบบ",
        icon: 'success',
        confirmButtonText: 'ตกลง'
    }).then((result) => {
        if (result['isConfirmed']) {
            window.location = 'index.php';
        }
    })
});
</script>
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
            <div class="showId">Id : <span>
                    <?= $_SESSION["idCode"] ?>
                </span></div>
            <div class="col-md-12">
                <div class="headQ">
                    <h3>แบบวัดอารมณ์โดยรวม</h3>
                    <hr>
                </div>

                <!---- ตรง id หนูใส่ q1_1ไป เพราะว่าถ้าเราไม่ใส่มัน focus ข้อเดียวกัน คะ แต่ข้ออื่นหนูไม่ได้ใส่ตัวที่เหลือหนูใส่แต่ข้อ 1 ของทุกหัวข้อ--->
                <div class="mainQ">
                    <div class="headTitle">
                        <h6>1. เหนื่อยใจ เบื่อหน่าย รำคาญ</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q1" type="radio" name="q1" id="q1_1" value="-1">
                            <label class="form-check-label" for="q1_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q1" type="radio" name="q1" id="q1_2"
                                value="-2">
                            <label class="form-check-label" for="q1_2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q1" type="radio" name="q1" id="q1_3"
                                value="-3">
                            <label class="form-check-label" for="q1_3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q1" type="radio" name="q1" id="q1_4"
                                value="-4">
                            <label class="form-check-label" for="q1_4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q1" type="radio" name="q1" id="q1_5"
                                value="-5">
                            <label class="form-check-label" for="q1_5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>


                <div class="mainQ">
                    <div class="headTitle">
                        <h6> 2.	กระตือรือร้น คล่องแคล่ว </h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="q2_1" value="+1">
                            <label class="form-check-label" for="q2_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6> 3.	ใช้แรงจนหลับ </h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="q3_1" value="-1">
                            <label class="form-check-label" for="q3_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>4.	ปราดเปรียว มีพลัง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="q4_1" value="+1">
                            <label class="form-check-label" for="q4_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>5.	สดชื่นแจ่มใส ร่าเริง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="q5_1" value="+1">
                            <label class="form-check-label" for="q5_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>6.	ทำอะไรไม่ถูก ไร้ค่า ไร้อำนาจ</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="q6_1" value="-1">
                            <label class="form-check-label" for="q6_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>7.	ทำงานหนักได้ สู้งานหนักไหว</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="q7_1" value="+1">
                            <label class="form-check-label" for="q7_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>8.	อ่อนแอ อ่อนด้อย</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="q8_1" value="-1">
                            <label class="form-check-label" for="q8_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>9.	มีชีวิตชีวา กระฉับกระเฉง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="q9_1" value="+1">
                            <label class="form-check-label" for="q9_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>



                <div class="mainQ">
                    <div class="headTitle">
                        <h6>10.	อ่อนเพลีย ไม่แข็งแรง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="q10_1" value="-1">
                            <label class="form-check-label" for="q10_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>11.	ไม่สนใจสิ่งใด เมินเฉย</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="q11_1" value="-1">
                            <label class="form-check-label" for="q11_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>12.	เหน็ดเหนื่อย เมื่อยล้าอิดโรย</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="q12_1" value="-1">
                            <label class="form-check-label" for="q12_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>


                <div class="mainQ">
                    <div class="headTitle">
                        <h6>13.	อยากริเริ่ม สร้างสรรค์</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="q13_1" value="+1">
                            <label class="form-check-label" for="q13_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>14.	ผ่อนคลาย หายกังวลปล่อยวาง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="q14_1" value="+1">
                            <label class="form-check-label" for="q14_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>15.	ไม่ปลอดภัย ไม่มั่นคง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="q15_1" value="-1">
                            <label class="form-check-label" for="q15_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>16.	ชอบสังคม ชอบวิสาสะ ชอบเป็นหมู่</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="q16_1" value="+1">
                            <label class="form-check-label" for="q16_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>17.	ปลื้มปิติยินดี ดีอกดีใจ</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="q17_1" value="+1">
                            <label class="form-check-label" for="q17_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>

                <div class="mainQ">
                    <div class="headTitle">
                        <h6>18.	เหนื่อยกายจากงานหนัก</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="q18_1" value="-1">
                            <label class="form-check-label" for="q18_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>


                <div class="mainQ">
                    <div class="headTitle">
                        <h6>19.	ถูกทำให้อ่อนแอ</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="q19_1" value="-1">
                            <label class="form-check-label" for="q19_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="q2"
                                value="-2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="q3"
                                value="-3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="q4"
                                value="-4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="q5"
                                value="-5">
                            <label class="form-check-label" for="q5">
                                5. รู้สึกมากที่สุด
                            </label>
                        </div>

                    </div>
                </div>


                <div class="mainQ">
                    <div class="headTitle">
                        <h6>20.	เชื่อมั่นในตัวเอง</h6>
                    </div>
                    <div class="subQ">
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="q20_1" value="+1">
                            <label class="form-check-label" for="q20_1">
                                1. ไม่เลย ไม่รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="q2"
                                value="+2">
                            <label class="form-check-label" for="q2">
                                2. รู้สึก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="q3"
                                value="+3">
                            <label class="form-check-label" for="q3">
                                3. รู้สึกปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="q4"
                                value="+4">
                            <label class="form-check-label" for="q4">
                                4. รู้สึกมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="q5"
                                value="+5">
                            <label class="form-check-label" for="q5">
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
    <script src="js/q1.js"></script>


</body>

</html>
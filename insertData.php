<?php
session_start();

include 'config/connect.php';
$date = date("d/m/") . (date("Y") + 543) . "time" . date("H:i:s");
$id = 0;

if ($_SESSION["checkBtn"] == "o") {
    $idCode = $_SESSION["userLogin"];
} else {
    $idCode = $_SESSION["idCode"];
}

try {
    $stmt = $coon->prepare(" INSERT INTO answer(an_id, an1, an2, an3, an4, an_re_code, an_date) VALUES (?,?,?,?,?,?,?) ");
    $stmt->execute([$id, $_SESSION["qt1"], $_SESSION["qt2"], $_SESSION["qt3"], $_SESSION["qt4"], $idCode, $date]);
} catch (Exception $e) {
    echo "NoInsert" . $e->getMessage();
}


if (empty($stmt)) {
    header("location: index.php");
} else {
    header("location: show.php");
}

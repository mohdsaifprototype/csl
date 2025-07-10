<?php
session_start();
$server = "Localhost";
$user = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

$con = mysqli_connect($server, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
} else {

    $otp = $_GET["otp"];

    $webSql = "select otp from onlin_admission where otp='$otp' and otp_is_expired='1' and phone='" . $_SESSION["otp_phone"] . "'";

    $optRes = mysqli_query($con, $webSql);
    if (mysqli_num_rows($optRes) > 0) {
        $webSql1 = "update onlin_admission set otp_is_expired='0' where phone='" . $_SESSION["otp_phone"] . "'";
        mysqli_query($con, $webSql1);
        echo "1";
    } else {
        echo "0";
    }
}

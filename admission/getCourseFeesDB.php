<?php
session_start();
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $cname = $_GET["cname"];
    $phone1 = $_GET["phone1TF"];
    $phone2 = $_GET["phone2TF"];
    $referralCodeTF = $_GET["referralCodeTF"];

    $refDis = 0;

    $schDiscount = 0;
    $schDiscount1 = 0;
    $refDiscount = 0;

    if ($phone1 != "" || $phone1 != null || $phone1 != " ") {
        $scholar = "select session_id from session where phone1='$phone1' or phone2='$phone1' ";
        $scholarRes = mysqli_query($conn, $scholar);
        if (mysqli_num_rows($scholarRes) > 0) {
            $schDiscount = 1;
        }
    }


    if (!$phone2 = "" || !$phone2 = null || !$phone2 = " ") {
        $scholar2 = "select session_id from session where phone1='$phone2' or phone2='$phone2' ";
        $scholarRes2 = mysqli_query($conn, $scholar2);
        if (mysqli_num_rows($scholarRes2) > 0) {
            $schDiscount1 = 1;
        }
    }

    if (!$referralCodeTF = "" || !$referralCodeTF = null || !$referralCodeTF = " ") {
        $scholar3 = "select referral_fee from web_enquiries where referral_code='$referralCode' and referral_offer_valid_date>=CURRENT_DATE and course='$cname' ";
        $scholarRes3 = mysqli_query($conn, $scholar3);
        if (mysqli_num_rows($scholarRes3) > 0) {
            if ($r = mysqli_fetch_assoc($scholarRes3)) {
                $refDis = $r["referral_fee"];
                $refDiscount = 1;
            }
        }
    }

    $sql = "select * from fee_structure where course_id='$cname'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {

            if ($schDiscount == 1 || $schDiscount1 == 1) {
                $admFee = ($row["admission_fee"] * 50) / 100;
                $instFee = ($row["installment_amount"] * 50) / 100;
                $disFee = ($row["total_fee"] * 50) / 100;
                echo $row["total_fee"] . "-" . $admFee . "-" . $row["total_installment"] . "-" . $instFee . "-" . $disFee . "-" . $refDis;
                if ($refDiscount == 1) {
                    echo $row["total_fee"] . "-" . $row["admission_fee"] . "-" . $row["total_installment"] . "-" . $row["installment_amount"] . "-" . $row["discounted_fee"] . "-" . $refDis;
                }
            } else {
                echo $row["total_fee"] . "-" . $row["admission_fee"] . "-" . $row["total_installment"] . "-" . $row["installment_amount"] . "-" . $refDis . "-" . $refDis;
            }
        }
    }
}

mysqli_close($conn);

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
    $branchType  = $_POST["branchType"];
    $registrationNoTF  = $_POST["registrationNoTF"];
    $logisticNoTF  = $_POST["logisticNoTF"];
    $firstNameTF  = $_POST["firstNameTF"];
    $lastNameTF  = $_POST["lastNameTF"];
    $fatherNameTF  = $_POST["fatherNameTF"];
    $motherNameTF  = $_POST["motherNameTF"];
    $addressLine1TF  = $_POST["addressLine1TF"];
    $addressLine2TF  = $_POST["addressLine2TF"];
    $cityCB  = $_POST["cityCB"];
    $pinCodeTF  = $_POST["pinCodeTF"];
    $phone1TF  = $_POST["phone1TF"];
    $phone2TF  = $_POST["phone2TF"];
    $dobPanel  = $_POST["dobPanel"];
    $emailTF  = $_POST["emailTF"];
    $maleRB  = $_POST["maleRB"];
    $streamCB  = $_POST["streamCB"];
    $schoolLocationCB  = $_POST["schoolLocationCB"];
    $schoolNameCB  = $_POST["schoolNameCB"];
    $admissionDatePanel  = $_POST["admissionDatePanel"];
    $totalFeesTF  = $_POST["totalFeesTF"];
    $scholarFeesTF = $_POST["scholarFeesTF"];
    $referralFeesTF = $_POST["referralFeesTF"];
    $courseIDCB  = $_POST["courseIDCB"];
    $classModeDCB  = $_POST["classModeDCB"];
    $referralCodeTF  = $_POST["referralCodeTF"];
    $admissionFeesTF  = $_POST["admissionFeesTF"];
    $batchIDCB  = $_POST["batchIDCB"];
    $noOfInstallmentsTF  = $_POST["noOfInstallmentsTF"];
    $memberIDCB  = $_POST["memberIDCB"];
    $installmentAmountTF  = $_POST["installmentAmountTF"];
    $installmentStartDate  = $_POST["installmentStartDate"];
    $studentTypeCB  = $_POST["studentTypeCB"];
    $classStartDate  = $_POST["classStartDate"];
    $_SESSION["logistic_no"] = $_POST["logisticNoTF"];
    $totalCourseFee = ($totalFeesTF - $scholarFeesTF - $referralFeesTF);
    $sql = "INSERT INTO student_online_admission "
        . "(student_reg_no,student_password,student_logistic_no,student_admission_date, student_first_name , student_last_name ,student_add_line1 ,"
        . "student_add_line2 ,student_city , student_pincode ,student_course_id , student_member_id, student_school ,"
        . "student_batch_id , student_type , student_phone_no , student_mobile_no ,student_email ,student_dob ,"
        . "student_sex , student_father_name ,student_mother_name ,student_stream ,student_total_fees "
        . ",student_admission_amount ,student_total_installments ,student_installment_amount,student_installment_start_date,student_branch,class_mode,referral_code,class_start_date,is_online_admission) "
        . "values('$registrationNoTF','$registrationNoTF','$logisticNoTF',CURRENT_DATE,'$firstNameTF','$lastNameTF','$addressLine1TF','$addressLine2TF',"
        . "'$cityCB','$pinCodeTF','$courseIDCB','$memberIDCB','$schoolNameCB','$batchIDCB','0','$phone1TF','$phone2TF',"
        . "'$emailTF','$dobPanel','$maleRB','$fatherNameTF','$motherNameTF','$streamCB','$totalCourseFee','$admissionFeesTF','$noOfInstallmentsTF',"
        . "'$installmentAmountTF','$installmentStartDate','$branchType','$classModeDCB','$referralCodeTF','$classStartDate','1') ";
    if (mysqli_query($conn, $sql)) {
        $usql = "update onlin_admission set logistic_no='$logisticNoTF' where phone='" . $_SESSION["otp_phone"] . "'";
        mysqli_query($conn, $usql);
?>
        <script>
            window.location = "term-and-condition.php";
        </script>

    <?php

    } else {
    ?>
        <script>
            window.location = "../index.php";
        </script>

<?php

    }
}
mysqli_close($conn);
?>
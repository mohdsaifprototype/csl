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
    $payRegNo = $_POST["sregNo"];
    $payName = $_POST["sname"];
    $payFather = $_POST["fathername"];
    $payPhone = $_POST["phone"];
    $payType = $_POST["feeType"];
    $payTranction = $_POST["tranctionID"];

    $webSql = "insert into online_payment(student_reg_no,pay_name,pay_phone,pay_father,fee_type,pay_tranction_id,pay_date,transaction_by) values('$payRegNo','$payName','$payPhone','$payFather','$payType','$payTranction',CURRENT_DATE,'PayUMoney')";

    if (mysqli_query($con, $webSql)) {
?>
        <script>
            alert("Successfully Submitted");
            window.location = "index.php";
        </script>
<?php
    }
}

?>
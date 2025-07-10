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
    $user = $_POST["student_user"];
    $pass = $_POST["student_pass"];

    $sql = "select * from student where student_reg_no='$user' and student_password='$pass' ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["student_reg_no"] = $row["student_reg_no"];
            $_SESSION["student_admission_date"] = $row["student_admission_date"];
            $_SESSION["student_first_name"] = $row["student_first_name"];
            $_SESSION["student_last_name"] = $row["student_last_name"];
            $_SESSION["student_add_line1"] = $row["student_add_line1"];
            $_SESSION["student_add_line2"] = $row["student_add_line2"];
            $_SESSION["course_id"] = $row["student_course_id"];
            $_SESSION["batch_id"] = $row["student_batch_id"];
            $_SESSION["student_phone_no"] = $row["student_phone_no"];
            $_SESSION["student_mobile_no"] = $row["student_mobile_no"];
            $_SESSION["student_dob"] = $row["student_dob"];
            $_SESSION["student_father_name"] = $row["student_father_name"];
            $_SESSION["student_total_fees"] = $row["student_total_fees"];
            $_SESSION["student_admission_amount"] = $row["student_admission_amount"];
            $_SESSION["student_total_installments"] = $row["student_total_installments"];
            $_SESSION["student_installment_amount"] = $row["student_installment_amount"];
            $_SESSION["profile"] = $row["profile"];
            $_SESSION["student_password"] = $row["student_password"];
            $_SESSION["student_branch"] = $row["student_branch"];


            $csql = "select course_name from course where course_id='" . $_SESSION["course_id"] . "' ";
            $cresult = mysqli_query($con, $csql);
            if (mysqli_num_rows($cresult) > 0) {
                if ($data = mysqli_fetch_assoc($cresult)) {
                    $_SESSION["course_name"] = $data["course_name"];
                }
            }

            header("Location:student/student-home.php");
        }
    } else {
?>
        <script>
            alert("Username or Password Not Valid");
            window.location = "login.php";
        </script>
<?php
    }
}

?>
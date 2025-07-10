<?php
$link = mysqli_connect("localhost", "CSLims_root", "Admin@123", "CSLims_ims");
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$ft_name = $_POST['fathername'];
$mob_no = $_POST['mobile'];
$sel_course = $_POST['selcourse'];
$branch_id = $_POST["selbranch"];
if ($link == false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$sql = "select student_reg_no, student_password from student where student_first_name=' $first_name' AND student_last_name = '$last_name' AND student_branch = '$branch_id' AND student_father_name = '$ft_name' OR student_course_id= '$sel_course' AND student_mobile_no = '$mob_no' OR student_phone_no = '$mob_no'";
//$sql = "SELECT * FROM student where student_first_name = 'ashutosh'";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {

            $reg = $row['student_reg_no'];
            $pass = $row['student_password'];
            // echo "</br>";
            // $_SESSION["reg_no"]=$row['student_reg_no'];
            // $_SESSION["password"]=$row['student_password'];
            echo '<script> alert("Your User ID =' . $reg . ' And Password = ' . $pass . '"); window.location = "schedule.php";</script>';
        }
    } else {

        echo '<script>alert("You not Register yet!"); window.location = "schedule.php";</script>';
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

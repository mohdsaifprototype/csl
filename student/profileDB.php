<?php
$target_dir = "profile-image/";
$target_file = $target_dir . basename($_FILES["ffile"]["name"]);
$filename = $_FILES["ffile"]["name"];
$filesize = $_FILES["ffile"]["size"];
$imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
$uploadOk = 1;
$sreg = $_POST["sreg"];

if (file_exists($target_file)) {
    $uploadOk = 0;
?>
    <script>
        alert("Sorry, file already exists.");
        window.location = "student-home.php";
    </script>
<?php
}

if ($_FILES["fileToUpload"]["size"] > 153600) {
    $uploadOk = 0;
?>
    <script>
        alert("SSorry, your file is too large.");
        window.location = "student-home.php";
    </script>
<?php
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $uploadOk = 0;
?>
    <script>
        alert("Sorry, only JPG, JPEG, PNG files are allowed.");
        window.location = "student-home.php";
    </script>
<?php
}

if ($uploadOk == 0) {
    echo "";
?>
    <script>
        alert("Sorry, your file was not uploaded.");
        window.location = "student-home.php";
    </script>
<?php
} else {
    if (move_uploaded_file($_FILES["ffile"]["tmp_name"], $target_file)) {

        $server = "Localhost";
        $user = "CSLims_root";
        $password = "Admin@123";
        $dbname = "CSLims_ims";

        $con = mysqli_connect($server, $user, $password, $dbname);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error($con));
        } else {
            $sql = "update student set profile='$filename' where student_reg_no='$sreg'";
            mysqli_query($con, $sql);
        }
        header("Location:student-home.php");
    } else {
        header("Location:student-home.php");
    }
}

?>
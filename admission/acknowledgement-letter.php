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
    $webSql = "SELECT student_first_name, student_admission_date,student_course_id,student_father_name,student_total_fees from student_online_admission where student_logistic_no='" . $_SESSION["logistic_no"] . "'";
    $webRes = mysqli_query($con, $webSql);
    if (mysqli_num_rows($webRes) > 0) {
        if ($row = mysqli_fetch_assoc($webRes)) {
            $sname = $row["student_first_name"];
            $father = $row["student_father_name"];
            $totalFee = $row["student_total_fees"];
            $admDate = $row["student_admission_date"];

            $sql = "select course_name, course_duration from course where course_id='" . $row["student_course_id"] . "'";
            $Res = mysqli_query($con, $sql);
            if (mysqli_num_rows($Res) > 0) {
                if ($c = mysqli_fetch_assoc($Res)) {
                    $course = $c["course_name"];
                    if ($c["course_duration"] >= 365) {
                        $du = "Long Term";
                    } else {
                        $du = "Short Term";
                    }
                }
            }
        }
    }
}
?>

<html>

<head>
    <title> Acknowledgement:: CSL</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CSL" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        table tr td {
            width: 250px;
        }
    </style>
    <?php include '../links.php'; ?>
</head>

<body>
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-4 text-right">
                <a href="http://www.CSLskills.com">
                    <figure>
                        <img src="../images/CSL_logo.jpeg" width="150px" />
                        <figcaption>www.CSLskills.com</figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-4">
                <h3 class="text-primary text-center">CSL</h3>
                <p class="text-center">UTTAM NAGAR, NEW DELHI 110059 </p>
                <h2 class="text-primary text-center">ACKNOWLEDGEMENT LETTER</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <form action="acknowledgementDB.php" method="post">
        <div class="container py-2 jumbotron" style="border:2px solid black;">
            <div class="row py-5">
                <div class="col-md-12">
                    <h6><b>Subject:</b> This letter is to bring an acknowledge that you have understood all the details, which are given here under below: </h6>
                    <table class="table table-borderless py-5">
                        <tr>
                            <td>Date Of Admission</td>
                            <td style="color:#000000;"><?php echo $admDate; ?></td>
                        </tr>
                        <tr>
                            <td>Student Name</td>
                            <td style="color:#000000;"><?php echo $sname; ?></td>
                            <td>Father's Name</td>
                            <td style="color:#000000;"><?php echo $father; ?></td>
                        </tr>
                        <tr>
                            <td>Course</td>
                            <td style="color:#000000;"><?php echo $course; ?></td>
                            <td>Duration</td>
                            <td style="color:#000000;"><?php echo $du; ?></td>
                        </tr>
                        <tr>
                            <td>Total Fees</td>
                            <td style="color:#000000;"><?php echo $totalFee; ?></td>
                            <td>Division of Fee</td>
                            <td style="color:#000000;"></td>
                        </tr>
                        <tr>
                            <td>Class Mode</td>
                            <td>
                                <select name="classMode" required>
                                    <option>Alternate Days</option>
                                    <option>Regular</option>
                                    <option>Module wise (Regular/Alternate)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Applicable Benefits of Scholarship (Yes/No):
                                <table class="table-borderless">
                                    <tr>
                                        <td>Free English Spoken Classes</td>
                                        <td><input type="checkbox" name="freeEng" value="1" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Mock Interview Training</td>
                                        <td><input type="checkbox" name="mock" value="1" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Placement Assurance Letter</td>
                                        <td><input type="checkbox" name="placement" value="1" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Scheme of 85% result in 12th class</td>
                                        <td><input type="checkbox" name="result" value="1" class="form-control"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="ackAccept" value="1" required> understood all the above details and agree with all conditions.
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><button class="btn btn-success">Submit</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript" src="../js/jquery9.js"></script>
    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        document.getElementById("termDate").innerHTML = today;
    </script>

</body>

</html>
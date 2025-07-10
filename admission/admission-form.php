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
    $webSql = "SELECT student_logistic_no FROM student_online_admission  where is_online_admission='1' ORDER BY student_logistic_no DESC LIMIT 1 ";
    $webRes = mysqli_query($con, $webSql);
    if (mysqli_num_rows($webRes) > 0) {
        if ($row = mysqli_fetch_assoc($webRes)) {
            $logNo = $row["student_logistic_no"];
            $code = explode("-", $logNo);
            $logNo = "CSL-" . ($code[1] + 1);
        }
    } else {
        $logNo = "CSL-1001";
    }
}
//if(isset($_SESSION["otp_phone"]))
//{
?>
<html>

<head>
    <title> Admission Form:: CSL</title>
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
        label {
            font-size: 14px;
            font-weight: bold;
        }

        h2,
        h3,
        p {
            color: white;
            padding-top: 0px;
        }
    </style>
    <?php include '../links.php'; ?>
</head>

<body style="background-color:hotpink;">
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="http://www.CSLskills.com">
                    <figure>
                        <img src="../images/CSL_logo.jpeg" width="150px" />
                        <figcaption>www.CSLskills.com</figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-4">
                <h3 class="text-center">CSL</h3>
                <p class="text-center">UTTAM NAGAR, NEW DELHI 110059 </p>
                <h2 class=" text-center">APPLICATION FORM</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="container py-2 jumbotron jumbotron" style="border:2px solid black;">
        <div class="row py-5">
            <div class="col-md-12">
                <form action="admissionFormDB.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label>Logistic NO.</label>
                            <input class="form-control" type="text" name="logisticNoTF" id="logisticNoTF" value="<?php echo $logNo; ?>" required readonly />
                            <input class="form-control" type="hidden" name="registrationNoTF" id="registrationNoTF" required readonly />
                        </div>
                        <div class="col">
                            <label>Branch</label>
                            <select class="form-control" name="branchType" id="branchType" required>
                                <option value="">Select Branch</option>
                                <option value="05">UTTAM NAGAR</option>
                                <option value="06">EAST AZAD NAGAR</option>
                                <option value="07">KALKA JI</option>
                                <option value="08">BADARPUR</option>
                                <option value="09">PITAMPURA</option>
                                <option value="10">DILSHAD GARDEN</option>
                                <option value="11">JAIPUR</option>
                                <option value="12">KOTA</option>
                                <option value="13">MUMBAI</option>
                                <option value="14">BHOPAL</option>
                                <option value="15">VIDISA</option>
                                <option value="16">KANPUR</option>
                                <option value="17">AGRA</option>
                                <option value="18">LAKHNOW</option>
                                <option value="19">KOLKATA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>FIRST NAME</label>
                            <input type="text" name="firstNameTF" class="form-control" placeholder="First Name" required />
                        </div>
                        <div class="col">
                            <label>LAST NAME</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lastNameTF" />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>FATHER'S NAME</label>
                            <input type="text" class="form-control" name="fatherNameTF" required />
                        </div>
                        <div class="col">
                            <label>MOTHER'S NAME</label>
                            <input type="text" class="form-control" name="motherNameTF" required />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>ADDRESS LINE 1</label>
                            <input type="text" class="form-control" name="addressLine1TF" required />
                        </div>
                        <div class="col">
                            <label>ADDRESS LINE 2</label>
                            <input type="text" class="form-control" name="addressLine2TF" />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>CITY</label>
                            <select name="cityCB" id="cityCB" class="form-control" required>
                                <option value=""> Select City </option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>PIN CODE</label>
                            <input type="number" class="form-control" name="pinCodeTF" maxlength="8" required />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>PHONE 1 (Scholarship Valid Number)</label>
                            <input type="tel" class="form-control" id="phone1TF" name="phone1TF" maxlength="10" pattern=".{10,}" required />
                        </div>
                        <div class="col">
                            <label>PHONE 2</label>
                            <input type="tel" class="form-control" id="phone2TF" name="phone2TF" />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>DATE OF BIRTH</label>
                            <input type="date" name="dobPanel" class="form-control" required />
                        </div>
                        <div class="col">
                            <label>E-MAIL</label>
                            <input type="email" name="emailTF" class="form-control" placeholder="enter a valid address" />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>GENDER</label>
                            <div class="form-check">
                                <input type="radio" name="maleRB" value="Male" class="form-check-input" checked /> MALE
                            </div>
                            <div class="form-check">
                                <input type="radio" name="maleRB" value="Female" class="form-check-input" /> FEMALE
                            </div>
                        </div>
                        <div class="col">
                            <label>STREAM</label>
                            <select name="streamCB" class="form-control">
                                <option value="Arts">Arts</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Science">Science</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>SCHOOL/COLLEGE LOC.</label>
                            <input type="text" class="form-control" name="schoolLocationCB" id="slcb" />
                        </div>
                        <div class="col">
                            <label>SCHOOL/COLLEGE NAME</label>
                            <input type="text" class="form-control" name="schoolNameCB" id="schoolNameCB" />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>COURSE</label>
                            <select name="courseIDCB" id="courseIDCB" class="form-control" required>

                            </select>
                        </div>
                        <div class="col">
                            <label>TOTAL FEES</label>
                            <input type="number" class="form-control" name="totalFeesTF" id="totalFeesTF" required readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>CONCERN MEMBER</label>
                            <select name="memberIDCB" id="memberIDCB" class="form-control" required>

                            </select>
                        </div>
                        <div class="col">
                            <label>SCHOLARSHIP DISCOUNT</label>
                            <input type="number" class="form-control" name="scholarFeesTF" id="scholarFeesTF" required readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>Course Mode</label>
                            <select name="classModeDCB" id="classModeDCB" class="form-control" required readonly>

                            </select>
                            <span id="modeText" style="color:red;"></span>
                        </div>
                        <div class="col">
                            <label>REFERRAL DISCOUNT</label>
                            <input type="number" class="form-control" name="referralFeesTF" id="referralFeesTF" required readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>REFERRAL CODE (IF ANY)</label>
                            <input type="TEXT" class="form-control" name="referralCodeTF" id="referralCodeTF" maxlength="12" minlength="12" />
                        </div>
                        <div class="col">
                            <label>ADMISSION FEES</label>
                            <input type="number" class="form-control" name="admissionFeesTF" id="admissionFeesTF" required readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>INSTALLMENT START DATE</label>
                            <input type="date" class="form-control" name="installmentStartDate" id="installmentStartDate" readonly />
                        </div>
                        <div class="col">
                            <label>INSTALLMENT AMT.</label>
                            <input type="number" class="form-control" name="installmentAmountTF" id="installmentAmountTF" readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col">
                            <label>CLASS WILL BE START ON</label>
                            <input type="date" class="form-control" name="classStartDate" id="classStartDate" required />
                        </div>
                        <div class="col">
                            <label>NO. OF INSTALLMENTS</label>
                            <input type="number" class="form-control" name="noOfInstallmentsTF" id="noOfInstallmentsTF" readonly />
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col text-center">
                            <input class="btn btn-success" type="Submit" value="Submit" />
                            <input type="button" name="Clear" class="btn btn-success" onclick="reset()" value="CLEAR" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../js/jquery9.js"></script>
    <script>
        function updateFees(date) {

            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();

            if (month < 10)
                month = "0" + month;
            if (day < 10)
                day = "0" + day;

            var today = year + "-" + month + "-" + day;

            return today;
        }

        var nextInstDate = new Date();
        nextInstDate.setMonth(nextInstDate.getMonth() + 1);
        nextInstDate.setDate(7);
        document.getElementById("installmentStartDate").value = updateFees(nextInstDate);

        $(document).ready(function() {

            $.ajax({
                url: "getMemberNameListDB.php",
                type: 'POST',
                success: function(result) {

                    $("#memberIDCB").html(result);
                }
            });

            $.ajax({
                type: "POST",
                url: "getCourseNameListDB.php",
                success: function(result) {
                    $("#courseIDCB").html(result);
                }
            });


            $("#courseIDCB").change(function() {
                var bc = $("#branchType").val();
                var phone1TF = $("#phone1TF").val();
                var phone2TF = $("#phone2TF").val();
                if (bc == null || bc == "") {
                    alert("Select the Branch");
                    $.ajax({
                        type: "POST",
                        url: "getCourseNameListDB.php",
                        success: function(result) {
                            $("#courseIDCB").html(result);
                            $("#totalFeesTF").val("0");
                            $("#admissionFeesTF").val("0");
                            $("#noOfInstallmentsTF").val("0");
                            $("#installmentAmountTF").val("0");
                            $("#scholarFeesTF").val("0");
                            $("#referralFeesTF").val("0");
                        }
                    });

                }
                if (phone1TF == "" || phone1TF == " " || phone1TF == null) {
                    if (phone2TF == "" || phone2TF == " " || phone2TF == null) {
                        alert("Enter The Phone Number");
                        $.ajax({
                            type: "POST",
                            url: "getCourseNameListDB.php",
                            success: function(result) {
                                $("#courseIDCB").html(result);
                            }
                        });
                    }
                } else {
                    var d = new Date();
                    var bc = $("#branchType").val();
                    var cname = $("#courseIDCB").val();
                    var refCode = $("#referralCodeTF").val();
                    var year = d.getFullYear();
                    var code = Math.floor(Math.random() * 10000);

                    $.ajax({
                        type: "POST",
                        url: "getCourseForRegDB.php?cname=" + cname + "&bc=" + bc + "&year=" + year + "&code=" + code,
                        success: function(result) {
                            alert("Your Registration No is : " + result);
                            $("#registrationNoTF").val(result);
                            $.ajax({
                                type: "POST",
                                url: "getCourseFeesDB.php?cname=" + cname + "&phone1TF=" + phone1TF + "&phone2TF=" + phone2TF + "&referralCodeTF=" + refCode,
                                success: function(data) {
                                    var res = data.split("-");
                                    $("#totalFeesTF").val(res[0]);
                                    $("#admissionFeesTF").val(res[1]);
                                    $("#noOfInstallmentsTF").val(res[2]);
                                    $("#installmentAmountTF").val(res[3]);
                                    $("#scholarFeesTF").val(res[4]);
                                    $("#referralFeesTF").val(res[5]);
                                }
                            });
                        }
                    });

                }

            });

            $("#branchType").change(function() {
                var branch = $("#branchType").val();
                if (branch == 5 || branch == 6 || branch == 7) {
                    $("#classModeDCB").html("<option value='offline'>Offline/Online</option>");
                    $("#modeText").text("(offline only for UN, EAN, KalkaJI other will be online only)");
                } else {
                    $("#classModeDCB").html("<option value='online'>Online</option>");
                }
            });

            $('#referralCodeTF').on('input', function() {
                var courseID = $("#courseIDCB").val();
                var phone1TF = $("#phone1TF").val();
                var phone2TF = $("#phone2TF").val();
                var referralCode = $("#referralCodeTF").val();
                if (courseID == "" || courseID == "-1" || courseID == null) {
                    alert("Select The Course");
                }
                if (phone1TF == "" || phone1TF == " " || phone1TF == null) {
                    if (phone2TF == "" || phone2TF == " " || phone2TF == null) {
                        alert("Enter The Phone Number");
                    }
                } else {
                    if (referralCode.length == 12) {
                        $.ajax({
                            type: "POST",
                            url: "getReferralFeesDB.php?referralCode=" + referralCode + "&courseID=" + courseID,
                            success: function(data) {
                                if (data) {
                                    var res = data.split("-");
                                    $("#admissionFeesTF").val(res[0]);
                                    $("#noOfInstallmentsTF").val(res[1]);
                                    $("#installmentAmountTF").val(res[2]);
                                    $("#referralFeesTF").val(res[3]);

                                } else {

                                    alert("Referral Code is Not Valid. ");
                                    $.ajax({
                                        type: "POST",
                                        url: "getCourseFeesDB.php?cname=" + courseID + "&phone1TF=" + phone1TF + "&phone2TF=" + phone2TF,
                                        success: function(data1) {
                                            var res = data1.split("-");
                                            $("#totalFeesTF").val(res[0]);
                                            $("#admissionFeesTF").val(res[1]);
                                            $("#noOfInstallmentsTF").val(res[2]);
                                            $("#installmentAmountTF").val(res[3]);
                                            $("#scholarFeesTF").val(res[4]);
                                            $("#referralFeesTF").val("0");
                                        }
                                    });
                                }
                            }
                        });
                    }
                }
            });

            $('#phone1TF').on('input', function() {
                var courseID = $("#courseIDCB").val();
                var phone1TF = $("#phone1TF").val();
                var phone2TF = $("#phone2TF").val();
                var referralCode = $("#referralCodeTF").val();

                $.ajax({
                    type: "POST",
                    url: "getCourseFeesDB.php?cname=" + courseID + "&phone1TF=" + phone1TF + "&phone2TF=" + phone2TF + "&referralCodeTF=" + referralCode,
                    success: function(data) {
                        var res = data.split("-");
                        $("#totalFeesTF").val(res[0]);
                        $("#admissionFeesTF").val(res[1]);
                        $("#noOfInstallmentsTF").val(res[2]);
                        $("#installmentAmountTF").val(res[3]);
                        $("#scholarFeesTF").val(res[4]);
                        $("#referralFeesTF").val(res[5]);

                    }
                });

            });

        });
    </script>

</body>

</html>
<?php
/*}
else
{
    header("Location:../index.php");  
}*/
?>
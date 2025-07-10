<?php
session_start();
if (isset($_SESSION["student_reg_no"])) {
?>

    <head>
        <title>Student Home:: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#myFeesModal").modal('show', 3000);
            });
        </script>
        <?php include 'links.php'; ?>
        <style>
            .emp-profile {
                padding: 3%;
                margin-top: 3%;
                margin-bottom: 1%;
                border-radius: 0.5rem;
                background: #fff;
            }

            .profile-img {
                text-align: center;
            }

            .profile-img img {
                width: 70%;
                height: 100%;
            }

            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -20%;
                width: 70%;
                border: none;
                border-radius: 0;
                font-size: 15px;
                background: #212529b8;
            }

            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }

            .profile-head h5 {
                color: #333;
            }

            .profile-head h6 {
                color: #0062cc;
            }

            .profile-edit-btn {
                border: none;
                border-radius: 1.5rem;
                width: 70%;
                padding: 2%;
                font-weight: 600;
                color: #6c757d;
                cursor: pointer;
            }

            .proile-rating {
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }

            .proile-rating span {
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }

            .profile-head .nav-tabs {
                margin-bottom: 5%;
            }

            .profile-head .nav-tabs .nav-link {
                font-weight: 600;
                border: none;
            }

            .profile-head .nav-tabs .nav-link.active {
                border: none;
                border-bottom: 2px solid #0062cc;
            }

            .profile-work {
                padding: 14%;
                margin-top: -15%;
            }

            .profile-work p {
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }

            .profile-work a {
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                font-size: 14px;
            }

            .profile-work ul {
                list-style: none;
            }

            .profile-tab label {
                font-weight: 600;
            }

            .profile-tab p {
                font-weight: 600;
                color: #0062cc;
            }

            .custab {
                border: 1px solid #ccc;
                padding: 5px;
                margin: 5% 0;
                box-shadow: 3px 3px 2px #ccc;
                transition: 0.5s;
            }

            .custab:hover {
                box-shadow: 3px 3px 0px transparent;
                transition: 0.5s;
            }

            .center {
                margin-top: 50px;
            }

            .modal-pop {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
            }


            .modal-content-pop {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 60%;
            }


            .closeFees {
                color: black;
                font-size: 28px;
                font-weight: bold;
            }

            .closeFees:hover,
            .closeFees:focus {
                color: red;
                text-decoration: none;
                cursor: pointer;
            }
        </style>

    </head>

    <body oncontextmenu="return true;">
        <!-- home -->
        <div id="home" class="inner-CSL-page">
            <div class="overlay-innerpage">
                <?php include 'menu.php'; ?>
            </div>
            <!-- //banner -->
        </div>

        <!--<div class="container emp-profile">
            <form action="profileDB.php" id="formId" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <?php
                            if ($_SESSION["profile"] == null || $_SESSION["profile"] == "") {
                            ?>
                                <img src="profile-image/profile.png" alt="" height="100px" />
                            <?php
                            } else {
                            ?>    
                                <img src="profile-image/<?php echo $_SESSION["profile"]; ?>" height="100px" alt=""  />
                            <?php
                            }
                            ?>
                            <a  href="#" class="file btn btn-lg btn-primary" style="">
                                Change Photo
                                <input type="hidden" value="<?php echo $_SESSION["student_reg_no"]; ?>" id="sreg" name="sreg">
                                <input type="file" name="ffile" id="profileImg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5><?php echo strtoupper($_SESSION["student_first_name"] . " " . $_SESSION["student_last_name"]); ?></h5>
                                    <h6 id="courseID"><?php echo $_SESSION["course_name"]; ?></h6>
                                    <p class="proile-rating"></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <button type="button" class="profile-edit-btn" data-toggle="modal" href="#myModal">Edit Profile</button>
                    </div>
                </div>
                <div class="row" style="">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_reg_no"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>Father's Name</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_father_name"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>DOB</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_dob"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_phone_no"] . " / " . $_SESSION["student_mobile_no"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>Address 1</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_add_line1"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>Address 2</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_add_line2"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label>Date Of Admission</label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p><?php echo $_SESSION["student_admission_date"]; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>           
                </div> 
    
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-lg-12 custyle">
                <h4 class="text-primary">1. Academic Records  </h4>
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-success">
                <th>S. no.</th>
                <th>Date</th>
                <th>Exam Name</th>
                <th>Total Marks</th>
                <th>Marks Obtained </th>
                <th>Exam Status</th>
                <th>Exam Type</th>
                <th>Diploma Marks Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $server = "Localhost";
                    $user = "CSLims_root";
                    $password = "Admin@123";
                    $dbname = "CSLims_ims";

                    $con = mysqli_connect($server, $user, $password, $dbname);
                    $sql = "SELECT *,student_exam_result.result,student_exam_result.exam_result_date FROM `exam` INNER JOIN student_exam_result ON exam.exam_id=student_exam_result.exam_id and student_exam_result.student_reg_no='" . $_SESSION["student_reg_no"] . "'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 0;
                        while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $data["exam_result_date"]; ?></td>
                                    <td><?php echo $data["exam_name"]; ?></td>
                                    <td><?php echo $data["exam_total_marks"]; ?></td>
                                    <td><?php echo $data["result"]; ?></td>
                                    <td><?php
                                        $res = ($data["result"] / 40) * 100;
                                        if ($res >= 50) {
                                            echo "<h5 style='color:green;font-weight:bold;'>Pass</h5>";
                                        } else {
                                            echo "<h5 style='color:red;font-weight:bold;'>Fail</h5>";
                                        }
                                        ?>
                                    </td>
                                    <td><?php
                                        if ($data["exam_type"] == 1) {
                                            echo "Online";
                                        } else {
                                            echo "Offline";
                                        }
                                        ?>
                                    </td>
                                    <td>None</td>
                                </tr>
                                <?php
                            }
                        }
                                ?>
                </tr>
            </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary">2. Attandance  Records  </h4>
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-success">
                <th>Month</th>
                <th>Total class held</th>
                <th>Present</th>
                <th>Absent</th>
                <th>Attandance Ratio </th>
                </tr>
            </thead>
            </table>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class="text-primary">3. Application  Records  </h4>
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-success">
                <th>S.No</th>
                <th>Date of application</th>
                <th>Member name</th>
                <th>Massage</th>
                <th>Status (Open or close) </th>
                </tr>
            </thead>
            <tbody id="application">
                
            </tbody>
            </table>
            </div>
        </div>
    </div>
    
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Send Message</h4>
                    <form action="studentMailDB.php" method="post">
                          <div class="form-group">
                            <label for="email">To :</label>
                            <select id="sMember" name="sMember" class="form-control" style="height:30px;" required>
                                
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Subject:</label>
                                <select id="sub" name="sSubject" class="form-control" style="height:30px;" required>
                                    <option value="">select</option>
                                    <option>Batch Change</option>
                                    <option>Fees</option>
                                    <option>classes</option>
                                    <option>other</option>
                                </select>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Message:</label>
                                <textarea class="form-control" rows="5" name="sMsg" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-success">Send</button>
                        </form> 
                     </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary">4. Module Status   </h4>
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-success">
                <th>S.No</th>
                <th>Module Name</th>
                <th>Module status (Runing, completed or Pending)</th>
                <th>Project Status</th>
                </tr>
            </thead>
            <tbody id="getModules">
                
            </tbody>
            </table>
            </div>
        </div>
    </div>
    
    <!-- Modal -->

        <!--<div class="container">
	        <div class="row">
	            <form action="editProfileDB.php" method="post">
                <div class="modal hide" id="myModal" style="width:60%;height:70%;top:10%;left:20%;background-color:white">
                  <div class="modal-header">
                    <h3>Edit Profile</h3>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label>First Name</label>
                          <input type="hidden" class="form-control"  placeholder="Enter First Name" name="sreg" value="<?php echo $_SESSION['student_reg_no']; ?>">
                          <input type="text" class="form-control"  placeholder="Enter First Name" name="sfname" value="<?php echo $_SESSION['student_first_name']; ?>">
                        </div>
                        <div class="col">
                            <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Enter Last Name" name="slname" value="<?php echo $_SESSION['student_last_name']; ?>">
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col">
                        <label>Father's Name</label>
                          <input type="text" class="form-control"  placeholder="Enter Father's Name" name="sfather" value="<?php echo $_SESSION['student_father_name']; ?>">
                        </div>
                        <div class="col">
                          <label>Date Of Birth</label>
                          <input type="date" class="form-control" placeholder="Enter DOB" name="sdob" value="<?php echo $_SESSION['student_dob']; ?>">
                        </div>
                    </div>   
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Phone 1</label>
                          <input type="text" class="form-control"  placeholder="Enter Phone 1" name="sphone1" value="<?php echo $_SESSION['student_phone_no']; ?>">
                        </div>
                        <div class="col">
                            <label>Phone 2</label>
                          <input type="text" class="form-control" placeholder="Enter Phone 2" name="smobile1" value="<?php echo $_SESSION['student_mobile_no']; ?>">
                        </div>
                    </div>  
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Address 1</label>
                          <input type="text" class="form-control"  placeholder="Enter Add 1" name="sadd1" value="<?php echo $_SESSION['student_add_line1']; ?>">
                        </div>
                        <div class="col">
                            <label>Address 2</label>
                          <input type="text" class="form-control" placeholder="Enter Add 2" name="sadd2" value="<?php echo $_SESSION['student_add_line2']; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Password</label>
                          <input type="text" class="form-control"  placeholder="Enter New Password" name="spassword" value="<?php echo $_SESSION['student_password']; ?>">
                        </div>
                        <div class="col">
                            
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                  </div>
                </div>
                </form> 
	        </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="myFeesModal" class="modal-pop">
                        <div class="modal-content-pop">
                            <p class="closeFees">CLOSE &times;</p>
                            <div class="row py-2">
                                <div class="col-md-12">
                                    <h4>It is to inform that all students submit their fees before 20 June.</h4>
                                </div>
                            </div>

                            <h4 class="bg-header"> STUDENT HAVE ANY ISSUE REGARDING CLASSES. PLEASE CONTACT ON:</h4>
                            <h4>1) +91 98 917 686 67</h4>
                            <h4>2) +91 97 177 501 64</h4>

                            <h4 class="bg-header"> CLASS TIMMING & DAYS:</h4>
                            <!-------------------------->

                            <!-------------------------->



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->

        <!-- //footer -->
        <!-- copyright -->
        <div class="copy_right p-3 d-flex justify-content-around">

            <p>© 2016 CSL. All rights reserved
            </p>

        </div>
        <!-- //copyright -->
        <script>
            $('#profileImg').change(function() {
                $("#formId").submit();
            });

            $(document).ready(function() {

                var sreg = $("#sreg").val();

                $.ajax({
                    url: "getMemberNameListDB.php",
                    type: "post",
                    success: function(result) {
                        $("#sMember").html(result);
                    }
                });

                $.ajax({
                    url: "getApplicationListDB.php?reg=" + sreg,
                    type: "post",
                    success: function(result) {
                        $("#application").html(result);
                    }
                });


                $.ajax({
                    url: "getModuleListDB.php?course=<?php echo $_SESSION['course_id'] ?>",
                    type: "post",
                    success: function(result) {
                        $("#getModules").html(result);
                    }

                });

            });

            var modal = document.getElementById("myFeesModal");
            var span = document.getElementsByClassName("closeFees")[0];
            modal.style.display = "block";
            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
<?php
} else {
    //header("Location:../login.php");
}
?>
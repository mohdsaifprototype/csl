<head>
    <title> About Mission:: CSL</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CSL" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $("#myModal").modal('show');
            }, 3000);

        });
    </script>
    <?php include 'links.php'; ?>
</head>

<body>
    <!-- home -->
    <div id="home" class="inner-CSL-page">
        <div class="overlay-innerpage">
            <!-- banner -->
            <?php include 'menu.php'; ?>
            <!-- //nav -->

        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->

    <div class="team-CSLls py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">

                <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                    <h4 class="tittle-CSL text-left py-2" style="color: #002752;">Vision </h4>
                    <p class="text-left sub-tittle" style="font-size: 12px; ">"To be a Leading Global Player in taking the skills development to the next dimension and play a
                        significant role in reducing skill gaps in the youth globally"
                    </p>
                    <h4 class="tittle-CSL text-left py-2 " style="color: #002752;">Mission </h4>
                    <p class="text-left sub-tittle" style="font-size: 12px; ">"To empower our students with knowledge & skills which leads to sustainable & meaningful employment.
                        To remove constraints from the student's minds so that individuals may explore their capabilities
                        and interests enabling them to develop their full intellectual and human potential"
                    </p>
                    <hr style="width: 100%;">
                </div>
                <div class="col-lg-5 ">
                    <img src="images/mission.jpg" width="100%" class="image1 img-fluid">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 welcome-right mt-lg-0">
                    <h4 class="tittle-CSL py-2" style="color: #002752;">Our Values </h4>
                    <ul class="od">
                        <li>Fairness and transparency with associates.</li>
                        <li> Consistent Superior Performance</li>
                        <li> Exceed customer expectations through world class processes.</li>
                        <li> Shared destiny with all partners</li>
                        <li> Adhere to societal norms, laws and ethos</li>
                        <li> Respect for the individual.</li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-header">
                                <h4 class="modal-title text-center" style="color:white">Enquiry Now - <span style="font-family:arial">+91 8527567772</span></h4>
                                <button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="images/CSL_logo.jpeg" class="img-responsive">
                                        <h4 class="text-center mt-3">Do you have any Questions?</h4>
                                        <h3 class="text-center">ASK OUR EXPERT</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="webEnquiryDB.php" method="post">
                                            <div class="form-group">
                                                <input type="text" placeholder="Full Name" name="webName" class="form-control" id="usr" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Mobile" name="webPhone" minlength="10" maxlength="10" class="form-control" id="mob" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Email" name="webEmail" class="form-control" id="email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Course" name="webCourse" class="form-control" id="course" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="msg" placeholder="Message" rows="3" id="comment" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Contact</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include 'CSL_footer.php'; ?>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 CSL. All rights reserved
        </p>
    </div>

</body>

</php>
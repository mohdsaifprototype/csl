<head>
    <title> About Chairman:: CSL</title>
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
            <?php include 'gavigation.php'; ?>
            <!-- //nav -->

        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->
    <div class="row">
        <div class="col-lg-2 welcome-left ">
            <p class=" pr-lg-2">
            <div class="serve-grid team-gd">
                <img src="images/chairman-CSL.jpg" alt="" width="100%" class="img-fluid image1">
            </div>

            </p>
        </div>
        <div class="col-lg-7 welcome-left">
            <h5 class="tittle-CSL mr-3">Mr. SHUBHAM CHATURVEDI</h5>
            <h5 class="tittle-CSL mr-3">Chairman(CSL)</h5>
            <h5 class="tittle-CSL mr-3">A Unit of Gayatri Devi Solution LLP</h5>
            <p class="sub-tittle mt-5 mb-3 ">
                CSL is incipient to take admission for this session. During a more than 4 Years
                of its Educational Excellence in the field of Computer Science, the Institute has emerged
                into a fully grown-up-to-date and Technical conscious Institute. It has created a niche for
                itself in the academic life fo the country. The Technical Education and of course the Institution
                as well are entering into a new phase. Emergence of conscious thinking, re-engineering approaches
                are modeling the educational setup into a new frame. CSL has lauched the more valuable new wing for
                animation course to full fill the position in the animation industry. The responsibilities of the
                technical institutes in our country are gradually increasing. Besides preparing young technocrats
                for meeting the future challenges, the values, cultures and ethics of the society are also to be
                kept in the mind. My Thanks and best wishes to staff members, faculties and students and especially
                to all the centre directors for their sincere efforts and dedications. I am confident while making
                promise to the new entrants that we are determined to give them best in a perfect and organized way.
            </p>
            <p style="text-align:center;">Wishing Good Luck!</p>
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
    <?php include 'footer.php'; ?>
    <!-- //footer -->
    <!-- copyright 
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 CSL. All rights reserved 
        </p>
    </div>-->
    <!-- //copyright -->






</body>

</php>
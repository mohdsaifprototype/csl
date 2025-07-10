<head>
    <title> Franchise :: CSL</title>
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

    <div class="team-CSLls py-2">
        <div class="container py-xl-5 py-lg-3">
            <h4 class="tittle-CSL text-left py-2">Why Franchise Works</h4>
            <div class="row">
                <div class="col-lg-7 text-center mt-lg-0 mt-5">
                    <h4 class="tittle-CSL text-left py-2" style="color: #002752;">Continued Support in all areas </h4>
                    <p class="text-left sub-tittle" style="font-size: 12px; ">
                        In a Franchise business you can look forward to support in start- up,
                        training, marketing, advertising, recruiting, management etc.
                    </p>
                    <hr style="width:100%;">
                    <h4 class="tittle-CSL text-left py-2 " style="color: #002752;">Brand name recognition </h4>
                    <p class="text-left sub-tittle" style="font-size: 12px; ">
                        This is one of the key reasons for the success of the Franchising business model.
                        Brand building is an expensive proposition. Established franchisers always offer a national as well as regional promotion and advertising support .
                        This leads to huge economies of scale and makes the business viable for even small set ups.
                    </p>
                    <hr style="width:100%;">


                </div>
                <div class="col-lg-5 ">
                    <img src="images/g1.jpg" width="100%" class="image1 img-fluid">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="tittle-CSL py-2" style="color: #002752;">Better chance of Success </h4>
                    <p class="text-left" style="font-size: 12px;color: #000; ">
                        With a franchise, you benefit from the work and experience of others who have already invested their
                        resouress in creating a successful business statistics show that 90% start ups fail within 5 years while U.S.
                        Department of Commerce confirms and this applies to
                        India as well that over 90% of Franchised Businesses continue to operate even after 5 years.
                    </p>
                    <hr style="width: 100%;">
                    <h4 class="tittle-CSL py-2" style="color: #002752;">A Proven Business</h4>
                    <p class="text-left" style="font-size: 12px; color: #000; ">
                        A Franchiser offers a product or service that has been Successfully developed.,
                        tested, refined and marketed. With franchising you are buying into a business that is already operating.
                    </p>
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
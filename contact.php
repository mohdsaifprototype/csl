<!DOCTYPE php>
<php lang="zxx">

    <head>
        <title>Contact :: CSL</title>
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

        <section class="about py-5">
            <div class="container py-md-2">
                <h3 class="tittle-CSL text-center">Contact Us</h3>
                <div class="row py-5">
                    <div class="col-lg-11 ">
                        <h5 style="color: #117a8b">Registered Office</h5>
                        <hr>
                        <ul class="list-unstyled w3ls-items">
                            <li>
                                <div class="row mt-3">
                                    <div class="col-9">
                                        <h6 style="color: #ff3333;">Address</h6>
                                        <p>Building No. 13, 2.2 on 2nd Floor,
                                            <br>Gali No-2, Old Govind Pura Extn,
                                            <br> Delhi-110051
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-11 py-5">
                        <h5 style="color: #117a8b">Corporate Office</h5>
                        <hr>
                        <ul class="list-unstyled w3ls-items">
                            <li>
                                <div class="row mt-3">

                                    <div class="col-9">
                                        <h6 style="color: #ff3333;">Address </h6>
                                        <p>A-7A, Milap Nagar, Opposite: East Milap Nagar
                                            <br>Near Metro Pillar No:-652, Uttam Nagar,
                                            <br>Delhi-110059
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row mt-2">

                                    <div class="col-9">
                                        <h6 style="color: #ff3333;">Branches</h6>
                                        <p>
                                            East Azad Nagar | Uttam Nagar | Pitampura | Kalkaji | Badarpur |
                                            Dilshad Garden | Jaipur | Kota | Mumbai | Bhopal | Vidisa | Kanpur | Agra | Lakhnow
                                            | Kolkata
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row mt-4">
                                    <div class="col-9">
                                        <h6 style="color: #ff3333;">Student Help Desk</h6>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href=>mail@CSLskills.com</a><br>
                                        <i class="fa fa-phone" aria-hidden="true"></i> <span style="font-family:arial">+91 98 917 686 67</span><br>
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> <span style="font-family:arial">+91 97 177 501 64</span><br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row mt-2 py-2">
                                    <div class="col-9">
                                        <h6 style="color: #ff3333;">Placement Help Desk</h6>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href=>hr@CSLskill.com</a><br>
                                        <i class="fa fa-phone" aria-hidden="true"></i> <span style="font-family:arial">+91 99 710 248 70</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="map-CSL mt-3 p-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14008.747697973597!2d77.0640379!3d28.6241593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7846cdebe075a7e!2sCSL%20skills!5e0!3m2!1sen!2sin!4v1583429774027!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
            </div>
        </section>

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
        <!-- //copyright -->






    </body>

</php>
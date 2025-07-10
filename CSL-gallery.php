<html>

<head>
    <title>Gallery :: CSL</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CSL" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $("#myModal").modal('show');
            }, 3000);

        });
    </script>
    <?php include 'links.php'; ?>
    <style>
        .col-md-3 {
            display: inline-block;
            margin-left: -4px;
        }

        .col-md-3 img {
            width: 100%;


        }

        body .carousel-indicators li {
            background-color: red;
        }

        body .carousel-indicators {
            bottom: 0;
        }

        body .carousel-control-prev-icon,
        body .carousel-control-next-icon {
            background-color: red;
        }

        body .no-padding {
            padding-left: 0;
            padding-right: 0;
        }


        /*testing*/
        #demo {

            margin-top: 50px;
            margin-bottom: 200px;
            margin-left: -90px;



            height: 300px;
            width: 1300px;
        }

        .image-pop {
            position: relative;
        }

        .large {
            position: absolute;
            left: -9999px;
        }

        .image-pop:hover .large {

            left: -150px;
            top: -40px;
            z-index: 9999;
            width: 300px;
            border: 10px solid #dc1586;
            transform: scale(1.5);
            background-color: #dc1586;


        }

        .large-image {
            width: 320px;
            z-index: 9999;
        }

        .carousel-control-prev {
            left: -60px;

        }

        .carousel-control-next {

            right: -50px;
        }





        /*testing*/
    </style>

</head>

<body>
    <div id="home" class="inner-CSL-gallery-page">
        <div class="overlay-innerpage">
            <?php include 'menu.php'; ?>
        </div>
        <!-- //banner -->
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tittle-CSL text-center">Image Gallery</h3>
                </div>
            </div>

            <!--button start-->
            <div class="contain">
                <button class="button btn btn-primary" onclick="myFunction()">Green</button>
                <button class="button btn btn-primary" onclick="myFunction1()">Blue</button>
                <button class="button btn btn-primary">Red</button>
                <button class="button btn btn-primary">Gray</button>
                <button class="button btn btn-primary">Black</button>
            </div>
            <!--button end-->


            <div class="row py-5 gap" id="topgap">
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images\gallery\test\9.jpg" width="100%">
                        <span class="large">
                            <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images\gallery\test\10.jpg" width="100%">
                        <span class="large">
                            <img src="images\gallery\test\10.jpg" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images\gallery\test\11.jpg" width="100%">
                        <span class="large">
                            <img src="images\gallery\test\11.jpg" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images\gallery\test\14.jpg" width="100%">
                        <span class="large">
                            <img src="images\gallery\test\14.jpg" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
            </div>

















            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- The slideshow -->
                <div class="container carousel-inner no-padding">
                    <div class="carousel-item active">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>


                    </div>
                    <div class="carousel-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="image-pop">
                                <img src="images\gallery\test\9.jpg">
                                <span class="large">
                                    <img src="images\gallery\test\9.jpg" width="100%" class="large-image" alt="adventure">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon" class="left"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon" class="right"></span>
                </a>
            </div>


        </div>
    </section>



    <!-- //gallery -->


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

</html>
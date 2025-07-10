<?php
session_start();
if (isset($_SESSION["otp_phone"])) {
?>
    <html>

    <head>
        <title>Download :: CSL</title>
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
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-5">
                        <h4 class="text-justify">
                            Thank You for your Enquiry. We will contact you soon on your registered no. If you have any query Please contact on 8527567772/9971024870.
                        </h4>
                    </div>
                    <div class="col-lg-4">
                        <a href="images/CSL_brochure.pdf" class="btn btn-success">Download Brochure</a><br><br>
                        <a href="http://CSLskills.com/index.php" class="btn btn-success">Back TO CSLSKILLS</a>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </section>


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
<?php
} else {
    header("Location:index.php");
}
?>
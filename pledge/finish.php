<?php
session_start();
if (isset($_SESSION["fname"])) {
?>

    <head>
        <title> Covid Awareness :: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <?php include 'links.php'; ?>
        <style>
            .name {
                position: absolute;
                top: 360px;
                font-family: Lucida Handwriting;
                font-size: 25px;
                left: 450px;
            }
        </style>
    </head>

    <body>
        <!-- home -->
        <div id="home" class="inner-CSL-page">
            <div class="overlay-innerpage">
                <!-- banner -->
                <?php include '../menu.php'; ?>
                <!-- //nav -->
            </div>
            <!-- //banner -->
        </div>
        <!-- //home -->
        <!-- about -->
        <div class="container py-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <section class="about">
                        <div class="about-CSLls-info">
                            <h3 class="tittle-CSL text-center " style="color: #002752;">Certificate</h3>
                        </div>
                    </section>
                    <span class="name">
                        <?php
                        $exp = explode(" ", $_SESSION["fname"]);
                        echo $exp[0];
                        ?>
                    </span>
                    <img src="pledge.jpg" class="" style="width:100%;">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- //about -->
        <!-- footer -->
        <?php include '../CSL_footer.php'; ?>
        <!-- //footer -->
        <!-- copyright -->
        <div class="copy_right p-3 d-flex justify-content-around">
            <p>© 2016 CSL. All rights reserved
            </p>
            <!-- move top -->
            <div class="move-top">
                <a href="#home" class="move-top">
                    <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
                </a>
            </div>
            <!-- move top -->
        </div>
        <!-- //copyright -->
    </body>

    </html>
<?php
} else {
    header("Location:pledge-guide.php");
}
?>
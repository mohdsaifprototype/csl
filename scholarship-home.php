<?php
session_start();
if (isset($_SESSION["scholar_name"])) {
?>

    <head>
        <title>Scholarship :: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php include 'links.php'; ?>
        <script>
            function playVideo() {
                var myVideo = document.getElementById("myVideo");
                myVideo.loop = true;
                myVideo.autoplay = true;
                myVideo.load();
            }
        </script>

        <style>
            header {
                width: 900px;
                background-color: white;
                margin: 0px auto;
                position: relative;
                top: 50px;
                height: 50px;
            }

            .logout-btn {
                color: black;
                height: 50px;
                padding: 12px;
                width: 120px;
                float: right;

            }

            .container-fluid {
                width: 100%;
                margin: 0px;
                padding: 0px;
            }
        </style>
    </head>

    <body onLoad="playVideo();">
        <!-- home -->
        <div id="home" class="">
            <?php include 'menu.php'; ?>
            <section id="video" style="margin-top:60px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <video id="myVideo" width="100%" autoplay loop>
                                <source src="images/video/congratulation.mp4" type="video/mp4">
                                <source src="images/video/congratulation.ogg" type="video/ogg">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <section class="py-3">
            <h2 class="text-center"> <?php echo strtoupper($_SESSION["scholar_name"]); ?> </h2>
            <h4 class="text-center"> You've earned a Scholarship</h4>
        </section>
        <section class="about py-5">
            <div class="container">
                <div class="row py-2">
                    <div class="col-lg-12 ">
                        <h3 class="tittle-CSL">Welcome To CSLSkills </h3>
                        <p style="margin-top:20px;font-size:18px;text-align:justify;font-family:Lucida Calligraphy;">
                            Dear <b><?php echo strtoupper($_SESSION["scholar_name"]); ?></b> congratulation! You Are Selected for diploma/certificate training Under
                            DTSE (Delhi Talent Search Examination) Scholarship Program provided by CSL
                            Institute of Training & Placement with 50% Scholarship Out Of 2 Lakhs Candidate.
                            Kindly contact for admission your nearest CSL Branch (Government Registered
                            Center). we wish you all the best for your great future for any query contact on
                            9971024870.
                        </p>
                        <marquee style="margin-top:40px;color:white;background:linear-gradient(to right,#FF6347,#FF4500,#FF7F50);">
                            Some seat are available only afternoon batches under scholarship scheme hurry up take your admission for training program. SMS for seat confirmation 8527567772
                        </marquee>

                        <p style="color:white;margin-top:30px;font-size:18px;text-align:center;background-color:skyblue;">180 seat already booked under scholarship scheme out of 250.</p>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <?php
                        /*  if($_SESSION["visit"]!="0")
                            {
                                    
                             ?>
                             <p class="name"><?php echo strtoupper($_SESSION["scholar_name"]); ?></p>
                             <p class="father"><?php echo strtoupper($_SESSION["scholar_father"]); ?></p>
                             <p class="school"><?php echo strtoupper($_SESSION["school"]); ?></p>
                             <p class="date"><?php echo strtoupper($_SESSION["visit_date"]); ?></p>
                             <img src="images/scholarship/original-certificate CSL.jpg" width="100%">
                            <?php
                            }
                            */
                        ?>
                        <img src="images/scholarship/original-certificate CSL.jpg" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="about py-3">
            <div class="container">
                <div class="row py-2">
                    <div class="col-lg-12">
                        <a href="images/CSL_brochure.pdf" style="margin-top:20px;" title="" download>
                            <button class="button-link" title="" style="--content: 'Download!';width:auto;">
                                <div class="left"></div>
                                Download Brochure
                                <div class="right"></div>
                            </button>
                        </a>
                        <a href="http://CSLskills.com/index.php#Demo" title="" style="margin-top:20px;">
                            <button class="button-link" title="" style="--content: 'Demo!';">
                                <div class="left"></div>
                                Book Demo
                                <div class="right"></div>
                            </button>
                        </a>
                    </div>
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
<?php
} else {
    header("Location:scholarship-student.php");
}
?>
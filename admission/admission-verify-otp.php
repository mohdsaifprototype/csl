<?php
session_start();
if (isset($_SESSION["otp_phone"])) {
?>
    <html>

    <head>
        <title>OTP Verification :: CSL</title>
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
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <h4 class="tittle-CSL mb-4" style="font-weight:bold">Phone Verification</h4>
                        <form>
                            <div class="form-group">
                                <label>Enter Your OTP </label>
                                <input type="textbox" class="form-control" name="otpTF" id="otpTF" placeholder="" required>
                                <span style="color:red;">OTP Expired In = </span><span id="timer" style="font-family:arial;"></span></label>
                            </div>
                            <button type="button" id="otpSub" class="btn btn-success submit mb-4">Submit</button>
                        </form>
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
            <!-- move top -->
            <div class="move-top">
                <a href="#home" class="move-top">
                    <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
                </a>
            </div>
            <!-- move top -->
        </div>
        <!-- //copyright -->
        <script>
            document.getElementById('timer').innerHTML =
                005 + ":" + 00;
            startTimer();

            function startTimer() {
                var presentTime = document.getElementById('timer').innerHTML;
                var timeArray = presentTime.split(/[:]+/);
                var m = timeArray[0];
                var s = checkSecond((timeArray[1] - 1));
                if (s == 59) {
                    m = m - 1
                }
                if (m < 0) {
                    isExpired();
                }

                document.getElementById('timer').innerHTML =
                    m + ":" + s;
                console.log(m)
                setTimeout(startTimer, 1000);
            }

            function checkSecond(sec) {
                if (sec < 10 && sec >= 0) {
                    sec = "0" + sec
                }; // add zero in front of numbers < 10
                if (sec < 0) {
                    sec = "59"
                };
                return sec;
            }

            function isExpired() {
                $.ajax({
                    url: "otpExpiredDB.php",
                    type: "post",
                    success: function(data) {
                        if (data == 1) {
                            alert("Your OTP Has Been Expired!");
                            window.location = "../index.php";
                        }
                    }
                });

            }

            $(document).ready(function() {
                $("#otpSub").click(function() {
                    var otp = $("#otpTF").val();
                    if (otp == "" || otp == null || otp == " ") {
                        alert("Enter the OTP Properly");
                    } else {
                        $.ajax({
                            url: "verifyOTPDB.php?otp=" + otp,
                            type: "post",
                            success: function(result) {
                                if (result == 1) {
                                    window.location = "admission-form.php";
                                } else {
                                    alert("Enter the valid OTP");
                                }
                            }
                        });
                    }
                });
            });
        </script>
    </body>

    </html>
<?php
} else {
    header("Location:../index.php");
}
?>
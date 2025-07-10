<?php
session_start();
if (isset($_SESSION["registeration_no"])) {
?>

    <head>
        <title>Student Application:: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />


        <?php include 'links.php'; ?>
        <style>

        </style>
    </head>

    <body oncontextmenu="return false;">
        <!-- home -->
        <div id="home" class="inner-CSL-page">
            <div class="overlay-innerpage">
                <?php include 'menu.php'; ?>
            </div>
            <!-- //banner -->
        </div>
        <div class="container py-5">
            <div class="row ">
                <div class="col-md-12 custyle">
                    <h4 class=" text-primary text-center" style="font-size:20px;">Application Followup</h4>
                    <table class="table py5">
                        <tr>
                            <th>Application Date</th>
                            <th>Message</th>
                            <th>Member Name</th>
                        </tr>
                        <tbody id="getMails">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include '../CSL_footer.php'; ?>
        <!-- //footer -->
        <!-- copyright -->
        <div class="copy_right p-3 d-flex justify-content-around">

            <p>© 2016 CSL. All rights reserved
            </p>

        </div>
        <!-- //copyright -->
        <script>
            $(document).ready(function() {

                $.ajax({
                    url: "getApplicationStatusDB.php?mid=" + <?php echo $_GET['mid']; ?>,
                    type: "POST",
                    success: function(res) {

                        $("#getMails").html(res);
                    }

                });

            });
        </script>
    </body>
<?php
} else {
    header("Location:../login.php");
}
?>
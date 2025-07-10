<!DOCTYPE php>
<php lang="zxx">

    <head>
        <title>Success :: CSL</title>
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
            <div class="container py-md-2">
                <h3 class="tittle-CSL text-center">Enter Payment Details</h3>
                <div class="row py-5">
                    <div class="col-md-12">
                        <form action="successDB.php" method="post">
                            <div class="form-group">
                                <label for="usr">Registration No (If Any):</label>
                                <input type="text" class="form-control" name="sregNo" id="usr">
                            </div>
                            <div class="form-group">
                                <label for="usr">Full Name:</label>
                                <input type="text" class="form-control" name="sname" id="usr" required>
                            </div>
                            <div class="form-group">
                                <label for="father">Father's Name:</label>
                                <input type="text" class="form-control" name="fathername" id="father" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No: (Used In Payment)</label>
                                <input type="text" class="form-control" name="phone" id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No (Used For Payment):</label>
                                <select class="form-control" name="feeType" style="height:30px;">
                                    <option value="1">Installment Fee</option>
                                    <option value="2">Admission Fee</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tranction">Transaction Id:</label>
                                <input type="text" class="form-control" name="tranctionID" id="tranction" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //about -->

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
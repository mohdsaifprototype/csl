<!DOCTYPE php>
<php lang="zxx">

    <head>
        <title>Start :: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/CSL-coiurse.css">
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
    </head>

    <body>
        <!-- home -->
        <div id="home" class="inner-CSL-page">
            <div class="overlay-innerpage">
                <!-- banner -->
                <?php include '../navigation.php'; ?>
                <!-- //nav -->
            </div>
            <!-- //banner -->
        </div>

        <section class="about py-5">
            <div class="container py-md-5">
                <h3 class="tittle-CSL ">Provide Your Details:</h3>
                <form action="startDB.php" method="post">
                    <div class="row py-5">
                        <div class="col-lg-6 ">
                            <div class="form-group">
                                <label><b>Full Name <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <input type="textbox" class="form-control" id="validationDefault01" name="pledge_name" required>
                            </div>
                            <div class="form-group">
                                <label><b>Your Email <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <input type="Email" class="form-control" id="validationDefault02" name="pledge_email" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label><b>City <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <input type="textbox" class="form-control" id="validationDefault02" name="pledge_city" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label><b>Profession <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <select class="form-control" name="pledge_profession" required>
                                    <option>Select</option>
                                    <option>Student</option>
                                    <option>Employee</option>
                                    <option>Owner</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="form-group">
                                <label><b>Gender <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <select class="form-control" name="pledge_gender" required>
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><b>Mobile <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <input type="textbox" class="form-control" id="validationDefault02" name="pledge_phone" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label><b>State <sup><span style="color:red;font-size:20px;">*</span></sup></b></label>
                                <input type="textbox" class="form-control" id="validationDefault02" name="pledge_state" placeholder="" required>
                            </div>
                </form>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary btn-block">Let's Start The Pledge</button>
            </div>
            </div>
            </form>
            </div>
        </section>


        <!-- footer -->
        <?php include '../footer.php'; ?>
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

</php>
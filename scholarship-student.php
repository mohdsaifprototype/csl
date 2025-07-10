<!DOCTYPE php>
<php lang="zxx">

    <head>
        <title>Scholarship :: CSL</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="CSL" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <style>
        .container-fluid {
            width: 100%;
            margin: 0px;
            padding: 0px;
        }
    </style>

    <body>
        <!-- home -->
        <div id="home">
            <!-- banner -->
            <?php include 'navigation.php'; ?>


        </div>


        <section style="margin-top:-20px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/banner/scholarship-banner.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
        </section>
        <section class="about py-5">
            <div class="container py-md-5">
                <h3 class="tittle-CSL ">SCHOLARSHIP STUDENT</h3>
                <div class="row py-5">
                    <div class="col-lg-6 ">
                        <form action="scholarshipStudentDB.php" method="post">
                            <div class="form-group">
                                <label>Student Registration Code</label>
                                <input type="textbox" class="form-control" id="validationDefault01" name="scholarshipStudentRegTF" placeholder="Scholarship Student Registration Code" required="">
                            </div>
                            <span style="color:red;">
                                <?php
                                if (isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                }
                                ?>
                            </span><br>
                            <button type="submit" class="btn btn-success submit mb-4">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer -->
        <?php include 'footer.php'; ?>
        <!-- //footer -->
        <!-- copyright -->

        <!-- //copyright -->
    </body>

</php>
<!DOCTYPE php>
<php lang="zxx">

    <head>
        <title> Course :: CSL</title>
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
                <?php include '../menu.php'; ?>
                <!-- //nav -->

            </div>
            <!-- //banner -->
        </div>
        <!-- //home -->

        <!-- about -->
        <section class="container about py-5">
            <div class="about-CSLls-info">
                <p class="sub-tittle">
                <div class="tab">
                    <button class="tablinks" id="defaultOpen" onclick="openCourse(event, 'Overview')">Python</button>
                    <button class="tablinks" onclick="openCourse(event, 'Software')">Software Tie-up</button>
                </div>

                <!-- Tab content -->
                <div id="Overview" class="tabcontent ">
                    <h3>Overview</h3>
                    <p style="color:black;font-size: 16px;font-weight: bold;margin-top: 15px;margin-bottom: 5px;">Python</p>
                    <div class="container" style="margin-left: 40px;">
                        <div class="row">
                            <div class="col-8">
                                <ul>
                                    <li> 1 : Introduction Python & Features & History</li>
                                    <hr style="width: 100%;">
                                    <li> 2 : Python Install</li>
                                    <hr style="width: 100%;">
                                    <li> 3 : Python Applications</li>
                                    <hr style="width: 100%;">
                                    <li> 4 : Python Variable & Datatype & Keywords</li>
                                    <hr style="width: 100%;">
                                    <li> 5 : Python If-Else Statements</li>
                                    <hr style="width: 100%;">
                                    <li> 6 : Python Control Statements</li>
                                    <hr style="width: 100%;">
                                    <li> 7 : Python String</li>
                                    <hr style="width: 100%;">
                                    <li> 8 : Python Functions</li>
                                    <hr style="width: 100%;">
                                    <li> 9 : Python File Handling</li>
                                    <hr style="width: 100%;">
                                    <li> 10 : Python Modules</li>
                                    <hr style="width: 100%;">
                                    <li> 11 : Python Exceptions</li>
                                    <hr style="width: 100%;">
                                    <li> 12 : Python Read & Write CSV File</li>
                                    <hr style="width: 100%;">
                                    <li> 13 : Python OOPs Concepts</li>
                                    <hr style="width: 100%;">
                                    <li> 14 : Creating Series and Data Frames</li>
                                    <hr style="width: 100%;">
                                    <li> 15 : Data analysis with data set</li>
                                    <hr style="width: 100%;">


                                </ul>

                            </div>
                        </div>
                    </div>


                </div>


                <div id="Software" class="tabcontent">
                    <h3 style="margin-top: 10px; margin-bottom: 10px;">Software Tie-ups at CSL</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <img src="../images/tally.jpg" width="100%">
                            </div>
                            <div class="col-3">
                                <img src="../images/busy.jpg" width="100%">
                            </div>
                            <div class="col-3">
                                <img src="../images/excel.png" width="100%">
                            </div>
                        </div>
                    </div>
                    <hr width="100%">
                </div>
            </div>

        </section>
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

        <script>
            function openCourse(evt, courseName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");

                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the button that opened the tab
                document.getElementById(courseName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById('defaultOpen').click();
        </script>





    </body>

</php>
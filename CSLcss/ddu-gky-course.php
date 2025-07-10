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
                    <button class="tablinks" id="defaultOpen" onclick="openCourse(event, 'Overview')">DDU-GKY</button>
                    <button class="tablinks" onclick="openCourse(event, 'Software')">Software Tie-up</button>
                </div>

                <!-- Tab content -->
                <div id="Overview" class="tabcontent ">
                    <h3>Overview</h3>
                    <span>
                        The Ministry of Rural Development (MoRD) announced the Deen Dayal Upadhyaya Grameen Kaushalya Yojana (DDU-GKY) Antyodaya Diwas, on 25th September 2014. DDU-GKY is a part of the National Rural Livelihood Mission (NRLM), tasked with the dual objectives of adding diversity to the incomes of rural poor families and cater to the career aspirations of rural youth. The Yojana was launched on the occasion of the 98th birthday of Pandit Deen Dayal Upadhyay. Earlier the Yojana was known as Aajeevika Skills Development Program (ASDP).
                        It evolved out of the need to diversify incomes of the rural poor and to cater to the occupational aspirations of their youth. DDU-GKY aims to skill rural youth who are poor and provide them with jobs having regular monthly wages at or above the minimum wages. It is one of the clusters of initiatives of MoRD that seeks to promote rural livelihoods. It is a part of the Deen Dayal Antyodaya Yojana- National Rural Livelihoods Mission (DAY-NRLM) – the Mission for poverty reduction.
                        There is a continuum of skills that are required in an economy and there are various ways in which to acquire them. In India, while higher-level skills have received some attention, the same cannot be said for skills for which formal education is not a prerequisite. This means that the poor are doubly hit – first because of poverty and second because of poor access to formal education. DDU-GKY seeks to fill this gap by imparting the specific set of knowledge, skills and attitude needed by the poor to access full-time jobs with regular monthly wages.
                    </span><br><br>
                    <h3>Program Objectives: </h3>
                    <div class="container" style="margin-left: 40px;">
                        <div class='row'>
                            <div class='col-md-8'>
                                <ul>
                                    <li>
                                        The target groups for skilling are candidates in the age group 18 – 35 years from rural poor households.
                                    </li>
                                    <li>
                                        Training without any payment.
                                    </li>
                                    <li>
                                        Free accommodation and food.
                                    </li>
                                    <li>
                                        All candidates will be provided One pair of uniform in case of 3 months or 6 months course.
                                    </li>
                                    <li>
                                        A bank account will be opened by the PIA for all candidates in the first month of training.
                                    </li>
                                    <li>
                                        All candidates will receive training material free of cost including work books, note books and other study materials.
                                    </li>
                                    <li>
                                        Candidates who complete their training and get placed will receive post-placement support of:
                                    </li>
                                    <br>
                                    <span>
                                        1000 per month for 2 months for the Placements within District of domicile<br>
                                        1000 per month for 3 months for the Placements within State of domicile<br>
                                        1000 per month for 6 months for the Placements outside State of domicile

                                    </span>
                                    <br>
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
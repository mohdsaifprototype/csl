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
                    <button class="tablinks" id="defaultOpen" onclick="openCourse(event, 'Overview')">CBS</button>
                    <button class="tablinks" onclick="openCourse(event, 'Software')">Software Tie-up</button>
                </div>

                <!-- Tab content -->
                <div id="Overview" class="tabcontent ">
                    <h3>Overview</h3>
                    <span>
                        The focus of the program is to craft proficient entry-level professionals who are proficient
                        in the banking and finance domain, along with sales and customer relationship management
                        skills. The program creates much sought-after, industry-ready professionals for the Banking &
                        Finance sector. The program is offered with 100% placement assistance with partner organizations who are some of the leaders in the Banking & Finance sector.
                    </span><br><br>
                    <h3>
                        Highlights:
                    </h3>
                    <div class="container" style="margin-left: 40px;">
                        <div class='row'>
                            <div class='col-md-8'>
                                <ul>
                                    <li>
                                        Broad holistic understanding of the Banking & Finance industry
                                    </li>
                                    <li>
                                        Detailed knowledge about various banking products and services
                                    </li>
                                    <li>
                                        Master the skills and techniques for selling banking and financial products
                                    </li>
                                    <li>
                                        Tally ERP.9 software latest modules: TDS (Tax Deducted at Source) and GST (Goods and Services Tax)
                                    </li>
                                    <li>
                                        Analysis of the investment needs of customers and customize their portfolios
                                    </li>
                                    <li>
                                        Tools and Techniques of Financial Analysis using Excel
                                    </li>
                                    <li>
                                        How to manage customer relationships
                                    </li>
                                    <li>
                                        Retail banking operations including hands-on experience in Finacle
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p style="color:black;font-size: 16px;font-weight: bold;margin-top: 15px;margin-bottom: 5px;">Trimester - 1 </p>
                    <div class="container" style="margin-left: 40px;">
                        <div class="row">
                            <div class="col-8">
                                <ul>
                                    <li>Module - 1 : Overview of Banking and Finance</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 2 : Banking Products & Services</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 3 : Persuasion & Negotiation Techniques</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 4 : Working with Tally.ERP9 -Level 1</li>
                                    <hr style="width: 100%;">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p style="color:black;font-size: 16px;font-weight: bold;margin-top: 15px;margin-bottom: 5px;">Trimester - 2 </p>
                    <div class="container" style="margin-left: 40px;">
                        <div class="row">
                            <div class="col-8">
                                <ul>
                                    <li>Module - 5 : Financial Planning & Wealth Management</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 6 : Financial Analysis using Excel</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 7 : Customer Relationships</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 8 : Working with Tally.ERP9 -Level 2</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 9 : Overview of Fintech</li>
                                    <hr style="width: 100%;">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p style="color:black;font-size: 16px;font-weight: bold;margin-top: 15px;margin-bottom: 5px;">Trimester - 3 </p>

                    <div class="container" style="margin-left: 40px;">
                        <div class="row">
                            <div class="col-8">
                                <ul>
                                    <li>Module - 10 : Retail Branch Operations</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 11 : SMAC (Social Media, Mobile, Analytics, Cloud) in Banking & Finance</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 12 : Managing Sales Pipeline & Sales Team</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 13 : Professional Skills Training</li>
                                    <hr style="width: 100%;">
                                    <li>Module - 14 : Making Effective Presentation </li>
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

    </html>
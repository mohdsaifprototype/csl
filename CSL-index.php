<head>
    <title>Home :: CSL</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CSL" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $("#myModal").modal('show');
            }, 3000);

        });
    </script>
    <?php include 'links.php'; ?>
    <style>
        .image-pop {
            position: relative;
        }

        .large {
            position: absolute;
            left: -9999px;
        }

        .image-pop:hover .large {
            left: 50px;
            top: 100px;
            z-index: 9999;
            width: 300px;
        }

        .large-image {
            border-radius: 4px;
            box-shadow: 1px 1px 3px 3px rgba(127, 127, 127, 0.15);

            z-index: 9999;
        }

        .col-center {
            margin: 0 auto;
            float: none !important;
        }

        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel .item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 290px;
        }

        .carousel .item .img-box {
            width: 120px;
            height: 120px;
            margin: 0 auto;
            padding: 5px;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 30px 0 10px;
        }

        .carousel .overview {
            font-style: italic;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: #7AA641;
        }

        .carousel .carousel-control {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            top: 50%;
            background: none;
        }

        .carousel-control i {
            font-size: 68px;
            line-height: 42px;
            position: absolute;
            display: inline-block;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
        }

        .carousel .carousel-indicators {
            bottom: -40px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 1px 3px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #999;
            border-color: transparent;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        .carousel-indicators li.active {
            background: #555;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        .notice {
            width: 100%;
            height: 25px;
            background-color: pink;
            position: fixed;
            z-index: 99999;
            top: 0;
            padding-top: 3px;
        }

        #Enquire {
            background-image: url("images/banner/enquire.jpg");
            height: 100%;
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;

        }

        #Admission {
            background-image: url("images/banner/admission-banner.jpg");
            position: relative;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
        }

        #Demo {
            background-image: url("images/banner/demo.jpg");
            height: 100%;
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
        }
    </style>
</head>

<body>
    <!-- home -->
    <div id="home">
        <!-- banner -->
        <?php include 'navigation.php'; ?>
        <!-- //nav -->
        <!-- banner slider -->
        <div id="homepage-slider" class="st-slider">
            <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
            <div class="images">
                <div class="images-inner">
                    <div class="image-slide">
                        <div class="banner-CSL-1">
                            <div class="overlay-CSL"></div>

                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-CSL-2">
                            <div class="overlay-CSL"></div>
                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-CSL-3">
                            <div class="overlay-CSL"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="labels">
                <div class="fake-radio">
                    <label for="slide1" class="radio-btn"></label>
                    <label for="slide2" class="radio-btn"></label>
                    <label for="slide3" class="radio-btn"></label>
                </div>
            </div>
            <div class="banner-CSLls-info">
                <div class="content-bg-1 two-bg">
                    <a href="#Demo" title="">
                        <button class="button-link" title="" style="--content: 'Demo!';">
                            <div class="left"></div>
                            Book Demo
                            <div class="right"></div>
                        </button>
                    </a>
                    <a href="#Admission" title="">
                        <button class="button-link" title="" style="--content: 'Admission!';">
                            <div class="left"></div>
                            Admission
                            <div class="right"></div>
                        </button>
                    </a>
                    <a href="#Enquire" title="">
                        <button class="button-link" title="" style="--content: 'Counselling!';">
                            <div class="left"></div>
                            Counselling
                            <div class="right"></div>
                        </button>
                    </a>
                    <a href="#Enquire" title="">
                        <button class="button-link" title="" style="--content: 'Enquiry!';">
                            <div class="left"></div>
                            Enquiry
                            <div class="right"></div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="banner-CSLls-info">
                <div class="content-bg-1 one-bg">

                </div>
            </div>
            <!-- //banner-CSLls-info -->
        </div>
        <!-- //banner slider -->
    </div>
    <!-- //banner -->

    <!-- //home -->
    <section class="tagline" style="background-color:black;height:50px;padding:6px;font-size:25px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <marquee style="color:white;" class="">"committed to excellence in education since 2016"</marquee>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tittle-CSL text-center">Our Affiliates</h3>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images/logo/4mca.jpg" width="100%">
                        <span class="large">
                            <img src="images/organization/mca.png" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images/logo/6msme.jpg" width="100%">
                        <span class="large">
                            <img src="images/organization/msme.png" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images/logo/3jnu.jpg" width="100%">
                        <span class="large">
                            <img src="images/organization/jnu.jpeg" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-pop">
                        <img src="images/logo/2iso.jpg" width="100%">
                        <span class="large">
                            <img src="images/organization/iso.png" width="100%" class="large-image" alt="adventure">
                        </span>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-3">
                    <img src="images/logo/7nielit.jpg" width="100%">
                </div>
                <div class="col-md-3">
                    <img src="images/logo/9pmkvy.jpg" width="100%">
                </div>
                <div class="col-md-3">
                    <img src="images/logo/5microsoft.jpg" width="100%">
                </div>
                <div class="col-md-3">
                    <img src="images/logo/1autodesk.jpg" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- /features -->
    <div class="welcome py-5" id="features">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-4 welcome-left">

                    <h2 class="tittle-CSL mt-2 mb-3">We Rank the Best Courses in India</h2>
                    <p class="mt-4 pr-lg-5" style="font-size: 14px; color: black;text-align: justify;">
                        We are offer all IT (Professional Courses), CCC, O Level, A Level, Web Designing & Development, Multimedia
                        , Accountancy, Financial Management, Certification Courses and other related courses
                        with minimum requirement's.
                    </p>
                </div>
                <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-sm-4 service-1-CSLls serve-gd2">
                            <a href="CSL-skills-course/c-cpp-ds-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-language s2"></span>
                                    <p class="mt-2">Languages</p>
                                </div>
                            </a>
                            <a href="CSL-skills-course/a-level-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-tachometer s3"></span>
                                    <p class="mt-2">Software </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 service-1-CSLls serve-gd3">
                            <a href="CSL-skills-course/hardware-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-handshake-o s4"></span>
                                    <p class="mt-2">Hardware</p>
                                </div>
                            </a>
                            <div class="serve-grid mt-4" style="background-color: ">
                                <span class="fa fa-address-card-o s5"></span>
                                <a href="#Admission">
                                    <p class="text-li mt-2" style="color: red">Admission Open <br> <?php echo date("Y"); ?></p>
                                </a>
                            </div>
                            <a href="CSL-skills-course/it-expert-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-paint-brush s6"></span>
                                    <p class="mt-2">Design </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 service-1-CSLls serve-gd2">
                            <a href="CSL-skills-course/web-designing-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-podcast s1"></span>
                                    <p class="mt-2">Development </p>
                                </div>
                            </a>
                            <a href="CSL-skills-course/corprate-eaccount-course.php">
                                <div class="serve-grid mt-4">
                                    <span class="fa fa-book s7"></span>
                                    <p class="mt-2">Accountancy</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //features -->
    <div class="container py-5">
        <div class="row">
            <div class="col text-center">
                <h3 class="tittle-CSL text-center">Success Story Of CSL</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col text-center">
                <img src="images/logo/award.jpg" height="200px">
                <p style="color:black;font-size:25px;">MOST TRUSTED EDUCATION BRAND IN INDIA</p>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="counter">
                    <img src="images/clients/branch.png" class="fa-2x" width="100px" height="80px">
                    <h2 class="timer count-title count-number" data-to="14" data-speed="10000"></h2>
                    <p class="count-text ">Branches Over India</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter">
                    <img src="images/clients/placement.png" class="fa-2x" width="100px" height="80px">
                    <h2 class="timer count-title count-number" data-to="6000" data-speed="10000"></h2>
                    <p class="count-text ">Students Placed</p>
                </div>
            </div>
            <br><br>
            <div class="col-md-3">
                <div class="counter">
                    <img src="images/clients/traning-session.png" class="fa-2x" width="100px" height="80px">
                    <h2 class="timer count-title count-number" data-to="7000" data-speed="10000"></h2>
                    <p class="count-text ">Students Trained</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter">
                    <img src="images/clients/traning-session-completed.png" class="fa-2x" width="100px" height="80px">
                    <h2 class="timer count-title count-number" data-to="1000" data-speed="10000"></h2>
                    <p class="count-text ">Job Training Session</p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <div class="counter">
                    <img src="images/clients/happy-clients.jpg" class="fa-2x" width="100px" height="80px">
                    <h2 class="timer count-title count-number" data-to="1100" data-speed="10000"></h2>
                    <p class="count-text ">Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Courses -->
    <section class="courses text-center py-5" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tittle-CSL text-center">Best Computer Courses CSL</h3>
                </div>
            </div>
            <div class="row ser-sec-1">
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img" style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/core-java.png" width="100px">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">

                        <h5> Core Java</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;word-spacing:-3px;">
                            IT professionals aspiring to become developers in the Java space need to be equipped with skills to develop Web,
                            distributed, or cloud-based applications using Java technology.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img" style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/php.png" width="100px" height="120px">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>PHP</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            We know the value of experience & salary in job. That’s why in our PHP course, we bring you in a live
                            environment where you get chance to work on projects & On Job Training as per your skill sets.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img " style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/python.png" width="100px" height="120px">
                    </div>
                    <!-- .Icon ends here -->
                    <div class="service-content">
                        <h5>Python</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;word-spacing:-3px;">
                            The methodology of this course mirrors Project development in real-world situations and follows the Agile –Scrum framework as used in IT organizations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ser-sec-1">
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img " style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/ccc.png" width="100px" height="120px">
                    </div>
                    <!-- .Icon ends here -->
                    <div class="service-content">
                        <h5>CCC</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;word-spacing:-3px;">
                            This course is specially designed for common people to get a basic level IT literacy program.
                            CCC is a Government Certificate Course program designed to give basic computer knowledge to the people.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img " style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/accountancy.png" width="100px">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>GST</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;word-spacing:-3px;">
                            The course is targeted towards college students, graduates in commerce and working professionals who are either
                            looking to gain industry relevant skills and knowledge in the fields of GST or enhance their current expertise
                            to become a valuable asset for their companies.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-course">
                    <div class="icon-course-img" style="width:50%;text-align:center;margin:0 auto;">
                        <img src="images/courses/android.png" width="100px">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Android</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            We provide you a Android training certification of our CSL Institute
                            after your successful completion of the course, and also help you to prepare for authorized certifications.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- // Courses -->

    <!-- // Courses -->

    <!-- services -->
    <section class="services text-center py-5" id="services">
        <div class="container py-md-2">
            <h3 class="tittle-CSL text-center">Real Facts for CSL</h3>
            <p></p>
            <div class="row ser-sec-1">
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/smart-classes.png" class="s1" width="100%" height="100%">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5> Smart Classes</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            CSL impart excellent teaching methodology and provide Smart Classroom for teaching and learning by integrating Learning Technology, such as Computers, Specialized Software, Audience Response Technology,
                            Assistive Listening Devices, Networking & Audio-Visual capabilities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/expert-teacher's.png" class="s2" width="100%" height="100%">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Expert Teacher's</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            The Team of Faculty or Trainer of CSL have highly experience in teaching in
                            renowned Industry & Institution. Our Teaching Team focus on Excellent Communication Skills, offering Rich Training Technique, Possesses Industry Knowledge,
                            Passionate About Learning, High Level of Professionalism.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/job-oriented-courses.png" class="s3" width="100%" height="100%">
                    </div>
                    <!-- .Icon ends here -->
                    <div class="service-content">
                        <h5>Job Oriented Courses</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            CSL is expert in Accounting & Finance, IT Expert, Software Programming Courses,
                            Doeacc Certification, Graphics & Web Designing, Digital Marketing, Hardware & Mobile Repairing Courses. All of the modules under these Course are job
                            oriented and 100% placement Assurance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ser-sec-1">
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/lifetime-membership.png" class="s4" width="100%" height="100%">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Lifetime Membership</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            CSL Asssistance to our Students after Successfully completion of their Courses have made unusual
                            contributions to the association CSL Community. Our Students are kept relationship with their institution to access different
                            works and activities related to placement, Re-registration for another courese, Proper Guideance.

                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/100-placement.png" class="s5" width="100%" height="100%">
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>100% Placement</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            are basically extended internships or work experience assignments.
                            CSL Has strong placement cells. Our Placement Team are in contact with
                            renowned & reputed Industry to place students in different organisation. Our Goal to provide preparation to Students
                            for Prepare Resume, Group Discussion, Interview, Technical & HR Round etc.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-CSL-gd-CSL">
                    <div class="icon">
                        <img src="images/facts/small-size-of-batch.png" class="s6" width="100%" height="100%">
                    </div>
                    <!-- .Icon ends here -->
                    <div class="service-content">
                        <h5>Small Size Of Batch</h5>
                        <p class="serp " style="text-align: justify;text-justify: distribute;text-align-last: left;">
                            The Strength of the batches should be standard. CSL works
                            on standard Stduent Teacher Ratio. The main goal of CSL to keep the batch size should be optimal.
                            We don't gather a lots of students in a single batches. On the basis of Student Skills & Understanding
                            capacity we decide to put them in proper batches.
                            In need of time we focus of small batches also.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //services -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tittle-CSL text-center">Our Organizations</h3>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-4" style="padding:5px;">
                    <a href="http://CSLskills.com/index.php"> <img src="images/organization/CSLskill.png" width="100%"></a>
                </div>
                <div class="col-md-4" style="padding:5px;">
                    <img src="images/organization/gsd-solution.png" width="100%">
                </div>
                <div class="col-md-4" style="padding:5px;">
                    <a href="" target="_new"><img src="images/organization/indiasbestjobs.png" width="100%"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="padding:5px;">
                    <a href="https://www.myfirstboss.com/" target="_new"><img src="images/organization/my-first-boss.png" width="100%"></a>
                </div>
                <div class="col-md-4" style="padding:5px;">
                    <img src="images/organization/sel.png" width="100%">
                </div>
                <div class="col-md-4" style="padding:5px;">
                    <img src="images/organization/world-of-knowlege.png" width="100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4" style="padding:10px;">
                    <a href="https://kdfskills.com/index" target="_new"> <img src="images/organization/kdfskill.png" width="100%"></a>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
    <!-- /apply-->
    <section class="bg-header py-5" id="Enquire">
        <div class="container ">
            <div class="row">
                <div class="col-md-5">

                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 login p-md-5 p-4 mx-auto mw-100" style="background-color:rgb(87,159,210,0.5);">
                    <h5 class="text-center mb-4" style="color:white;">Enquire Now</h5>
                    <form action="webEnquiryDB.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="webName" id="" placeholder="FullName" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="webPhone" id="" maxlength="10" minlength="10" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <input type="Email" class="form-control" name="webEmail" id="" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="webCourse" id="" placeholder="Course" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" placeholder="Message" rows="3" id="comment" required></textarea>
                        </div>
                        <button type="submit" class="btn bg-header btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="Admission">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">

                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 login p-md-5 p-4 mx-auto mw-100" style="background-color:rgb(255,105,180,0.5);">
                    <!-- <h3 class="tittle-CSL apply-hd text-white mb-lg-5 mb-3">It’s limited seating! Hurry up.</h3> -->
                    <h5 class="text-center mb-4" style="color:white;">Admission Form</h5>
                    <form action="admission/onlineAdmissionDB.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="admName" id="" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admFather" id="" placeholder="Father's Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admPhone" maxlength="10" minlength="10" id="" placeholder="Mobile" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="admEmail" id="" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn bg-header btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="Demo">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 login p-md-5 p-4 mx-auto mw-100" style="background-color:rgb(155,105,180,0.5);">
                    <!-- <h3 class="tittle-CSL apply-hd text-white mb-lg-5 mb-3">It’s limited seating! Hurry up.</h3> -->
                    <h5 class="text-center mb-4" style="color:white;">Book Demo</h5>
                    <form action="bookDemoDB.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="admName" id="" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admFather" id="" placeholder="Father's Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admCourse" id="" placeholder="Course" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admPhone" maxlength="10" minlength="10" id="" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="admLocation" placeholder="Location" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="admTime">
                                <option> 10:00 - 10:30 AM </option>
                                <option> 2:00 - 2:30 PM </option>
                                <option> 3:30 - 4:00 PM </option>
                                <option> 5:30 - 6:00 PM </option>
                            </select>
                        </div>
                        <input type="hidden" class="form-control" name="admMsg" placeholder="Location" value="">
                        <button type="submit" class="btn bg-header btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //apply -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="tittle-CSL text-center">Events at CSL </h3>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100" style="margin-top:-30px;">
                            <div class="carousel-item col-md-12 active">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/1.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: Himanshu Vajpayee </h4>
                                        <p class="card-text">
                                            10:00 am to 3:00 pm
                                            Workshop on web development
                                            At Dilshad Garden Branch
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">27th July 2017 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/2.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: CA Rajesh Goyal, CA Sarvesh Jain </h4>
                                        <p class="card-text">
                                            11:00 am to 4:30 pm
                                            Workshop on GST Law
                                            At Birla auditorium, Jaipur

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">1 AuGuest 2017</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/3.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: Companies</h4>
                                        <p class="card-text">
                                            11:00 am to 5:00 pm
                                            Campus Interview
                                            At Pitam Pura Branch (Delhi students Only)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">15 December 2017 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/4.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">At all branches </h4>
                                        <p class="card-text">
                                            8:00 am to 7:30 pm
                                            Excel Master (competition between All center students)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">2 January 2018 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/5.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: CA Amit Jain</h4>
                                        <p class="card-text">
                                            11:00 am to 2:00 pm
                                            Workshop on ITR’s & taxation
                                            At all branches (Live)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">15 March 2018 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/6.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: Sagar Chaturvedi </h4>
                                        <p class="card-text">
                                            11:00 am to 4:00 pm
                                            Workshop on Dot Net
                                            At all branches (live)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">20 November 2018 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/7.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: Pankaj Maheshwari </h4>
                                        <p class="card-text">
                                            7:00 am to 5:00 pm
                                            Workshop on soft skills at the work place
                                            (interview preparation)
                                            At all branches (live)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">20 January 2019 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/8.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">At all branches (live)</h4>
                                        <p class="card-text">
                                            10:00 am to 12:00 pm
                                            Professional competency Test

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">6 June 2019</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/9.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: CA Rajesh Goyal, Mayank Aggarwal, Rohit Vashishth,
                                            Vishal Jain, Naresh Kumar </h4>
                                        <p class="card-text">
                                            11:00 am to 5:00 pm
                                            Seminar on global business & opportunity for us
                                            At branches (live)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">10 October 2019 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="images/event/10.jpg" alt="Card image" height="200px">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:16px;font-weight:bold;">Guest: Bhasker Chaturvedi </h4>
                                        <p class="card-text">
                                            08:00 am to 10:30 am
                                            Workshop on Hardware & Networking
                                            At branches (live)

                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">20 April 2020 </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="tittle-CSL text-center">Follow Us</h3>
                    <div class="about-CSLls-info py-3">
                        <div class="tab">
                            <button class="tablinks" id="defaultOpen" onclick="openLink(event, 'Facebook')">Facebook</button>
                            <button class="tablinks" onclick="openLink(event, 'Twitter')">Twitter</button>
                        </div>
                        <!-- Tab content -->
                        <div id="Facebook" class="tabcontent ">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCSLskills%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="340" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                        <div id="Twitter" class="tabcontent">
                            <a class="twitter-timeline" href="https://twitter.com/CSLskill?ref_src=twsrc%5Etfw" height="340">Tweets by CSLskill</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="py-3">
        <div class="container">
            <h3 class="tittle-CSL text-center">Knowledge Center </h3>
            <div class="row py-3">
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/blog/account.png" alt="blog" width="100%" height="100%">
                            </div>
                            <div class="flip-card-back">
                                <h1>Accounting Vs Finance</h1>
                                <p>Finance and Accounting are the resting functions of a business venture that actively participate in preserving and allocating revenues. </p>
                            </div>
                        </div>
                        <a href="http://CSLskills.com/knowledge-center.php"><button class="btn btn-dark btn-block">More</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/blog/ideal-candidate.jpg" alt="blog" width="100%" height="100%">
                            </div>
                            <div class="flip-card-back">
                                <h1>Ideal Candidate </h1>
                                <p>Living in an age where terms like Globalization and Digitization are thrown around with much fervor...</p>
                            </div>
                        </div>
                        <a href="http://CSLskills.com/knowledge-center.php"><button class="btn btn-dark btn-block">More</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/blog/questions-in-interviews.jpg" alt="blog" width="100%" height="100%">
                            </div>
                            <div class="flip-card-back">
                                <h1>Questions in Interviews</h1>
                                <p>Soft-skills such as the ones that are more emotional and affected by the way you generally think can be learned and developed rather easily.</p>
                            </div>
                        </div>
                        <a href="http://CSLskills.com/knowledge-center.php"><button class="btn btn-dark btn-block">More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonials -->
    <section class="testimonials py-5" id="test">
        <div class="container">
            <h3 class="tittle-CSL text-center">Student's Testimonials</h3>
            <div class="row">
                <div class="col-md-10 col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- 
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				-->
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box">
                                    <img src="images/testimonial/vaishali.jpg" alt=" " width="100%" class="img-fluid" width="100%" />
                                </div>
                                <p class="testimonial">
                                    Before I joined The CSL Institute, I had a fear for Public Speaking. Afer the
                                    course, I am confident of speaking English in Public. My stage fear has decreased
                                    considerably.
                                </p>
                                <p class="overview"><b>Vaishali </b></p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box">
                                    <img src="images/testimonial/rupanshu.jpg" alt=" " width="100%" class="img-fluid" />
                                </div>
                                <p class="testimonial">
                                    I started my journey with CSL Computer Institute few month back.
                                    I am very happy and confident and about the skills I've acquired so far.
                                    I am very thankful to the faculty for all the support and encouragement.
                                </p>
                                <p class="overview"><b>Rupanshu Goel</b></p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box">
                                    <img src="images/testimonial/sagar.jpg" alt=" " width="100%" class="img-fluid" />
                                </div>
                                <p class="testimonial">
                                    I was making many mistakes in Web Development. Also, I wanted to develop my
                                    Professional Web Development Skills. I completed best Web Develpment Course
                                    and I am able tl Devleop Website without any Doubts & Mistakes.
                                </p>
                                <p class="overview"><b>Sagar </b></p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box">
                                    <img src="images/testimonial/mafhooz.jpg" alt=" " width="100%" class="img-fluid" />
                                </div>
                                <p class="testimonial">
                                    What i liked about the Digital Marketing course is that it is completely
                                    practical with a friendly atmosphere and personal attention. In addition to SEO
                                    Free Tools & Free Intership Training it helps to develop an overall Online Marketing Strategy.
                                </p>
                                <p class="overview"><b>Mahfooz Alam </b></p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box">
                                    <img src="images/testimonial/arjun.jpg" alt=" " width="100%" class="img-fluid" />
                                </div>
                                <p class="testimonial">
                                    If you want to join the best Tally Learning Institute then join The CSL
                                    Institute in Uttam Nagar Delhi. Here you get quality training,
                                    individual attention, small batches, supportive and positive atmosphere and much more.
                                </p>
                                <p class="overview"><b>Arjun Prasad</b></p>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //testimonials -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myModal" class="modal fade" style="top:20px;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-header">
                                <h4 class="modal-title text-center">Notice Board</h4>
                                <button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 border border-top-0 border-left-0 border-right-0 ">
                                        <h4 class="py-2">Student Help Desk</h4>
                                        <p style="margin-bottom:2px;"><b>Email:</b> mail@CSLskills.com</p>
                                        <p style="margin-bottom:2px;"><b>Call:</b> <span style="font-family:arial;"> +91 8527567772</span></p>
                                        <p><b>Whatsapp:</b><span style="font-family:arial;"> +91 9717750164</span></p>
                                    </div>
                                </div>
                                <h5 class="mt-2 text-primary">Updates: </h5>
                                <p class="text-danger" style="font-size:13px"><b>1. Diploma Result Declaration will be soon. </p>
                                <p class="text-danger" style="font-size:13px"><b>2. Institute will be closed until 30-Apr-2021 due to corona virus. For updates Call: <font face="arial"><a href="#">+91 8527567772</a></b></p>
                                <p class="text-danger" style="font-size:13px"><b>3. Online class start. See your schedule at schedule option and also find your Student Id and Password. For updates Call: <font face="arial"><a href="#">+91 8527567772</a></b></p>
                                <p class="text-danger" style="font-size:13px"><b>4. Online counselling going on if you have any enquiry regarding any course.<a href="#Enquiry"> Online Enquiry</a></b></p>
                                <p class="text-danger" style="font-size:13px"><b>5. If you are facing any problem related to online class call or whatsaap <font face="arial"><a href="#">+91 9717750164</a></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- //footer -->
    <!-- copyright -->
    <!--<div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 CSL. All rights reserved 
        </p>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ee0ec429e5f694422904d3e/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- //copyright -->
    <script>
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <script>
        function openLink(evt, courseName) {
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
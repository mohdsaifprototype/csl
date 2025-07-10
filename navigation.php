<html>

<head>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<style>
		/*********************/
		.navbar-nav>li>a {
			padding-top: 0;
			padding-bottom: 0;
		}

		.mainmenu {
			background-color: transparent;
			border-color: transparent;
			margin-bottom: 0;
			border: 0px !important;
		}

		.navbar-nav>li:last-child>a {
			padding-right: 0px;
			margin-right: 0px;
		}

		.dropdown-menu {
			padding: 0px 0;
			margin: 0 0 0;
			border: 1px solid gray;
			border-radius: 0px;
			box-shadow: 1px 1px 1px gray;
		}

		.collapse navbar-collapse {
			padding-left: 50px;

		}

		/*=-====Main Menu=====*/
		.navbar-nav .open .dropdown-menu>li>a {
			padding: 16px 15px 16px 25px;
		}

		.header_bottom {
			background: #ff42a4;
		}

		.header_area .header_bottom .mainmenu a,
		.navbar-default .navbar-nav>li>a {
			color: #fff;
			font-size: 12px;
			text-transform: capitalize;
			padding: 16px 4px;
			font-weight: bold;

		}

		.header_area .mainmenu .active a,
		.header_area .mainmenu .active a:focus,
		.header_area .mainmenu .active a:hover,
		.header_area .mainmenu li a:hover,
		.header_area .mainmenu li a:focus,
		.navbar-default .navbar-nav>.open>a,
		.navbar-default .navbar-nav>.open>a:focus,
		.navbar-default .navbar-nav>.open>a:hover {
			color: white;
			background: #ff42a4;
			outline: 0;
		}

		/*-----./ Main Menu-----*/

		.navbar-default .navbar-toggle {
			border-color: #fff
		}

		/*Toggle Button*/
		.navbar-default .navbar-toggle .icon-bar {
			background-color: #fff
		}

		/*Toggle Button*/

		/*==========Sub Menu=v==========*/
		.mainmenu .collapse ul>li:hover>a {
			background: #ff42a4;
		}

		.mainmenu .collapse ul ul>li:hover>a,
		.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
		.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
			background: #ff42a4;
		}

		.mainmenu .collapse ul ul ul>li:hover>a {
			background: #ff42a4;
		}

		.mainmenu .collapse ul ul,
		.mainmenu .collapse ul ul.dropdown-menu {
			background: white;
		}

		.mainmenu .collapse ul ul ul,
		.mainmenu .collapse ul ul ul.dropdown-menu {
			background: white;
		}


		.mainmenu .collapse ul ul.dropdown-menu a {
			background: white;
			color: black;
			padding: 6px;
		}

		.mainmenu .collapse ul ul.dropdown-menu a:hover {
			background: ff42a4;
			color: white;
		}

		.mainmenu .collapse ul ul.dropdown-menu {
			box-shadow: 2px 2px 5px #aaaaaa;
			border: 1 px solid black;

		}

		/******************************Drop-down menu work on hover**********************************/
		.mainmenu {
			background: none;
			border: 0 solid;
			margin: 0;
			padding: 0;
			min-height: 20px
		}

		@media only screen and (min-width: 768px) {
			.mainmenu .collapse ul li {
				position: relative;
			}

			.mainmenu .collapse ul li:hover>ul {
				display: block
			}

			.mainmenu .collapse ul ul {
				position: absolute;
				top: 100%;
				left: 0;
				min-width: 250px;
				display: none
			}

			/*******/
			.mainmenu .collapse ul ul li {
				position: relative
			}

			.mainmenu .collapse ul ul li:hover>ul {
				display: block
			}

			.mainmenu .collapse ul ul ul {
				position: absolute;
				top: 0;
				left: 100%;
				min-width: 250px;
				display: none
			}

			/*******/
			.mainmenu .collapse ul ul ul li {
				position: relative
			}

			.mainmenu .collapse ul ul ul li:hover ul {
				display: block
			}

			.mainmenu .collapse ul ul ul ul {
				position: absolute;
				top: 0;
				left: 100%;
				min-width: 250px;
				display: none;
				z-index: 1
			}


		}

		@media only screen and (max-width: 480px) {

			.navbar-header .navbar-toggle {
				margin-top: 7px;
			}

			.logo .navbar-brand img {
				width: 100px;
				height: 40px;
				margin-top: -2px;
				margin-left: 10px;
			}

			#wrap>div {



				display: flex;


				justify-content: center;

				align-items: center;

				flex-wrap: wrap;
			}

			#wrap>div {

				width: 450px;

				margin: 0px;
			}

			#wrap>div#right {

				width: 550px;

				margin: 0px;
				padding-left: 130px;
			}

		}


		@media only screen and (max-width: 767px) {
			.navbar-toggle {
				margin-top: -15px;
			}

			.logo .navbar-brand img {
				width: 100px;
				height: 40px;
				margin-top: -2px;
				margin-left: 10px;
			}

			#wrap #right {
				color: white;
				margin-left: auto;
				margin-top: -7px;
			}


			#wrap #left {
				color: white;
				margin-left: auto;
				text-align: center;
			}

			#wrap {
				background-color: black;
				display: block;
			}
		}

		@media only screen and (max-width: 1024px) {

			.header_area .header_bottom .mainmenu a,
			.navbar-default .navbar-nav>li>a {
				font-size: 9px;
				padding: 8px 3px;
			}

			.navbar-toggle {
				margin-top: -15px;
			}

			.logo .navbar-brand img {
				width: 100px;
				height: 40px;
				margin-top: -2px;
				margin-left: -25px;
			}


			#wrap #right {
				float: right;
				margin-right: 84px;
				margin-top: -46px;

			}


			#wrap #left {}

			#wrap {
				display: inline-block;

			}



		}

		@media only screen and (max-width: 1200px) {

			.header_area .header_bottom .mainmenu a,
			.navbar-default .navbar-nav>li>a {
				font-size: 10px;
				padding: 8px 3px;
				margin-left: 2px;
			}

			.navbar-toggle {
				margin-top: -15px;
			}

			.logo .navbar-brand img {
				width: 100px;
				height: 40px;
				margin-top: -2px;
				margin-left: 3px;
			}

			#wrap #right {
				color: white;
				display: inline-block;
				margin-left: 300px;
			}


			#wrap #left {
				color: white;

				display: inline-block;

			}

			#wrap {
				background-color: black;

			}

		}



		/*********************/

		#right {
			color: white;
			display: inline-block;
			padding-left: 2%;
			padding-top: 1%;
			padding-bottom: 1%;
			margin-left: 430px;
		}

		#right a:hover {
			color: #ff42a4;
		}

		#left {
			color: white;
			display: inline-block;
			padding-left: 2%;
			margin-left: 30px;
			padding-top: 1%;
			padding-bottom: 1%;
		}

		#left a:hover {
			color: #ff42a4;
		}

		#wrap {
			background-color: black;
			width: 100%;

		}

		#wrap a {
			padding-left: 10px;
			text-decoration: none;
			color: white;
		}

		.blink_me {
			animation: blinker 1s linear infinite;
		}

		@keyframes blinker {
			50% {
				opacity: 0;
			}
		}

		.logo img {
			width: 90px;
			height: 45px;
			margin-left: -90px;
			margin-top: -12px;
		}

		.header_area {
			width: 100%;
		}
	</style>
</head>

<body>
	<!-------------------------------->
	<div id="wrap">
		<div id="left" class="block1">
			<a href="https://www.facebook.com/CSLskills" target="_new" class="button-footr">
				<i class="fa fa-phone" style="font-size:18px">&nbsp;&nbsp;+91 98 917 686 67</i>
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://web.whatsapp.com/" target="_new" class="button-footr">
				<i class="fa fa-whatsapp" style="font-size:18px">&nbsp; +91 97 177 501 64</i>
			</a>
		</div>
		<div id="right" class="block2">
			<a href='knowledge-center.php' style="font-size:18px">Knowledge-Center</a>
			<a href='fee-pay.php' style="font-size:18px">UPI</a>
			<a href='https://www.payumoney.com/paybypayumoney/#/DCB1C91FE1210303514E96113BBD4EE1' style="font-size:18px">Pay Now<sup class="blink_me">New</sup></a>
			<a href="login.php" style="font-size:18px">Login</a>
		</div>
	</div>


	<div id="header-area" class="header_area">
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<nav role="navigation" class="navbar navbar-default mainmenu">

						<div class="logo">
							<a class="navbar-brand" href="index.php">
								<img src="images/logo/logo.png">
							</a>
						</div>
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collection of nav links and other content for toggling -->
						<div id="navbarCollapse" class="collapse navbar-collapse">
							<ul id="fresponsive" class="nav navbar-nav dropdown">
								<li class="active"><a href="index.php">HOME</a></li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle">ABOUT<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="size" href="aboutus.php">ABOUT CSL</a></li>
										<li><a class="size" href="CSLmission.php">MISSION & VISION</a></li>
										<li><a class="size" href="chairmanmessage.php">CHAIRMAN MESSAGE</a></li>
										<li><a class="size" href="mdmessage.php">MD MESSAGE</a></li>
									</ul>
								</li>

								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle">COURSES<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">ACCOUNTING COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="tally-with-gst.php">TALLY WITH GST </a></li>
												<li><a href="professional-tally.php">PROFESSIONAL TALLY</a></li>
												<li><a href="tally-master.php">TALLY MASTER </a></li>
												<li><a href="busy.php">BUSY ACCOUNTANT</a></li>
												<li><a href="account-manager.php">ACCOUNT MANAGER</a></li>
												<li><a href="payroll-accounting.php">PAYROLL ACCOUNTING</a></li>
												<li><a href="cat.php">CAT</a></li>
												<li><a href="income-tax-expert.php">INCOME TAX EXPERT</a></li>
												<li><a href="gst-expert.php">GST EXPERT</a></li>
												<li><a href="sap-fico.php">SAP (FICO)</a></li>
												<li><a href="e-accounting.php">E-ACCOUNTING</a></li>
												<li><a href="corporate-e-accounting.php">CORP- E-ACCOUNTING</a></li>
											</ul>

										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">BANKING & FINANCIAL MANAGEMENT<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="bfs.php">BFS</a></li>
												<li><a href="cbs.php">CBS</a></li>
												<li><a href="cbsf.php">CBSFM</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">DOEACC / NIELIT GOVT. COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="bcc.php">BCC</a></li>
												<li><a href="ccc.php">CCC</a></li>
												<li><a href="ccc-plus.php">CCC PLUS</a></li>
												<li><a href="fcit.php">FCIT "O" LEVEL</a></li>
												<li><a href="mdse.php">MDSE "A" LEVEL</a></li>
											</ul>
										</li>
										<li><a href="#">CSC COURSES</a></li>


										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">MALTIMIDEA & ANIMATION COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="autocad.php">AUTOCAD</a></li>
												<li><a href="video-editing.php">VIDEO EDITING</a></li>
												<li><a href="dtp.php">DTP</a></li>
												<li><a href="graphic-designing.php">GRAPHIC DESIGNING</a></li>
												<li><a href="animation.php">ANIMATION 2D & 3D</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">MOBILE & HARDWARE & NETWORKING<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="mobile-engineering.php">MOBILE ENGINEERING</a></li>
												<li><a href="card-level.php">CARD LEVEL</a></li>
												<li><a href="chip-level.php">CHIP LEVEL</a></li>
												<li><a href="ccna.php">CCNA</a></li>
												<li><a href="dhe.php">DHE</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">WEB COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="it-expert.php">IT EXPERT </a></li>
												<li><a href="php-web-development.php">PHP WEB DEVELOPMENT</a></li>
												<li><a href="web-designing.php">WEB DESIGNING</a></li>
												<li><a href="python-web-development.php">PYTHON WEB DEVELOPMENT</a></li>
												<li><a href="dot-net-web-development">DOTNET WEB DEVELOPMENT</a></li>
												<li><a href="wordpress.php">WORDPRESS WEB DEVELOPMENT </a></li>
												<li><a href="web-dev-tools.php">WEB DEVELOPMENT TOOLS </a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">SOFTWARE ENGINEERING<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="fcit.php">FCIT</a></li>
												<li><a href="mdse.php">MDSE</a></li>
												<li><a href="pdse.php">PDSE</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">PROGRAMING LANGUAGE <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="c-cplus.php">C & C++</a></li>
												<li><a href="python.php">PYTHON</a></li>
												<li><a href="dot-net.php">DOT NET</a></li>
												<li><a href="java.php">JAVA</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">PROFESSIONAL COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="android.php">ANDROID</a></li>
												<li><a href="microsoft-professional.php">MICROSOFT PROFESSIONAL </a></li>
												<li><a href="computer-basic.php">COMPUTER BASIC</a></li>
												<li><a href="vba.php">VBA</a></li>
												<li><a href="mis-executive.php">MIS EXECUTIVE </a></li>
												<li><a href="sales-executive.php">SALES EXECUTIVE </a></li>
												<li><a href="advanced-excel.php">ADVANCE EXCEL </a></li>
												<li><a href="english-speaking.php">ENGLISH SPEAKING </a></li>
												<li><a href="deo.php">DEO </a></li>
												<li><a href="typing.php">TYPING</a></li>
												<li><a href="dca.php">DCA</a></li>
												<li><a href="adca.php">ADCA</a></li>
												<li><a href="mdca.php">MDCA</a></li>
												<li><a href="google-sheets.php">GOOGLE SHEETS</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">MARKET TRENDING PROFESSIONAL COURSES<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="data-analyst.php">DATA ANALYST</a></li>
												<li><a href="business-analyst.php">BUSINESS ANALYST</a></li>
												<li><a href="artificial-intelligence.php">ARTIFICIAL INTELLIGENCE</a></li>
												<li><a href="digital-marketing.php">DIGITAL MARKETING</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">TEACHER TRAINING PROGRAM <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="teacher-training-program.php">JUNIOR BASIC TRAINING (JBT)</a></li>
												<li><a href="teacher-training-program.php">COMPUTER TEACHER TRAINING </a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">COACHING CLASSES <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="coaching-classes.php">CBSE 11TH CLASS </a></li>
												<li><a href="coaching-classes.php">CBSE 12TH CLASS</a></li>
												<li><a href="coaching-classes.php">NIOS 10TH CLASS</a></li>
												<li><a href="coaching-classes.php">NIOS 12TH CLASS</a></li>
												<li><a href="coaching-classes.php">DU OR IGNU B.COM P/H</a></li>
												<li><a href="coaching-classes.php">IP OR IGNU BBA</a></li>
												<li><a href="coaching-classes.php">IP OR IGNU BCA</a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">COMPETITION CLASSES <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="competition-classes.php">BANKING </a></li>
												<li><a href="competition-classes.php">SSC</a></li>
												<li><a href="competition-classes.php">RAILWAYS</a></li>
												<li><a href="competition-classes.php">IIT-JEE COACHING</a></li>
												<li><a href="competition-classes.php">NEET COACHING</a></li>
												<li><a href="competition-classes.php">AIIMS COACHING </a></li>
											</ul>
										</li>
										<li>
											<a data-toggle="dropdown" class="dropdown-toggle">GOVERNMENT PROJECT <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="govt-projects.php">PMKVY & PMKK </a></li>
												<li><a href="govt-projects.php">DDU – GKY</a></li>
												<li><a href="govt-projects.php">NULM</a></li>
												<li><a href="govt-projects.php">STAR SCHEME </a></li>
											</ul>
										</li>
									</ul>
								</li>



								<li><a href="scholarship-home.php">SCHOLARSHIP</a></li>
								<li><a href="verify-otp.php">VERYFY STUDENT</a></li>
								<li>
									<a data-toggle="dropdown" class="dropdown-toggle">PLACEMENT <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="https://www.myfirstboss.com/">PLACEMENT.COM</a></li>
										<li><a href="our-placement-cell.php">PLACEMENT TIE-UPS</a></li>
										<li><a href="placed-students.php">PLACED STUDENTS</a></li>
									</ul>
								</li>
								<li><a href="student-projects.php">STUDENT'S PROJECTS</a></li>
								<li><a href="schedule.php">ONLINE CLASS SCHEDULE</a></li>
								<li><a href="CSL-notice-board.php">NOTICE</a></li>
								<li>
									<a data-toggle="dropdown" class="dropdown-toggle">FRANCHISE <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="CSL-franchise-advantage.php">THE CSLSKILLS ADVANTAGE</a></li>
										<li><a href="CSL-franchise-support.php">FRANCHISE SUPPORT & ADPROCESS</a></li>
										<li><a href="apply-franchises.php">APPLY FOR FRANCHISE</a></li>
									</ul>
								</li>
								<li>
									<a data-toggle="dropdown" class="dropdown-toggle">COVID-19 UPDATE <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="size" href="https://www.coronatracker.com/country/india/">LIVE TRACKER</a></li>
										<li><a class="size" href="CSL-guide.php">GUIDE</a></li>
										<li><a class="size" href="CSL-pledge-guide.php">PLEDGE</a></li>
									</ul>
								</li>
								<li><a href="CSL-contact.php">CONTACT</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- /.header_bottom -->

	</div>
	<br>








	<!-------------------------------->
</body>

</html>
<script>
	(function($) {
		$(document).ready(function() {
			$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
				event.preventDefault();
				event.stopPropagation();
				$(this).parent().siblings().removeClass('open');
				$(this).parent().toggleClass('open');
			});
		});
	})(jQuery);
</script>
<html>

<head>
	<title>Notice Board</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
	.mainpage {
		margin-left: 100px;
		margin-right: 100px;
		width: 80%;
		border: 1px solid #ff42a4;
		margin: auto;
	}

	.content {
		margin-top: 5px;
		margin-left: 10px;
		margin-right: 10px;
		margin-bottom: 5px;
	}

	h1 {
		background: linear-gradient(to right, #e91e63 0%, #051a3e 100%);
		text-align: center;
		font-size: 40px;
		width: 100%;
		margin-top: 20px;
		color: white;
		font-weight: bold;
		padding-top: 5px;
		padding-bottom: 5px;
	}

	.panel-default>.panel-heading {
		padding: 0;
	}

	.panel-title {
		color: white;
		font-size: 20px;
		background-color: #ff42a4;
		/*change*/
		font-weight: bold;
	}

	.panel-title:hover {
		background-color: #185895;
		/*change*/
		color: white;
	}

	.panel-heading a[aria-expanded="true"] {
		/*change*/
		background-color: #185895;
		color: white;
	}

	.panel-title>a {
		display: block;
		padding: 15px;
		text-decoration: none;
	}


	.panel {
		border: 1px solid green;
	}

	p.para {
		font-size: 20px;
		padding: 10px;
		color: #185895;

	}

	a.paralink {

		text-decoration: none;
		font-size: 20px;
		color: white;
	}

	.linkdiv {
		width: 100%;
		background-color: #185895;
		padding: 10px;
		text-align: center;
	}

	div.director {
		background-color: #185895;
		margin-top: 20px;
		color: white;
		font-size: 20px;
		padding: 10px;
	}

	.more-less {
		float: right;
		color: white;
	}

	.inner {
		font-size: 20px;
		color: #185895;
		padding: 10px;
	}
</style>

<body>
	<?php include 'navigation.php'; ?>
	<img class="ban" src="images/banner/banner1.jpg" style="z-index:1;background-position: center;background-repeat: no-repeat;background-size: cover;position: absolute;top:104;height:300px;width:100%;margin-bottom:10px;">
	<div class="mainpage" style="margin-top:300px;">
		<div class="content">
			<h1>Daily Updates</h1>
			<div class="accordion">

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Diploma Result announced
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<p class="para">Diploma Result announced please check in your student portal. </p>
								<div class="linkdiv">
									<a class="paralink" href="https://CSLskills.com/login.php ">please click here and check in your student portal. </a>
								</div>

							</div>
						</div>
					</div>



					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Placement assistance is open
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<p class="para">Placement assistance is open for those students who complete there CSL Diploma </p>
								<div class="linkdiv">
									<a class="paralink" href="https://www.myfirstboss.com/ ">visit on CSL placement portal. </a>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="more-less glyphicon glyphicon-plus"></i>
									May 2021 job fair canceled due to Covid -19.
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<p class="para">will open soon</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Online classes is going on
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<p class="para">Online classes is going on so we Suggest all students to attained their class regularly. Please check your schedule and get your Login id and password. </p>
								<div class="linkdiv">
									<a class="paralink" href="https://CSLskills.com/schedule.php  ">Click Hare to see online class schedule</a>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<i class="more-less glyphicon glyphicon-plus"></i>
									If you are facing any issue
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
								<p class="para">
									If you are facing any issue like late starting or early finishing of online classes, wrong attendance making, then give us online complaint we will resolve your issue as soon as possible.
								</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSix">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Please pay your fees online
								</a>
							</h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body">
								<p class="para">You can use different menthods to pay your fees.
								</p>
								<ol>
									<li class="inner">Pay with UPI </li>
									<div class="linkdiv">
										<a class="paralink" href="https://CSLskills.com/fee-pay.php ">Click here to use UPI payment option</a>
									</div>
									<li class="inner">Pay with debit or credit card or net banking</li>
									<div class="linkdiv">
										<a class="paralink" href="https://payu.in/web/A75769C203F5DF2EBF70A5E4D6B52035 ">Click here to use debit or credit card or net banking payment option</a>
									</div>
								</ol>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSeven">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Please upload your project
								</a>
							</h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="panel-body">
								<p class="para">Diploma completed student Please upload your project in your student portal. </p>
								<div class="linkdiv">
									<a class="paralink" href="https://CSLskills.com/student/student-project.php ">please click here to upload your project in your student portal. </a>

								</div>
							</div>
						</div>
					</div>

					<h1>Rules & Regulations for all Students</h1>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingEight">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Rules & Regulations for all Students
								</a>
							</h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
							<div class="panel-body">
								<p class="para">All students must follow below rules & regulations
								<ol>
									<li class="inner">On admission to any course of study, every student submits himself/herself to disciplinary jurisdiction of the management of the institute.</li>
									<li class="inner">The students are advised to keep themselves aware of the institute rules. Ignorance of rules shall not be an excuse for violation.</li>
									<li class="inner">Each student shall conduct herself/himself, both within and outside the campus of the institute in a manner befitting a student of a student of a prestigious institute. Each student shall show due respect and courtesy of the teachers, administrators, staff of the institute, and to the visitors and residents of the institute, and good behavior to fellow students.</li>
									<li class="inner">Student are required to be dressed neatly and decently.</li>
									<li class="inner">Use of cell phones is strictly prohibited in all academic areas of the campus. Use of cell phone would entail confiscation of the handset. It would be returned only:
										<ul>
											<li class="innerlist">At the end of the course or,</li>
											<li class="innerlist">After payment of a fine of Rs. 100/-</li>
										</ul>
									</li>
									<li class="inner">Late arrival and early departure at or form a class are recorded as absence from the class. Student are not allowed to leave the institute during working hours without the written permission of the Center Head /Academic Head.</li>
									<li class="inner">The student at the institute require attention and diligence. A student neglecting his/her studies and having unsatisfactory progress will be given two warning after which if he /she fails to improve, he/she will be liable for expulsion from the institute.</li>
									<li class="inner">Student will compensate damage to institute/furniture caused by neglect or willful damage, Defecting the walls or institute property will be viewed seriously.</li>
									<li class="inner">The student are advised to see regularly the notice displayed on the institute notice boards or web notice board, The notice displayed on these notice board shall be deemed to have been served on the students.</li>
									<li class="inner">Any student who fails to clear all the dues shall be debarred from appearing examinations</li>
									<li class="inner">The Director Principal reserves the right to modify any of the institute rules as and when necessary. The decision of the director Principal in all matter shall be final.</li>
									<li class="inner">Fees has to be paid in between 1st -7th every month.</li>
									<li class="inner">85% attendance is compulsory for each student, otherwise he/she will not allowed to sit in the final examination</li>
									<li class="inner">85% attendance is compulsory for each student, otherwise he/she will not allowed to sit in the final examination</li>
									<li class="inner">Student will get 100% placement of they follow rule written as below:-
										<ul>
											<li class="innerlist">70% above mark in test/Exams</li>
											<li class="innerlist">Attendance should be 85%</li>
											<li class="innerlist">Project work with 90% marks</li>
											<li class="innerlist">Mutual behavior in institute with their friends and teachers.</li>
											<li class="innerlist">Student should participate in all kind of activities.</li>
										</ul>
									</li>
									<li class="inner">It necessary to appear in the weekly/monthly test, as prescribed by center director/head.</li>
									<li class="inner">Practical + viva marks will be given on the basis of student’s performance in the weekly/monthly test & regular checking of home assignment & respective project work.</li>
									<li class="inner">No student is allowed to enter inside the "CSL" class/lab room by accompanying with visitor/relative/friend.</li>
									<li class="inner">tudents will bring bags, class works notebooks & ID-Card.</li>
									<li class="inner">Students can get the facility of transfer from one CSL Centre to another with having written permission from our center head.</li>
									<li class="inner">Admission/registration /Tuition Fee once paid shall not be refunded in any case.</li>
									<li class="inner">Students have to follow batch wise procedure for theory & lab classes, made by the CSL.</li>
									<li class="inner">It will be the duty of student to take receipt for all types of fees from respective person.</li>
									<li class="inner">CSL is a NFP autonomous organization (Certified/Licensed by- Govt. of India) which is running various skill advancement courses outside formal education sector under its skill advancement Training awareness Programs on not for profit basis and designed various job oriented basic certificate and diploma courses in non-formal learning to eliminate/overcome the burning/prevailing problem of unemployment, so that student can be able to get employment and self-employment business opportunity in the present era of competition, specially in private sector/non formal sector.</li>
									<li class="inner">Student will get CSL titled, printed, certified & issued diploma and certificates. These diploma and certificates are applicable for N-F sector jobs, but before applying for concerned jobs always read requirements, rule & regulations, Guidelines made for concerned post/vacancy/job, by concerned departments.</li>
									<li class="inner">If student is minor (Under 18 Years) at the time of taking admission into any CSL courses, then guardian signature is necessary on admission form.</li>
									<li class="inner">If You (Student) are accepting above mentioned Clarification/notice/rule & regulations then you can take admission into any course of CSL, Otherwise not. No excuse shall be entertained after admission in any case whatsoever.</li>
								</ol>
								</p>
							</div>
						</div>
					</div>


					<h1>Any Query</h1>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingNine">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Student Help Desk
								</a>
							</h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
							<div class="panel-body">
								<p class="para">Mail : mail@CSLskills.com<br>
									Whatsaap : 9717750164<br>
									Mob No. : 8527567772</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTen">
							<h4 class="panel-title">
								<a class="myBtn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
									<i class="more-less glyphicon glyphicon-plus"></i>
									Placement Helpdesk
								</a>
							</h4>
						</div>
						<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
							<div class="panel-body">
								<p class="para">Mail : hr@CSLskills.com<br>
									Mob No : 9971024870<br>
									Whatsaap : 9971024870</p>
							</div>
						</div>
					</div>

					<div class="director">
						<p class="paraDiv">Regards<br>
							Shubham Chaturvedi <br>
							Director, CSL
						</p>
					</div>


				</div><!-- panel-group -->


			</div><!-- container -->


		</div>
	</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

</html>
<script>
	function toggleIcon(e) {
		$(e.target)
			.prev('.panel-heading')
			.find(".more-less")
			.toggleClass('glyphicon-plus glyphicon-minus');
	}
	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
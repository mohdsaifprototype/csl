<html>

<head>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="cssapplied/aboutCSL.css" />

	<style>
		.mainpage {
			width: 80%;
			border: 1px solid #ff42a4;
			margin: auto;
			height: auto;
			overflow: hidden;
		}

		.content {
			margin-top: 5px;
			margin-left: 10px;
			margin-right: 10px;
			margin-bottom: 5px;
		}

		h1 {
			background: linear-gradient(to right, #e91e63 0%, #051a3e 100%);
			font-size: 35px;
			font-weight: bold;
			text-align: center;
			padding: 8px;
			margin-top: 10px;
			color: white;
		}

		h6 {
			background: linear-gradient(to right, #e91e63 0%, #051a3e 100%);
			color: white;
			font-size: 25px;
			text-align: center;
			padding: 10px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		h3 {
			background-color: #ff42a4;
			margin-top: 8px;
			padding: 5px;
			color: white;
			text-align: center;
			font-size: 25px;


		}

		.image1 {
			width: 35%;
			height: 200px;
			float: left;
			padding-right: 10px;

		}

		.image2 {
			width: 35%;
			height: 200px;
			float: right;
			padding-left: 10px;
		}

		.image3 {
			width: 35%;
			height: 200px;
			float: left;
			padding-left: 10px;
		}

		.image4 {
			width: 35%;
			height: 200px;
			float: right;
			padding-left: 10px;
		}

		.aboutCSL p {
			text-align: justify;
			font-size: 14px;
			color: #000000;
			margin-top: 10px;
		}

		div.visionmission img {

			width: 45%;
			height: 40%;
			margin-top: -142px;
			float: right;
			padding: 10px;

		}

		@media screen and (min-width:320px) and (max-width:480px) {

			.image1,
			.image2,
			.image3,
			.image4 {
				height: 150px;
			}

			.aboutCSL p {
				font-size: 12px;
			}

			.aboutCSL h1 {
				font-size: 18px;
			}

			.aboutCSL h6 {
				font-size: small;
			}

			.aboutCSL h3 {
				font-size: 15px;
			}
		}

		@media screen and (min-width:481px) and (max-width:768px) {

			.image1,
			.image2,
			.image3,
			.image4 {
				height: 150px;
			}

			.aboutCSL p {
				font-size: 12px;
			}

			.aboutCSL h1 {
				font-size: 20px;
			}

			.aboutCSL h6 {
				font-size: 14px;
			}

			.aboutCSL h3 {
				font-size: 18px;
			}
		}

		@media screen and (min-width:769px) and (max-width:1024px) {

			.image1,
			.image2,
			.image3,
			.image4 {
				height: 150px;
			}

			.aboutCSL p {
				font-size: 14px;
			}

			.aboutCSL h1 {
				font-size: 28px;
			}

			.aboutCSL h6 {
				font-size: 20px;
			}

			.aboutCSL h3 {
				font-size: 20px;
			}
		}

		@media screen and (min-width:1025px) and (max-width:1200px) {

			.image1,
			.image2,
			.image3,
			.image4 {
				height: 180px;
			}

			.aboutCSL p {
				font-size: 14px;
			}

			.aboutCSL h1 {
				font-size: 35px;
			}

			.aboutCSL h6 {
				font-size: 24px;
			}

			.aboutCSL h3 {
				font-size: 25px;
			}
		}
	</style>
</head>

<body>

	<?php include 'navigation.php'; ?>
	<img class="ban" src="images/banner/banner1.jpg" style="z-index:1;background-position: center;background-repeat: no-repeat;background-size: cover;position: absolute;top:104;height:300px;width:100%;margin-bottom:10px;">
	<div class="mainpage" style="margin-top:300px;">

		<div class="content">

			<h1>About CSL</h1>
			<div class="outer">

				<h3>Vision</h3>
				<hr>
				<p>
					"To be a Leading Global Player in taking the skills development to the next dimension and play a significant role in reducing skill gaps in the youth globally"
				</p>
				<hr>
				<h3>Mission</h3>
				<hr>
				<p>
					"To empower our students with knowledge & skills which leads to sustainable & meaningful employment.To remove constraints from the student's minds so that individuals may explore their capabilities and interests enabling them to develop their full intellectual and human potential"
				</p>
				<hr>
				<h3>Our Values</h3>
				<div>
					<ul>
						<li>Fairness and transparency with associates.</li>
						<li> Consistent Superior Performance</li>
						<li> Exceed customer expectations through world class processes.</li>
						<li> Shared destiny with all partners</li>
						<li> Adhere to societal norms, laws and ethos</li>
						<li> Respect for the individual.</li>
					</ul>
					<div class="visionmission">
						<img src="images/mission.jpg">
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>
<script>


</script>
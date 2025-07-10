<html>

<head>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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

		.outer ul {
			list-style-type: square;
			font-size: 15px;
		}

		h5 {
			margin-top: 8px;
			padding: 5px;
			color: blue;
			font-size: 20px;
		}

		.outer p {

			font-size: 15px;
		}

		form {
			width: 80%;
			margin-left: 60px;
			margin-right: 100px;
		}
	</style>
</head>

<body>

	<?php include 'navigation.php'; ?>
	<img class="ban" src="images/banner/banner1.jpg" style="z-index:1;background-position: center;background-repeat: no-repeat;background-size: cover;position: absolute;top:104;height:300px;width:100%;margin-bottom:10px;">
	<div class="mainpage" style="margin-top:300px;">
		<div class="content">
			<div class="outer">
				<h1>Provide Your Details</h1>
				<section class="about py-5">
					<div class="container py-md-5">

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
	</div>
	</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

</html>
<script>


</script>
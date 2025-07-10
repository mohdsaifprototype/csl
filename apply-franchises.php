<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="cssapplied/apply-franchises.css">
<style>

</style>
<body>
<?php include 'navigation.php'; ?>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="images\form\logo.png" alt="" id="logo" >
            <img src="images\form\franchise.jpg" alt="" id="logo1" >
            <h3>Welcomes You</h3>    
        </div>
    <div class="col-md-9 register-right">
            <h2>Apply for Franchise</h2> 
	    <form role="form " action="franchiseinsert.php" method="post">
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control " id="name" name="name" placeholder="Your Name" required>
                <!--placing icon using a span element-->
                <span class="icon fa fa-user fa-lg"></span>
            </div>
	
	        <div class="form-group">
                <label>Gender</label>
                <select name="yourgender"  class="form-control" id="select" placeholder="" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <!--placing icon using a span element-->
                <span class="icon fa fa-user fa-lg"></span>
            </div>

            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" name="age" placeholder="Enter Your Age" required>
                <!--placing icon using a span element-->
                <span class="icon fa fa-user fa-lg"></span>
            </div>

            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" name="mobile" placeholder="Enter Your Active Mobile Number" required>
                <!--placing icon using a span element-->
                <span class="icon fa fa-mobile-phone fa-lg" style="font-size:30px"></span>
            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Active Email ID" required>
                <span class="icon fa fa-envelope fa-lg"></span>
            </div>

            <div class="form-group">
                <textarea rows="5" cols="30" id="msg" name="location" placeholder="Enter Your Centre Location" style="width:100%"></textarea>
                <span class="icon-textarea fa fa-map-marker fa-lg "></span>
            </div>
	
	        <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="city" placeholder="Enter You City" required>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>

            <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="state" placeholder="Enter You State" required>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>

            <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="pin" placeholder="Enter Your Area Pin Code" required>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>

            <div class="form-group">
                <label for="sub"></label>
                <select name="selectcentre"  class="form-control"required >
                    <option value="">-Select Centre-</option>
                    <option value="Uttam Nagar">Uttam Nagar</option>
                    <option value="East Azad Nagar">East Azad Nagar</option>
                </select>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>
	
	        <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="choose" placeholder="Are You Already Running Any Centre?" required>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>
	
	        <div class="form-group">
                <label for="sub"></label>
                <select name="language"  class="form-control" required> 
                    <option value="">-Select Your Language-</option>
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Both">Both</option>
                </select>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>

	        <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="invest" placeholder="Enter Your Investment Capacity" required>
                <span class="icon fa fa-pencil fa-lg"></span>
            </div>

	        <div class="form-group">
                <label for="sub"></label>
                <input type="text" class="form-control" id="sub" name="openlocation" placeholder="Enter Name of The Location Where Do You Want To Open Centre" required>
                <span class="icon fa fa-map-marker fa-lg"></span>
            </div>
	
	        <div class="form-group">
                <label for="sub"></label>
                <textarea rows="5" cols="30" id="msg" name="msg" placeholder="Other Info" style="width:100%"></textarea>
                <span class="icon-textarea fa fa-pencil fa-lg"></span>
            </div>

            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-default" name="save">Submit</button>
            </div>
        </form>

    </div>
	</div>                     
</div>
<?php include 'footer.php'; ?>
</body>
</html>
<script>
$(document).ready(function(){
$(".form-control").css({"height": 30 })
});
</script>
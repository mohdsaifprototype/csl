<?php
include_once 'franchisedb.php';
if(isset($_POST['save']))
{	 
$name = $_POST['name'];
$gender = $_POST['yourgender'];
$age = $_POST['age'];
$mob = $_POST['mobile'];
$email = $_POST['email'];
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$selectcentre = $_POST['selectcentre'];
$choose = $_POST['choose'];
$language = $_POST['language'];
$invest = $_POST['invest'];
$openlocation = $_POST['openlocation'];
$msg = $_POST['msg']; 
	 $sql = "insert into franchisetable (name,gender,age,mobile,email,cloaction,city,state,pin,scentre,running,lang,capacity,openlocation,other)
	 values ('$name','$gender','$age','$mob','$email','$location','$city','$state','$pin','$selectcentre','$choose','$language','$invest','$openlocation','$msg')";
	 if (mysqli_query($conn, $sql)) 
	 {
		echo "New record created successfully !";
	 } else {
		echo "Error: ".$sql." ".mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>









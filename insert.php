<?php
include_once 'database.php';
if (isset($_POST['save'])) {
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$ft_name = $_POST['fathername'];
	$mob_no = $_POST['mobile'];
	$scl_name = $_POST['schoolname'];
	$scl_loc = $_POST['schoollocation'];
	$sel_course = $_POST['selcourse'];
	$m_comp = $_POST['modulecompleted'];
	$reg_no = $_POST["regno"];
	$branch_id = $_POST["selbranch"];


	$sql = "INSERT INTO registration (sfn,sln,sftn,mob,sclname,sclocation,cour,mcomp,regno,branch)
	 VALUES ('$first_name','$last_name','$ft_name','$mob_no','$scl_name','$scl_loc','$sel_course','$m_comp','$reg_no','$branch_id')";
	if (mysqli_query($conn, $sql)) { ?>
		<script>
			alert("Registraion Successfully!");
			window.location = "https://CSLskills.com/index.php";
		</script><?php
						} else {
							echo "Error: " . $sql . " " . mysqli_error($conn);
						}
						mysqli_close($conn);
					}
							?>
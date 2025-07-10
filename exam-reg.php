<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include 'links.php'; ?>
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
      color: black;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #311fc7;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      text-align: center;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #ca2095;
      padding: 20px;

    }

    .col-35 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-65 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .row {
      font-size: 25px;
      color: white;
    }

    body {
      background-color: white;

    }

    h2 {
      text-align: center;
      font-size: 40;
      color: #ca2095;
      font-weight: bold;
    }

    .logo {
      width: 200px;
      height: 100px;
      margin-left: 70px;
      margin-top: 10px;
    }

    #sub {
      margin-top: 20px;
      width: 300px;
      font-size: 25px;
    }


    @media screen and (max-width: 768px) {

      .col-35,
      .col-65,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>
  <?php include 'menu.php'; ?>
  <br><br><br>
  <h2>Exam Registration</h2>
  <div>
    <div class="container">
      <form name="RegForm" onSubmit="return validateForm();" method="post" action="insert.php">
        <div class="row">
          <div class="col-35">
            <label for="course">Branch</label>
          </div>
          <div class="col-65">
            <select id="branch" name="selbranch">
              <option value="-1">--- Select Branch ---</option>
              <option value="05">Uttam Nagar</option>
              <option value="06">East Azad Nagar</option>
              <option value="07">Pitampura</option>
              <option value="08">Kalkaji</option>
              <option value="09">Badarpur</option>
              <option value="10">Dilshad Garden</option>
              <option value="11">Jaipur</option>
              <option value="12">Kota</option>
              <option value="13">Mumbai</option>
              <option value="14">Bhopal</option>
              <option value="15">Vidisa</option>
              <option value="16">Kanpur</option>
              <option value="17">Agra</option>
              <option value="18">Lakhnow</option>
              <option value="19">Kolkata</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="reg">Enrollment No.</label>
          </div>
          <div class="col-65">
            <input type="text" id="regno" name="enrollmentno" placeholder="Your Enroll..">
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="fname">First Name</label>
          </div>
          <div class="col-65">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-65">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="lname">Father's Name</label>
          </div>
          <div class="col-65">
            <input type="text" id="ftname" name="fathername" placeholder="Your Father's name..">
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="contact">Mobile No.</label>
          </div>
          <div class="col-65">
            <input type="text" id="mob" name="mobile" placeholder="Your Mobile No.">
          </div>
        </div>

        <div class="row">
          <div class="col-35">
            <label for="school">School Name</label>
          </div>
          <div class="col-65">
            <input type="text" id="school" name="schoolname" placeholder="Your School Name">
          </div>
        </div>

        <div class="row">
          <div class="col-35">
            <label for="schoolLocation">School Location</label>
          </div>
          <div class="col-65">
            <input type="text" id="slocation" name="schoollocation" placeholder="Your School Location">
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="course">Course</label>
          </div>
          <div class="col-65">
            <select id="course" name="selcourse">
              <option>--- Select Course ---</option>
              <option value="IT Expert">IT Expert</option>
              <option value="FCIT">FCIT</option>
              <option value="MDSE">MDSE</option>
              <option value="E-Accounting">E-Accounting</option>
              <option value="Hardware">Hardware</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-35">
            <label for="module">Module Completed</label>
          </div>
          <div class="col-65">
            <input type="text" id="module" name="modulecompleted" placeholder="Name of your module completed">
          </div>
        </div>
        <div class="row">
          <input id="sub" type="submit" name="save" value="Submit">
        </div>
      </form>
    </div>
  </div>
  <br>
  <br>

  <!-- footer -->
  <?php include 'CSL_footer.php'; ?>
  <!-- //footer -->
  <!-- copyright -->
  <div class="copy_right p-3 d-flex justify-content-around">

    <p>© 2016 CSL. All rights reserved
    </p>
  </div>
</body>

</html>
<script>
  function validateForm() {
    var fname = document.forms["RegForm"]["firstname"];
    var lname = document.forms["RegForm"]["lastname"];
    var ftname = document.forms["RegForm"]["fathername"];
    var phoneNo = document.forms["RegForm"]["mobile"];
    var sname = document.forms["RegForm"]["schoolname"];
    var slocation = document.forms["RegForm"]["schoollocation"];
    var slcourse = document.forms["RegForm"]["selcourse"];
    var mcomp = document.forms["RegForm"]["modulecompleted"];
    var branch = document.forms["RegForm"]["selbranch"];
    var stmatch = /^[A-Za-z\s]+$/;
    var stmatch1 = /^(?!\.)(?!.*\.$)(?!.*?\.\.)[A-Za-z\s.]+$/;
    var stmatch2 = /^(?!\.)(?!.*\.$)(?!.*?\.\.)[A-Za-z\s,]+$/;
    var phone = /^\d{10}$/;
    var reg = /^(?!.*\.$)[a-zA-Z\s!@#$%\^&*)(+=._-]*$/;
    var loc = /^[a-zA-Z0-9\s!@#$%\^&*)(+=,._-]*$/;;

    if (branch.selectedIndex < 1) {
      alert("Please enter your course.");
      branch.focus();
      return false;
    }
    if (fname.value == "" || !fname.value.match(stmatch)) {
      window.alert("Please enter your name.");
      fname.focus();
      return false;
    }

    if (ftname.value == "" || !ftname.value.match(stmatch1)) {
      window.alert(
        "Please enter your father name.");
      ftname.focus();
      return false;
    }


    if (phoneNo.value == "" || phoneNo.value == null || !(phoneNo.value.match(phone))) {
      alert("Please enter valid 10 digit Mobile No.");
      phoneNo.focus();
      return false;
    }



    if (sname.value == "" || !sname.value.match(reg)) {
      window.alert("Please enter your school name");
      sname.focus();
      return false;
    }


    if (slocation.value == "" || !slocation.value.match(loc)) {
      window.alert("Please enter your school location");
      slocation.focus();
      return false;
    }
    if (slcourse.selectedIndex < 1) {
      alert("Please enter your course.");
      slcourse.focus();
      return false;
    }
    if (mcomp.value == "" || !mcomp.value.match(stmatch2)) {
      window.alert("Please enter your module name completed");
      mcomp.focus();
      return false;
    }
    return true;
  }
</script>
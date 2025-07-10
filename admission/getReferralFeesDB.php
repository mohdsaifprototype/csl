<?php
session_start();
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
} else {
   $referralCode = $_GET["referralCode"];
   $courseID = $_GET["courseID"];
   $schDiscount = 0;

   $scholar = "select admission_fee,no_of_installment,installment_fee,referral_fee from web_enquiries where referral_code='$referralCode' and referral_offer_valid_date>=CURRENT_DATE and course='$courseID' ";
   $scholarRes = mysqli_query($conn, $scholar);
   if (mysqli_num_rows($scholarRes) > 0) {
      if ($row = mysqli_fetch_assoc($scholarRes)) {
         echo $row["admission_fee"] . "-" . $row["no_of_installment"] . "-" . $row["installment_fee"] . "-" . $row["referral_fee"];
      }
   } else {
      $scholar = "select admission_fee,no_of_installment,installment_fee,referral_fee from enquiry where referral_code='$referralCode' and referral_offer_valid_date>=CURRENT_DATE and course='$courseID' ";
      $scholarRes = mysqli_query($conn, $scholar);
      if (mysqli_num_rows($scholarRes) > 0) {
         if ($row = mysqli_fetch_assoc($scholarRes)) {
            echo $row["admission_fee"] . "-" . $row["no_of_installment"] . "-" . $row["installment_fee"] . "-" . $row["referral_fee"];
         }
      }
   }
}

mysqli_close($conn);

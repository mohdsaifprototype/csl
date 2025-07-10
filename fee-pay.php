   <head>
       <title>Pay:: CSL</title>
       <!-- Meta tag Keywords -->
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta charset="UTF-8" />
       <meta name="keywords" content="CSL" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
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

           form {
               margin-top: 50px;
               background-color: #ff42a4;
               color: white;

           }

           .py-2 {
               padding: 10px;
           }

           #upiDiv {
               text-align: center;
           }
       </style>
   </head>

   <body oncontextmenu="return false;">
       <!-- home -->
       <div id="home" class="inner-CSL-page">
           <div class="overlay-innerpage">
               <?php include 'navigation.php'; ?>
           </div>
           <!-- //banner -->
       </div>
       <section>
           <div class="container py-3">
               <h1 class="tittle-CSL text-center">Pay Fee</h1>
               <div class="row">
                   <div class="col-md-12 text-center">
                       <img src="images/logo/upi-logos.png" width="80%">
                   </div>
               </div>
           </div>
       </section>

       <div class="container py-3">
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                   <form action="insertFeeUPIDB.php" method="post">
                       <div class="row py-2">
                           <div class="col-md-12">
                               <label>Registration No: (If Any)</label>
                               <input type="text" class="form-control" name="regNo">
                           </div>
                       </div>
                       <div class="row py-2">
                           <div class="col-md-12">
                               <label>Phone No: (Enter your UPI Registered Number)</label>
                               <input type="text" class="form-control" name="phone" maxlength="10" minlength="10" required>
                           </div>
                       </div>
                       <div class="row py-2">
                           <div class="col-md-12">
                               <label>Fee Type:</label>
                               <select class="form-control" name="feeType" style="height:30px;" required>
                                   <option value="">Select</option>
                                   <option value="1">Installment Fees</option>
                                   <option value="2">Admission Fees</option>
                               </select>
                           </div>
                       </div>
                       <div class="row py-2">
                           <div class="col-md-12">
                               <label>Fee Amount:</label>
                               <input type="number" name="FeePaid" class="form-control" placeholder="Fee Amount" required>
                           </div>
                       </div>
                       <div class="row py-2">
                           <div class="col-md-12">
                               <button class="btn btn-success" id="upiBtn" type="button">BHIM UPI</button>
                           </div>
                       </div>
                       <div class="row py-2" id="upiDiv">
                           <div class="col-md-12">
                               <img src="student/images/bhim-upi.jpg" width="300px">
                               <br>
                               <label>Transaction ID</label>
                               <input class="form-control" type="text" name="transactionID" placeholder="Transaction ID" required>
                               <br>
                               <button class="btn btn-success" id="" type="Submit">Submit</button>
                           </div>
                       </div>
                   </form>
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
        <!-- //copyright -->
       <script>
           $(document).ready(function() {
               $("#upiDiv").hide();
               $("#upiBtn").click(function() {
                   $("#upiDiv").show(4000);
               });
           });
       </script>
   </body>
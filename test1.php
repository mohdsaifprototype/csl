<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CSL" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myFeesModal").modal('show', 3000);
        });
    </script>
    <style>
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 1%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }

        .custab {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }

        .custab:hover {
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }

        .center {
            margin-top: 50px;
        }

        .modal-pop {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }


        .modal-content-pop {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }


        .closeFees {
            color: black;
            font-size: 28px;
            font-weight: bold;
        }

        .closeFees:hover,
        .closeFees:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myFeesModal" class="modal-pop">
                    <div class="modal-content-pop">
                        <p class="closeFees">CLOSE &times;</p>
                        <div class="row py-2">
                            <div class="col-md-12">
                                <h4>It is to inform that all students submit their fees before 20 June.</h4>
                            </div>
                        </div>

                        <h4 class="bg-header"> STUDENT HAVE ANY ISSUE REGARDING CLASSES. PLEASE CONTACT ON:</h4>
                        <h4>1) +91 98 917 686 67</h4>
                        <h4>2) +91 97 177 501 64</h4>

                        <h4 class="bg-header"> CLASS TIMMING & DAYS:</h4>


                        <!------------------------>

                        <?php
                        //session_start();
                        $_SESSION["student_reg_no"] = "06LITEXPL120207411";
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = "CSL";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM time_table";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($_SESSION["student_reg_no"] == $row["reg"]) {
                                    echo "<br>";
                                    echo "<h4>" . "TIMMING - " . $row["time"] . "</h4>";
                                    echo "<h4>" . "DAYS - " . $row["day"] . "</h4>";
                                }
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                        <!------------------------>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    var modal = document.getElementById("myFeesModal");
    var span = document.getElementsByClassName("closeFees")[0];
    modal.style.display = "block";
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
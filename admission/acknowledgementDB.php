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

    $classMode = $_POST["classMode"];
    $freeEng  = $_POST["freeEng"];
    $mock  = $_POST["mock"];
    $placement  = $_POST["placement"];
    $result  = $_POST["result"];
    $ackAccept  = $_POST["ackAccept"];
    $logist = $_SESSION["logistic_no"];
    $sql = "INSERT INTO `term_ack`(`term_accept`, `logistic_no`, `class_mode`, `free_english`, `mock`, `placement`, `result`, `ack_term`) VALUES('1','$logist','$classMode','$freeEng','$mock','$placement','$result','$ackAccept')";
    if (mysqli_query($conn, $sql)) {
?>
        <script>
            alert("After Payment! Please Click On Continue for Futher Requirements");
            window.location = "https://www.payumoney.com/paybypayumoney/#/DCB1C91FE1210303514E96113BBD4EE1";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Somthing Wrong!");
            window.location = "acknowledgement-letter.php";
        </script>
<?php
    }
}
?>
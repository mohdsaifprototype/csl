<?php
session_start();
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$examid = $_GET["examid"];
$qid = $_GET["qid"];
$selectedOption = $_GET["selectedOption"];
$ansCount = $_GET["ansCount"];
$tname = $_GET["examname"];

$examSQL = "select answer from $tname$examid where q_id='$qid' and exam_id='$examid' ";

$examResult = mysqli_query($conn, $examSQL);
if (mysqli_num_rows($examResult) > 0) {
    if ($data = mysqli_fetch_assoc($examResult)) {
        if ($data["answer"] == $selectedOption || $data["answer"] == strtoupper($selectedOption)) {
            $ansCount = $ansCount + 1;
            echo $ansCount;
        } else {
            echo $ansCount;
        }
    }
}

mysqli_close($conn);

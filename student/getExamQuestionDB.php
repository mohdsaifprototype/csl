<?php
session_start();
$servername = "Localhost";
$username = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$qid = rand(1, 50);
$examid = $_GET["examid"];
$count = $_GET["count"];
$exam = $_GET["examname"];
$examSQL = "select * from $exam$examid  where q_id='$qid' and exam_id='$examid' ";
$examResult = mysqli_query($conn, $examSQL);
if (mysqli_num_rows($examResult) > 0) {
   if ($data = mysqli_fetch_assoc($examResult)) {
?>
      <table>
         <tr>
            <td>
               <div>Q<?php echo $count . ": " . $data["question"]; ?></div>
            </td>
         </tr>
         <tr>
            <td>
               <div><input type="radio" id="option1" name="option" value="a"><?php echo $data["option1"]; ?></div>
            </td>
         </tr>
         <tr>
            <td>
               <div><input type="radio" id="option2" name="option" value="b"><?php echo $data["option2"]; ?></div>
            </td>
         </tr>
         <tr>
            <td>
               <div><input type="radio" id="option3" name="option" value="c"><?php echo $data["option3"]; ?></div>
            </td>
         </tr>
         <tr>
            <td>
               <div><input type="radio" id="option4" name="option" value="d"><?php echo $data["option4"]; ?></div>
            </td>
         </tr>
         <tr>
            <td>
               <div><input type="hidden" id="qid" name="qid" value="<?php echo $qid; ?>"></div>
            </td>
         </tr>
      </table>
<?php
   }
} else {
   echo "Questions Are Not Available... Contact to your invigilator";
}
mysqli_close($conn);
?>
<?php
session_start();
$server = "Localhost";
$user = "CSLims_root";
$password = "Admin@123";
$dbname = "CSLims_ims";

$con = mysqli_connect($server, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
} else {
    $admName = $_POST["admName"];
    $admFather = $_POST["admFather"];
    $admCourse = $_POST["admCourse"];
    $admPhone = $_POST["admPhone"];
    $admLocation = $_POST["admLocation"];
    $admTime = $_POST["admTime"];

    $webSql = "INSERT INTO `book_demo`(`name`, `father_name`, `course`, `mobile`, `location`, `demo_time`, `booking_date`) VALUES ('$admName','$admFather','$admCourse','$admPhone','$admLocation','$admTime',CURRENT_DATE)";

    if (mysqli_query($con, $webSql)) {

        $user = "CSL826348";
        $password = "1511@Shubham";
        $senderid = "CSLDLI";
        $smsurl = "https://kit19.com/ComposeSMS.aspx?";

        function httpRequest($url)
        {
            $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
            preg_match($pattern, $url, $args);
            $in = "";
            $fp = fsockopen($args[1], 80, $errno, $errstr, 30);
            if (!$fp) {
                return ("$errstr ($errno)");
            } else {
                $args[3] = "C" . $args[3];
                $out = "GET /$args[3] HTTP/1.1\r\n";
                $out .= "Host: $args[1]:$args[2]\r\n";
                $out .= "User-agent: PARSHWA WEB SOLUTIONS\r\n";
                $out .= "Accept: */*\r\n";
                $out .= "Connection: Close\r\n\r\n";

                fwrite($fp, $out);
                while (!feof($fp)) {
                    $in .= fgets($fp, 128);
                }
            }
            fclose($fp);
            return ($in);
        }

        function SMSSend($phone, $msg, $debug = false)
        {
            global $user, $password, $senderid, $smsurl;

            $url = 'username=' . $user;
            $url .= '&password=' . $password;
            $url .= '&sender=' . $senderid;
            $url .= '&to=' . urlencode($phone);
            $url .= '&message=' . urlencode($msg);
            $url .= '&priority=1';
            $url .= '&dnd=1';
            $url .= '&unicode=0';


            $urltouse =  $smsurl . $url;
            if ($debug) {
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $urltouse);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            curl_close($ch);
            if ($debug) {
            }

            return ($response);
        }


        $phonenum = $_POST["admPhone"];
        $message = "Dear Student, thanks for enrolling for Demo of " . ($admCourse) . "Course at time with the CSL Training Center. We will contact you soon. For further information contact 989168667/9971024070.";
        $debug = true;
        SMSSend($phonenum, $message, $debug);
?>
        <script>
            alert("Your Demo Is Book! We Will Contact You Soon.");
            window.location = "index.php";
        </script>
<?php
    }
}
?>
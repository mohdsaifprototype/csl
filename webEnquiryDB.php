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
    $webName = $_POST["webName"];
    $webEmail = $_POST["webEmail"];
    $webPhone = $_POST["webPhone"];
    $webCourse = $_POST["webCourse"];
    $msg = $_POST["msg"];
    $otp = rand(10, 10000);

    $webSql = "insert into web_enquiry(web_name,web_email,web_phone,web_course,web_enquiry_date,message,otp,otp_time) values('$webName','$webEmail','$webPhone','$webCourse',CURRENT_DATE,'$msg','$otp',CURRENT_TIME)";
    if (mysqli_query($con, $webSql)) {
        $_SESSION["otp_phone"] = $webPhone;

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


        $phonenum = $_POST["webPhone"];
        $message = "Your OTP is " . $otp;
        $debug = true;
        SMSSend($phonenum, $message, $debug);
?>
        <script>
            alert("Thank You For Enquiry! We will contact you soon");
            window.location = "index.php";
        </script>
<?php
    }
}
?>
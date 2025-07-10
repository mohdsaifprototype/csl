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
    $admPhone = $_POST["admPhone"];
    $admEmail = $_POST["admEmail"];

    $otp = rand(1000, 9999);
    $upSQL = "select * from onlin_admission where phone='$admPhone'";
    $upRes = mysqli_query($con, $upSQL);
    if (mysqli_num_rows($upRes) > 0) {
        $admsql = "update onlin_admission set email='$admEmail', otp='$otp', otp_is_expired='1' where phone='$admPhone' ";
        if (mysqli_query($con, $admsql)) {
            $_SESSION["otp_phone"] = $admPhone;

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
            $message = "Confirm Your Phone Number with OTP. Your OTP is " . $otp;
            $debug = true;
            SMSSend($phonenum, $message, $debug);

?>
            <script>
                alert("Your Number Already Register.");
                window.location = "admission-form.php";
            </script>
        <?php
        }
    } else {
        $webSql = "INSERT INTO `onlin_admission`(`student_name`, `student_father_name`, `phone`, `email`, `otp`, `admission_date`) VALUES ('$admName','$admFather','$admPhone','$admEmail','$otp',CURRENT_DATE)";
        if (mysqli_query($con, $webSql)) {
            $_SESSION["otp_phone"] = $admPhone;

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
            $message = "Confirm Your Phone Number with OTP. Your OTP is " . $otp;
            $debug = true;
            SMSSend($phonenum, $message, $debug);
        ?>
            <script>
                //alert(" OTP Sent! Verify You Phone.");
                //window.location="admission-verify-otp.php";
                alert("Information is Submitted");
                window.location = "admission-form.php";
            </script>
<?php
        }
    }
}
?>
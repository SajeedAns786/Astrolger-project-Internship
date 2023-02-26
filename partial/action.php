<?php
    session_start();
if (isset($_POST['generateotp']) && !empty($_POST['mobile'])){
    $mobile = $_POST['mobile'];
    // Generate random OTP
    $otp = rand(1000, 9999);
    // Save OTP in session for verification
    $_SESSION['otp'] = $otp;
    
$url = 'http://45.114.143.23/api/mt/SendSMS?';
$message = "";
$message = urlencode($message);

$data = array(
    'user' => 'smhomes',
    'password' => 123456,
    'senderid' => 'homesb',
    'channel' => 'Trans',
    'DCS' => 0,
    'flashsms' => 0,
    'text' => 'Your One Time Password is '.$otp.'. Use this password to verify your Phone Number with homesb.',
    'number' => $mobile,
    'route' => 7,
    'peid' => 1701158073385284573,
    'dlttemplateid' => 1707167697553781815,
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if($response == false) {
    echo "Error sending OTP!";
} else{
    $status = 'ok';
    $sql = "INSERT INTO user SET mobile = '$mobile'";
    $res = mysqli_query($con, $sql);
    if ($res == false){
        die(mysqli_error($con));
    }else{
        $_SESSION['mobile'] = $mobile;
    }
}



}


?>
<?php
include('connect.php');
    session_start();
    
if (isset($_POST['generateotp'])){
    $mobile = $_POST['mobile'];
    // echo $mobile;
    // die();
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
        header("location:../login.php?mobile= $mobile");
    }
    
}

if(isset($_POST['signin'])) {
    
    $userOtp = $_POST['entered_otp'];
    if($userOtp == $_SESSION['otp']) {
        $mobile = $_POST['mobile'];
        $sql = "SELECT * FROM user WHERE   
        mobile = '$mobile'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_fetch_assoc($result);
        if ($num){
          $_SESSION['mobile'] = $mobile;
        //   echo $mobile;
        //   die();
          $_SESSION['id'] = $num['id'];
        header('location:../index.php');
          }
    
        }else {
            $sql = "INSERT INTO user SET mobile = '$mobile'";
            $res = mysqli_query($con, $sql);
            if ($res == TRUE) {
                $_SESSION['mobile'] = $mobile;
                // $_SESSION['email'] = $email;
                // echo $mobile;
                // die();
                header('location:../index.php');
            }  else {
                echo "Incorrect OTP!";
            }
        }
        // Perform authentication logic
    // 
    }

?>


<!-- Astrologer application -->
<?php

if (isset($_POST['submitlogin'])) {
    include('partial/connect.php');
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $fullname = $name1." ".$name2;
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $panid = $_POST['panid'];
    $gender= $_POST['gender'];
    $expertise = $_POST['expertise'];
    $description = $_POST['description'];
        
if(isset($_FILES['image']['name'])) {

    $image_name = $_FILES['image']['name'];
    if ($image_name != "") {
        $ext = end(explode('.', $image_name));
        $image_name = "astro_" . rand(000, 999) . '.' . $ext;
        $source_path = $_FILES['image']['tmp_name'];
        $destination_path = "imagesastro/" . $image_name;
        $upload = move_uploaded_file($source_path, $destination_path);
    }
}
 else {
    $image_name = "";
} 
    $sql = "INSERT INTO astrologin SET
    name = '$fullname',
    mobile = '$mobile',
    email = '$email',
    panid = '$panid',
    gender = '$gender',
    expertise = 'expertise',
    image = '$image_name',
    description = '$description'
    ";
    $res = mysqli_query($con, $sql);
    if ($res == TRUE) {
        header('location:../index.php');
    } else {
    die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <br>
    <br>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>
                    <p class="text-center mt-2">You will receive a 4 digit code <br> for verification </p>
                </span>
            </label>
            <form action="./partial/action.php" method="POST">
                <label>
                    <p>Enter your phone number</p>
                    <?php 
                    ini_set('display_errors', 0);
                    ini_set('log_errors', 0);
                    error_reporting(E_ERROR | E_PARSE);
                    $mobile = $_GET['mobile'];
                    //echo $mobile; ?>
                    <input class="" type="text" placeholder="Mobile Number" value="<?php echo $mobile; ?>"
                        style="height:36px" id="mobile" name="mobile" size="30" required>
                </label>

                <button type="submit" name="generateotp" class="submit ">Generate OTP</button>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">

                    <h3>Press Entered OTP button<h3>
                </div>
                <div class="img__text m--in">

                    <h3>To generate OTP.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Enter OTP</span>
                    <span class="m--in">Number</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Enter Your OTP</h2>
                <form action="./partial/action.php" method="POST">
                    <?php
                    $mobile = $_GET['mobile'];
                    ?>
                    <label>
                        <input name="mobile" type="hidden" value="<?php echo $mobile; ?>" />
                        <span>OTP</span>
                        <input name="entered_otp" type="number" />
                    </label>

                    <button type="submit" name="signin" class="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
    </script>
</body>

</html>
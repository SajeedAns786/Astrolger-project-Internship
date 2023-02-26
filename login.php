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
            <label>
                <p>Enter your phone number</p>
                <input class="mb-2" type="text" placeholder="Mobile Number" style="height:36px" id="mobile"
                    name="mobile" size="30" required>
            </label>

            <button type="button" class="submit">Generate OTP</button>

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
                <label>
                    <span>OTP</span>
                    <input type="number" />
                </label>

                <button type="button" class="submit">Sign in</button>

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
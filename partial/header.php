<!DOCTYPE html>
<?php
session_start();
include('partial/connect.php');
ini_set('display_errors', 0);
ini_set('log_errors', 0);
error_reporting(E_ERROR | E_PARSE);
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Astrokidunia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link href="./css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <?php include("connect.php")?>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.php">
                <img src="img/astro_logy.jpg" height="50" alt="Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"><button type="button" data-bs-target="#recharge" data-bs-toggle="modal"
                                class="btn btn-info">Recharge</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="astro_chat.php">
                            <button type="button" class="btn btn-outline-secondary mx-2 ">
                                <i class="bi bi-chat-left-text"></i> Chat With Astrologer</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="astro_talk.php">
                            <button type="button" class="btn btn-outline-secondary mx-2">
                                <i class="bi bi-telephone"></i>Talk to Astrologer</button></a>
                    </li>

                    <?php  
                        if ($_SESSION['mobile']) {
                        $id = $_SESSION['id'];
                          $mobile = $_SESSION['mobile'];
                          $sql = "SELECT * FROM user WHERE   
                          mobile = '$mobile'";
                        $result = mysqli_query($con, $sql);
                        if ($result){
                        while($row = mysqli_fetch_assoc($result)) {

                          echo '<div class="dropdown">
                          <a
                            class="dropdown-toggle text-dark mb-2"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                          >
                          <i class="bi bi-person-circle fa-2x"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li class="dropdown-item">'. $mobile.'</li>
                            <li><button class="dropdown-item edit" type="button" id="'.$id.'" data-bs-toggle = "modal">Update Profile</button></li>
                            <li><a class="dropdown-item" href="partial/logout.php">Logout</a></li>
                          </ul>
                        </div>';
            }
    }


                }else{
                    echo '<li class="nav-item">
                    <a type="button" href="./login.php" data-bs-toggle="modal"
                    class="mt-2 nav-item btn btn-warning btn-rounded"><i class=" bi bi-person-circle"></i>
                    Sign in </a>
                    </li>';
            }

?>

                </ul>
                <div class="d-flex align-items-center">
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- signin modal -->


    <!-- First modal dialog -->
    <!-- <div class="modal fade" id="signin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <h2 class="text-center">Continue with Phone</h2>
                        <div class="container">
                            <p class="text-center mt-2">You will receive a 4 digit code <br> for verification </p>
                            <p>Enter your phone number</p>
                            <div class="row">
                                <div class="col-sm-7">
                                    <input class="mb-2" type="text" placeholder="Mobile Number" style="height:36px"
                                        id="mobile" name="mobile" size="30" required>
                                </div>
                                <div class="col-sm-5">
                                    <button type="submit" onclick="submitContactForm()" id="myForm" name="generateotp"
                                        class="btn btn-warning fw-bold otp" data-bs-dismiss="modal">
                                        Generate OTP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Second modal dialog -->
    <!-- <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel22">Enter Your OTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <input class="mb-2" name="entered_otp" type="text" maxlength="4" placeholder="Enter Otp"
                            style="height:36px" size="35" autocomplete="off" required>

                        <button class="ms-4 mb-2 btn btn-success fw-bold" data-bs-target="#exampleModalToggle1"
                            data-bs-toggle="modal">
                            Submit
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <div class="modal fade" id="recharge" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container text-center">
                        <h2>Add Money to Wallet</h2>
                    </div>
                    <div class="container text-center">
                        <h4>Available balance:</h4>
                        <h2>&#8377;0</h2>
                    </div>
                    <h6>Popular recharge.</h6>
                    <div>
                        <!-- coupens -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Update modal -->

    <div class="modal fade" id="updateprofile" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- <button type="button" class="btn-close" style="float:right" data-bs-dismiss="modal"
                    aria-label="Close"></button> -->
                    <div class="wrapper">
                        <section class="signup" id="form">
                            <header>Update Your Profile</header>
                            <div id="info_update">

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
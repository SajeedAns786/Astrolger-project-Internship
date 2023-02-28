<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

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


    <link rel="stylesheet" href="/css/astroapplication.css">
</head>

<body>
    <section class="h-100 bg-dark">
        <form action="partial/action.php" method="post" enctype="multipart/form-data">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="img/hs.png" alt="Horoscope" class="img-fluid mt-5 ms-3" id="rotate"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase" id="txtheader">Astrologer Application</h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" name="name1"
                                                        autocomplete="off" required />
                                                    <label class="form-label">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" name="name2"
                                                        autocomplete="off" required />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="number" id="form3Example1m1"
                                                        class="form-control form-control-lg" name="mobile"
                                                        autocomplete="off" required />
                                                    <label class="form-label">Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="email" id="form3Example1n1"
                                                        class="form-control form-control-lg" name="email"
                                                        autocomplete="off" required />
                                                    <label class="form-label" for="form3Example1n1">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" class="form-control form-control-lg"
                                                name="panid" autocomplete="off" required />
                                            <label class="form-label" for="form3Example8">Pan ID No</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" id="femaleGender"
                                                    value="female" name="gender" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" id="maleGender"
                                                    value="male" name="gender" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                        </div>



                                        <div class="form-outline mb-4">
                                            <input type="file" id="form3Example9" class="form-control form-control-lg"
                                                name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" class="form-control form-control-lg"
                                                name="expertise" autocomplete="off" required />
                                            <label class="form-label" for="form3Example90">Expertise</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea type="textarea" id="form3Example99"
                                                class="form-control form-control-lg" name="description"
                                                autocomplete="off" required></textarea>
                                            <label class="form-label" for="form3Example99">About Yourself</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2"
                                                name="submitlogin">Submit form</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js">
    </script>
    <!-- ajax cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
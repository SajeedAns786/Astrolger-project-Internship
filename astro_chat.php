<?php include('partial/header.php')?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid bg-warning">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mx-5">
                <li class="breadcrumb-item fw-bold"><a class="nav-link" href="index.php">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a href="astro_chat.php">Chat with Astrologers</a></li>
            </ol>
        </nav>
    </div>
</nav>

<div class="container text-center mt-3 mb-3">
    <h2>Available Astrologer's</h2>
</div>


<!--Astrologers-->
<?php
if(!$_SESSION['id']){ ?>

<div class="container">
    <div class="row">

        <?php
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `astrologin` where available_astrologers = 1";
    $result = mysqli_query($con, $sql);
    if($result){

    while ($row = mysqli_fetch_assoc($result)) {
        $astro_name = $row['name'];
        $astro_profile = $row['image'];
        $astro_expertise = $row['expertise'];
        $astro_description = $row['description'];
?>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="profile.php?id='<?php echo $row['astro_id']; ?>'">
                        <img src="imagesastro/<?php echo $astro_profile; ?>"
                            style="height:150px ;width:150px ; border-radius : 50%" class="img-fluid" width="320"
                            height="220" alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="profile.php?id='<?php $row['astro_id']; ?>'" class=" text-dark"
                            style="text-decoration : none;">
                            <h5 class="card-title"> <?php echo $astro_name; ?></h5>
                        </a>
                        <p class="card-text" style="height:3em ; overflow:hidden"><?php echo $astro_description; ?></p>
                        <div class=" container text-center">
                            <button type="button" data-bs-toggle="modal" href="#signin"
                                class="btn btn-primary btn-rounded">
                                Chat </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
echo "<br>";
 }
?>
    </div>
</div>
<?php
} else{ ?>

<div class="container">
    <div class="row">

        <?php
        $id = $_SESSION['id'];
    $sql = "SELECT * FROM `astrologin` where available_astrologers = 1";
    $result = mysqli_query($con, $sql);
    if($result){

    
    while ($row = mysqli_fetch_assoc($result)) {
        $astro_name = $row['name'];
        $astro_profile = $row['image'];
        $astro_expertise = $row['expertise'];
        $astro_description = $row['description'];
?>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="profile.php?id='<?php echo $row['astro_id']; ?>'">
                        <img src="imagesastro/<?php echo $astro_profile; ?>"
                            style="height:150px ;width:150px ; border-radius : 50%" class="img-fluid" width="320"
                            height="220" alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="profile.php?id='<?php $row['astro_id']; ?>'" class="text-dark"
                            style="text-decoration : none;">
                            <h5 class="card-title"> <?php echo $astro_name; ?></h5>
                        </a>
                        <p class="card-text" style="height:3em ; overflow:hidden"><?php echo $astro_description; ?></p>
                        <div class=" container text-center">
                            <?php 
                            $sql1 = "SELECT * FROM user WHERE id = $id";
                            $result1 = mysqli_query($con, $sql1);
                            if($result1){
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                echo '<button type="button" onclick="myFunction()" id="'.$row1['id'].'"
                            class="btn btn-primary btn-rounded edit">
                            Chat </button>';       
                            }
                        }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
echo "<br>";
 }
?>
    </div>
</div>
<?php
}
?>

<?php include('partial/footer.php')?>
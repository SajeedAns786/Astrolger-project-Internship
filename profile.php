<?php include('partial/header.php')?>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `astrologin` where astro_id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $astro_name = $row['name'];
            $astro_profile = $row['image'];
            $astro_expertise = $row['expertise'];
            $astro_description = $row['description'];
            ?>


<div class="container">
    <h3 class="text-center mt-3">Talk to Our Astrologers</h3>
    <p class="p-3 mx-3">Solve your problems by speaking live with expert astrologers and get the effective solutions
        .Solve your problems by speaking live with expert astrologers and get the effective solutions </p>
</div>

<div class="container mb-3" style="border: 1px solid; 
padding :1rem ;">
    <img src="imagesastro/<?php echo $astro_profile; ?>" class="astro-profile" alt="">
    <h2 class="text-center"><?php echo $astro_name; ?></h2>
    <p><?php echo $astro_description; ?></p>
    <div class="text-center">
        <a href="#"><button type="button" class="btn btn-primary">Chat Now</button></a>
    </div>
</div>
<?php
}
}
?>
<?php include('partial/footer.php')?>
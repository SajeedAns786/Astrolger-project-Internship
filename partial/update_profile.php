<?php 
include('partial/connect.php');
if(isset($_REQUEST['id'])){
$id = $_POST['id'];
$sql = "SELECT * FROM `user` where id = $id";
$result = mysqli_query($con, $sql);
if($result){
while ($row = mysqli_fetch_assoc($result)){
  $name = $row['name'];
  $mobile = $row['mobile'];
  $email = $row['email'];
//   list($fname, $lname) = explode(' ', $name, 2);
  
  $name_parts = explode(" ", $name);
  $fname = $name_parts[0];
  $lname = $name_parts[1];
?>
<form action="actiondata.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="error-text"></div>
    <div class="name-details">

        <input type="hidden" name="id" placeholder="First name" value="<?php echo $row['id'] ?>">

        <div class="field input">
            <label>First Name</label>
            <input type="text" name="name1" autocomplete="off" placeholder="First name" value="<?php echo $fname ?>"
                required>
        </div>
        <div class="field input">
            <label>Last Name</label>
            <input type="text" name="name2" autocomplete="off" placeholder="Last name" value="<?php echo $lname ?>"
                required>
        </div>
    </div>

    <div class="field input">
        <label>Email Address</label>
        <input type="text" value="<?php echo $email ?>" name="email" placeholder="Enter your email" autocomplete="off"
            required>
    </div>

    <div class="field input">
        <label>Mobile</label>
        <input autocomplete="off" type="number" value="<?php echo $mobile ?>" name="mobile" disabled>
    </div>
    <div class="field image">
        <label>Select Image</label>
        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
    </div>
    <div class="field button">
        <input type="submit" name="submituser" value="Continue to Chat">
    </div>
</form>
<?php
}
}
}
?>
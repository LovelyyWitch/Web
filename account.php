<?php 
session_start();
$id_user = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="account.css">
  <link rel="stylesheet" href="register.css">
  <title>Document</title>
</head>
<body>
  <nav class= "navbar">
    <ul class="navlinks">
      <li><a href="home.php">Home</a></li>
      <a href="index.php">Log out</a>
    </ul>
  </nav>

  <div class="container">
    <div class="box form-box">
      <header>Booking Form</header>
      <form action="" method="POST">
        <div class="field input">
          <label for="nb_pets">Number of pets</label>
          <input type="number" name="nb_pets" id="nb_pets">
        </div>
        <div class="field input">
          <label for="check_in">Check in</label>
          <input type="date" name="check_in" id="check_in">
        </div>
        <div class="field input">
          <label for="check_out">Check out</label>
          <input type="date" name="check_out" id="check_out">
        </div>
        <label for="service">Service</label>
          <div class="field input-radio">
          <input type="checkbox" id="sitting" name="service[]" value="sitting">
          <label for="sitting">Pet Sitting - 20$/night </label>
          </div>
          <div class="field input-radio">
          <input type="checkbox" id="care" name="service[]" value="care">
          <label for="care">Pet Minding - 15$/pet </label>
        </div>
        <div class="field input-radio">
        <input type="checkbox" id="trainning" name="service[]" value="trainning">
          <label for="trainning">Pet Training - 50$/pet </label></div>
          <div class="field input-radio">
          <input type="checkbox" id="groom" name="service[]" value="groom">
          <label for="groom">Pet Grooming - 20$/pet</label></div>
        <input type="submit" name="next" value="Next" class="btn">
    </div>
  </div>

  <?php 
  include("php/config.php");
  if (isset($_POST["next"]))
  {
    $nb = $_POST['nb_pets'];
    $co = $_POST['check_out'];
    $ci = $_POST['check_in'];
    $selectedservices = $_POST['service'];
    $_SESSION['nb'] = $nb;
    $_SESSION['ci'] = $ci;
    $_SESSION['co'] = $co;
    $_SESSION['service'] = $selectedservices;

  $servicesString = implode(",", $selectedservices);
  $sql = "INSERT INTO booking (cl_id,services,check_in,check_out) VALUES ('$id_user','$servicesString','$ci','$co')";
  $result = mysqli_query($con,$sql) or die('error occured');
  $result_1 = mysqli_query($con,"SELECT * FROM booking WHERE cl_id = '$id_user'") or die('Select error');
  $row = mysqli_fetch_assoc($result_1);
  $_SESSION['bid'] = $row['bk_id']; 
  
  echo "<script> location.href='booking.php'; </script>";
  }
  ?>
  
  
</body>
</html>
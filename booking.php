<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>Booking</title>
</head>
<body>
  
</body>
</html>
<?php 
session_start();
$nb = $_SESSION['nb'] ;
$id_user = $_SESSION['id'] ;
$bid = $_SESSION['bid'];
include('php/config.php');

    if(isset($_POST['next'])){
      $pet_name = $_POST['pname'];
      $pet_age = $_POST['page'];
      $pet_gender = $_POST['pgender'];
      $allergies = $_POST['allergies'];
      $pet_type = $_POST['pet'];

      $sql = "INSERT INTO pets (bookid,pname,ptype,petage,pgender,allergies) VALUES('$bid','$pet_name','$pet_type','$pet_age','$pet_gender','$allergies')";
      $result = mysqli_query($con,$sql);
      $_SESSION['nb_forme']++;

      header("Location: {$_SERVER['REQUEST_URI']}");
      exit;
}

if(!isset($_SESSION['nb_forme'])){
  $_SESSION['nb_forme'] =0;
}

if($_SESSION['nb_forme']<$nb){
  include('animal_booking_form.php');
}
else{
  $price = 0;
  $check_in = strtotime($_SESSION['ci']);
  $check_out = strtotime($_SESSION['co']);
  $day_spent = floor(($check_out - $check_out)/ (60 * 60 * 24));
  foreach ($_SESSION['service'] as $key => $value){
    if($value == 'care')
    {
      $price += (15*$nb);
    }
    if($value == 'sitting')
    {
      $price += (20*$day_spent);
    }
    if($value == 'trainning')
    {
      $price += (50*$nb);
    }
    if($value == 'groom')
    {
      $price += (20*$nb);
    }
  
  }

    echo"
    <div class='container'>
    <div class='box form-box'>
    <div class='message'>
            <p>Thank you for choosing us ! Your total is $price $</p>
            </div><br>";
            echo "<a href='home.php'> <button class='btn'>See you there! </button></div></div>";
            $_SESSION['nb_forme'] = 0;
}



?>
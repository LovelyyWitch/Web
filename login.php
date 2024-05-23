<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>Log in</title>
</head>
<body>
  <div class="container">
    <div class="box form-box">
      <?php
      include("php/config.php");
      if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['pswd']);
        $result = -1;
        $result = mysqli_query($con,"SELECT * FROM compte WHERE Email ='$email' AND Mdp = '$password'") or die('Select error');
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
          $_SESSION['email'] = $row['Email'];
          $_SESSION['id'] = $row['id'];
      }
      else
      {
        echo "<div classe='message'>
        <p>Wrong Email or Password , Try again</p>
        </div> <br>";
        echo "<a href='index.php'> <button class='btn'>Go Back </button>";
      }

      if (isset($_SESSION['email'])){
        echo "<script> location.href='home.php'; </script>";
        exit;
      }
    }else{
      
      
      ?>
      <header>Log in</header>
      <form  action="" method="POST">
        <div class="field input">
          <label for="email">
            Email
          </label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="field input">
          <label for="pswd">
            Password
          </label>
          <input type="password" name="pswd" id="pswd" required>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login" class="btn">
        </div>
        <div class="links">
          Don't have account ? <a href="register.php">Sign up now</a>
        </div>
      </form>
    </div>
    <?php } ?>
  </div>
  
</body>
</html>
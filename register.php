<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>Sign up</title>
</head>
<body>
  <div class="container">
    <div class="box form-box">

    <?php
    include("php/config.php");
    if (isset($_POST["submit"]))
    {
      $Nom = $_POST["ename"];
      $Prenom = $_POST["prenom"];
      $email = $_POST["email"];
      $Mdp = $_POST["pswd"];
      
      $verify_query = mysqli_query($con,"SELECT Email FROM compte WHERE Email='$email'");

      if(mysqli_num_rows($verify_query) != 0)
      {
        echo "<div class='message'>
        <p> This Email is already used</p>
        </div> " ;
        echo "<a href='javascript:self.history.back()'> <button class='btn'>Go Back </button>";
      }
      else{
        mysqli_query($con,"INSERT INTO compte(Nom,Prenom,Email,Mdp) VALUES ('$Nom','$Prenom','$email','$Mdp')") or die('Error occured');
      }

      echo "<div class='message'>
        <p>Nice to have you among us $Nom ! </p>
        </div><br>";

        echo "<a href='index.php'> <button class='btn'>Log in Now </button>";

    }
    else{
    

    ?>


      <header>Sign up</header>
      <form  action="" method="POST">
        <div class="field input">
          <label for="ename">
            Name
          </label>
          <input type="text" name="ename" id="ename" required>
        </div>
        <div class="field input">
          <label for="prenom">
            Family Name
          </label>
          <input type="text" name="prenom" id="prenom" required>
        </div>
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
          <input type="submit" name="submit" value="Sign up" class="btn">
        </div>
        <div class="links">
          Already a member ? <a href="login.php">Sign in</a>
        </div>
      </form>
      
    </div>
    <?php } ?>
  </div>
  
</body>
</html>
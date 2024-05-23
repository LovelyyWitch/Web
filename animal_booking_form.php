<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="account.css">
  <title>Booking</title>
</head>
<body>
<nav class= "navbar">
    <ul class="navlinks">
      <li><a href="home.php">Home</a></li>
      <a href="logout.php">Log out</a>
    </ul>
</nav>
<div class="container">
    <div class="box form-box">
      <header>Booking Form</header>
      <form action="" method="POST">
        <div class="field input">
          <label for="pname">Pet name</label>
          <input type="text" name="pname" id="pname">
        </div>
        <div class="field input">
          <label for="pet">Pet is</label>
          <select name="pet" id="pet">
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          </select>
        </div>
        
        <div class="field input">
          <label for="pgender">Pet gender</label>
          <select name="pgender" id="pgender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          </select>
        </div>
        <div class="field input">
          <label for="page">Pet age(Y)</label>
          <input type="number" name="page" id="page">
        </div>
        <div class="field input">
          <label for="pweight">Pet weight(KG)</label>
          <input type="number" name="pweight" id="pweight">
        </div>
          <div class="field input-radio">
          <label for="allergies">Allergies</label>
          <select name="allergies" id="allergies">
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>
        </div>
        <input type="submit" name="next" value="Next" class="btn">
</form>
</div>
</div>
</body>
</html>
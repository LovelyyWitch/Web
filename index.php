<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Hotel PawSitive Friend</title>
</head>
<body>
  <nav class="navbar">
    <div class ="btn">
    <img class="Logo" src="img/service.png">
    <ul class="navlinks">
      <li><a href="#home" id="active">home</a></li>
      <li><a href="#service">services</a></li>
      <li><a href="#preview">inside</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
    <ul class="register">
    <a href="login.php" class="log_in">Log in</a>
    <a href="register.php" class="sign_up">Sign up</a>
    </ul>
</div>
    <img src="img/menu.png" class="menu-btn">
  </nav>
  

  <header>
    <div class="ctn" id="home">
    <h1>
      welcome to pawsitive pet hotel
    </h1>
    <h2>
      where we keep your paw friend happy and safe
    </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam possimus modi. Placeat sed tempora reprehenderit doloremque ab quidem sint non illum odit at.</p>
  </div>
  <div class="links">
    <a href="#service" class="button type--A">
      <div class="button__line"></div>
      <div class="button__line"></div>
      <span class="button__text">learn more</span>
      <div class="button__drow1"></div>
      <div class="button__drow2"></div>
    </a>
    <a href="#contact" class="button type--A">
      <div class="button__line"></div>
      <div class="button__line"></div>
      <span class="button__text">contact us</span>
      <div class="button__drow1"></div>
      <div class="button__drow2"></div>
    </a>
</div>
  </header>


  <section class="service" id="service">
    <div class="title">
    <h1>Choose how you want us to take care for you paw friend !</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores, cumque dolorem, hic quia sunt ullam consequatur dicta molestiae possimus, fugiat voluptates! Laudantium expedita hic pariatur dolore, doloremque ipsa sunt?</p>
  </div>
    <div class="row">
      <div class="slider">
        <div class="slides">
          <input type="radio" class="move" name="radio-btn" id="radio1">
          <input type="radio" class="move" name="radio-btn" id="radio2">
          <input type="radio" class="move" name="radio-btn" id="radio3">
          <input type="radio" class="move" name="radio-btn" id="radio4">
      <div class="col slide first">
        <img class="behind" src="img/welfare.png">
        <h1 class="e_title">Pet Sitting <br> 20$ per night</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" >learn more <img class="play" src="img/play.png"></a>
    </div>
      <div class="col slide">
        <img class="behind" src="img/care.png">
        <h1 class="e_title">Pet Minding <br> 15$ per animal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" >learn more <img class="play" src="img/play.png"></a>
      </div>
      <div class="col slide ">
        <img class="behind" src="img/teaching.png">
        <h1 class="e_title">Pet Training <br> 50$ per animal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" >learn more <img class="play" src="img/play.png"></a>
      </div>
      <div class="col slide ">
        <img class="behind" src="img/haircut.png">
        <h1 class="e_title">Grooming <br> 20$ per animal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" >learn more <img class="play" src="img/play.png"></a>
    </div>
    </div>
    
  <!--</div>
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
  </div>!-->
  </section>
<!--
  <section class="booking">
    <div class="bf-container">
      <form class="bf-body" action="form.php">
        <fieldset class="field">
          <legend>Booking Form</legend>
      <div class="bf-col">
        <div class="bf-row row1">
          <h2>Owner Information</h2>
          
          <label for="fname">Full Name</label>
          <input type="text" id="fname" name="fname" placeholder="Full name..." required>

          <label for="email">Email adress</label>
          <input type="email" id="email" name="email" placeholder="Email..." required>

          <label for="tel">Phone Number</label>
          <input type="tel" id="tel" name="tel" placeholder="+216 12-345-567" required>

          <label for="msg">Notes</label>
          <textarea id="msg" name="msg" rows="4" cols="50"></textarea>
          
        </div>

      <div class="bf-row">
        <h2>Pet Information</h2>

        <label for="Number">Pet number</label>
        <input type="number" id="number" name="number" min="1" max="5">

        <p>Select service<p>
        <input type="radio" id="sitting" name="service_sitting" value="Pet Sitting">
        <label for="sitting">Pet Sitting</label></br>

        <input type="radio" id="care" name="service_miding" value="Pet Minding">
        <label for="care">Pet Minding</label></br>

        <input type="radio" id="training" name="service_training" value="Pet Training">
        <label for="training">Pet Training</label></br>

        <input type="radio" id="grooming" name="service_grooming" value="Pet grooming">
        <label for="grooming">Pet Grooming</label></br>

        <label for="date_coming">Check-in date</label></br>
        <input type="date" id="date_coming" name="date_coming"></br>

        <lable for="date_leaving">Check_out date</lable></br>
        <input type="date" id="date_leaving" name="date_leaving">

      </div>

      </div>
      <div class="bouton">
        <input type="reset" name="reset" value="Clear">
        <input type="submit" name="valider" value="Submit">
      </div>
    </fieldset>
      </form>
    </div>
  </section> !-->

  <section class="preview" id="preview">
    <div class="titre">
    <h1>what's inside the hotel</h1>
    </div>
    <div class="rows">
      <div class="columns">
        <img class="prev_img" src="img/e10adb13acb1f3da8724a9149a58bd00.jpg">
        <a>Bedroom</a>
      </div>
      <div class="columns">
        <img class="prev_img" src="img/R (2).jpg">
        <a>PlayGround</a>
      </div>
      </div>
      <div class="rows">
      <div class="columns">
        <img class="prev_img" src="img/OIP (1).jpg">
      <a>Chill Area</a>
    </div>
      <div class="columns">
        <img class="prev_img" src="img/OIP (2).jpg">
        <a>Vet</a>
      </div>
      </div>
    
  



  </section>

  <footer>
    <div class = footer id="contact">
      <div class="cord">
        <div class = "rw">
        <h1>Contact information</h1>
      </div>
      <div class = "rw">
        
        <h4><img class="f_img" src="img/cartes-et-drapeaux.png">9878/25 sec 9 rohini 35</h4>
        </div>
        <div class = "rw">
        
        <h4><img class="f_img" src="img/appel-telephonique.png">+91-9999878398</h4>
        </div>
        <div class="rw">
          
          <h4><img class="f_img" src="img/email.png">info@example.com</h4>
        </div>
      </div>

    <div class="navi">
      <h1>Navigation</h1>
      <div class="navi-ctn">
      <a href=#> Home</a>
      <a href=#>  Services</a>
      <a href=#> Inside</a>
</div>
    </div>

    <div class="Follow">
      <h1>Follow Us</h1>
      <div class="f_ctn">
      <h4><img class="f_img" src="img/facebook.png">Facebook</h4>
      <h4><img class="f_img" src="img/instagram.png">Instagram</h4>
      <h4><img class="f_img" src="img/twitter.png">X</h4>
</div>
</div>
<div>
    
</footer>

  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true
      counter++ 
      if(counter >4){
        counter = 1
      }

    },5000);
  </script>
  <script>
    const menubtn = document.querySelector('.menu-btn');
    const navlinks = document.querySelector('.btn');
    const register = document.querySelector('.register');
    menubtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu');
    });
</script>



</body>
</html>
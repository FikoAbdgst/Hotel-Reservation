	
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOTEL HEBAT</title>
	<link rel="stylesheet" type="text/css" href="fiko_tamu.css">

</head>
<body>
	<nav>
		<div class="logo" >
            HOTEL
         </div>
          <div class="logo1">HEBAT</div>
          <ul class="">
            <li><a class="active" href="fiko_tamu.php">Home</a></li>
            <li><a href="fiko_lihat_tamu.php">Kamar</a></li>
            <li class="dropdown">
            <a href="#"  class="dropbtn">*</a>
            <div class="dropdown-content">
            <a href="profil.php"> Profile</a>
            <a href="../fiko_logout_tamu.php" >Log Out</a>
         </ul>
         
	
	</nav>
	<div class="box">

    <div class="img-slider">
      
      <div class="slide active">
        <img src="../img/1.jpg" alt="" width="200px" height="500px">
      </div>
      <div class="slide">
        <img src="../img/2.jpg" alt="" width="200px" height="500px">
        
      </div>
      <div class="slide">
        <img src="../img/3.jpg" alt="" width="200px" height="500px">
        
      </div>
      <div class="slide">
        <img src="../img/10.jpg" alt="" width="200px" height="500px">
        
      </div>
      <div class="slide">
        <img src="../img/12.jpg" alt="" width="200px" height="500px">
        
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>
    
	</div>
	<h1 align="center">Tentang Kami</h1>
	<p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	
	<script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

</body>
</html>
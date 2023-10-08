<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOTEL HEBAT</title>
	<link rel="stylesheet" type="text/css" href="fiko_index2.css">

</head>
<body>
	<nav>
     <div class="logo" >
            HOTEL
         </div>
          <div class="logo1">HEBAT</div>
  
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
    <h2><img src="../img/13.jpeg" width="200px" height="40px" style="margin-left: 60px; margin-top: 60px;"> Rating: 8.9/10 · ‎3,984 reviews </h2>
    <h2 style="margin-left: 80px;"> ‎Price range: room rates from $92 per night (USD) - We Price Match!</h2>
</div>
<nav>
  <ul class="">
            <li><a href="fiko_index.php">Home</a></li>
            <li><a class="aktif" href="fiko_tipe_home.php">Tipe Kamar</a></li>
            <li><a href="fiko_fasilitas_home.php">Fasilitas</a></li>
            <li><a href="../fiko_login_tamu.php">Masuk</a></li>
            
         </ul>
</nav>
<div class="box1" style="border-radius: 10px;">
  <?php
session_start();
  include '../fiko_koneksi.php';

  $fiko_data = mysqli_query($fiko_koneksi,"select * from fiko_tipe_kamar");
   while($fiko_d = mysqli_fetch_assoc($fiko_data)){
                        
?>  
<div class="box2" style="">
  <br> 
      <h2><?php echo $fiko_d['fiko_tipe_kamar']?></h2>
      <img src="../fiko_tipe_kamar/upload/<?php echo $fiko_d['fiko_foto']?>" width="320px" height="200px">
      <p><?php echo $fiko_d['fiko_deskripsi'];?></p>
      <h3><input style="margin-left: 0px; border-radius: 10px;" type="" name="" value="<?php echo $fiko_d['fiko_fasilitas']?>" readonly> </h3>
      <h4>Rp.<?php echo number_format($fiko_d['fiko_harga'])?></h4>
      
 
  
</div>
      <?php
    }
  ?>
</div>
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

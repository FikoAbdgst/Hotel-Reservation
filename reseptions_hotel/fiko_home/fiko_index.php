<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOTEL HEBAT</title>
	<link rel="stylesheet" type="text/css" href="fiko_index2.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap5/css/bootstrap.min.css">

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
    
    <h2><img src="../img/13.jpeg" width="200px" height="40px" style="margin-left: 60px; margin-top: 100px;"> Rating: 8.9/10 · ‎3,984 reviews </h2>
    <h2 style="margin-left: 80px;"> ‎Price range: room rates from $92 per night (USD) - We Price Match!</h2>
</div>
<nav >
  <ul class="">
            <li><a class="aktif" href="fiko_index.php">Home</a></li>
            <li><a href="fiko_tipe_home.php">Tipe Kamar</a></li>
            <li><a href="fiko_fasilitas_home.php">Fasilitas</a></li>
            <li><a href="../fiko_login_tamu.php">Masuk</a></li>
            
         </ul>
</nav>
<div class="box1" style="text-align: center;">
<h2>Tipe kamar tersedia</h2>
                <form method="get" >
                <input type="date" name="fiko_in">
                <input type="date" name="fiko_out">
                <input type="submit" name="fiko_cari" value="cari">
            </form>
            <br>

     <?php  
     include '../fiko_koneksi.php';
     if(isset($_GET['fiko_cari'])){
        $fiko_mulai = $_GET['fiko_in'];
        $fiko_selesai = $_GET['fiko_out'];

        if ($fiko_mulai!=null and $fiko_selesai!=null) {
        $fiko_ambil = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_tipe_kamar");
        while($fiko_kamar = mysqli_fetch_assoc($fiko_ambil)){
        
        ?> 
        <div class="box2" style="padding-top: 10px;">

                <?php 
                 if (!empty($fiko_kamar['fiko_jumlah_bed'])){?>
               
                    <img src="../fiko_tipe_kamar/upload/<?php echo $fiko_kamar['fiko_foto'] ?>" alt="" width="250px" height="150px">
                    <h1><?php echo $fiko_kamar['fiko_tipe_kamar']; ?></h1>
                    <h3>Harga Rp. <?php echo number_format($fiko_kamar['fiko_harga']); ?></h3> 
                    <h3>Tersedia : <?php echo $fiko_kamar['fiko_jumlah_bed']; ?></h3>
                   
                    
               <?php
             }elseif (empty($fiko_kamar['fiko_jumlah_bed'])) {?>
                    <img src="../fiko_tipe_kamar/upload/<?php echo $fiko_kamar['fiko_foto'] ?>" alt="" width="250px" height="150px">
                    <h1><?php echo $fiko_kamar['fiko_tipe_kamar']; ?></h1>
                    <h3>Harga Rp. <?php echo number_format($fiko_kamar['fiko_harga']); ?></h3>  
                    <h3 style="color: red;">Kamar Tidak Tersedia</h3>
                   
                   
            <?php
          } ?></div>
          <?php
                  }   
                    
                   

                  }
                }else {}

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

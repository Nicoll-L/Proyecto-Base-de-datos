<?php include("db2.php"); ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Maker</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" type="image/x-icon" href="images/logo.png">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.html">Home</a>
         <a href="#about">Nosotros</a>
         <a href="#we_Do">Nuestros servicios</a>
         <a href="#team">Nuestro equipo de trabajo</a>
         <a href="#contact">Contactanos</a>
      </div>
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="sea_icon d_none ">
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>IMPRESIÓN</h1>
                           <span>3D</span>
                           <a class="read_more" href="pages/prices.html">Conoce más</a>
                           <ul class="social_team">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>Piezas</h1>
                           <span>de impresión</span>
                           <a class="read_more" href="php_crud_mysql/index.php">Conoce más</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <div id="about" class="about">
         <div class="container">
            <div class="row ">
               <div class="col-md-5">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>Nosotros</h2>
                           <p> Somos una empresa comprometida con el crecimiento de los emprendimientos y proyectos de impresión 3D en colombia.</p>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="about_img">
                           <figure><img src="images/about_img.jpg" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_right">
                     <figure><img src="images/about_right.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="software">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Quienes somos</h2>
                     <p>Somos tres empresarios colombianos convencidos de que la educación es el medio para superar las desigualdades en nuestro país y Latino América. Además, creemos firmemente que la adopción de nuevas tecnologías debe ir acompañada de procesos de capacitación y entrenamiento para aprovechar todo el potencial que brinda.  </p>
                  </div>
               </div>
               <div class="col-md-6 padding_right2">
                  <div class="software_img">
                     <figure><img src="images/software_img.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="we_Do" class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nuestros servicios</h2>
                     <p>Estos son nuestros principales servicios  </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>1</span>
                     <h3>Impresiones 3D</h3>
                     <p>Las impresiones 3D se pueden realizar con diferentes materiales como lo es el filamento PLA, UTP, NAILON, entre otros, ademas de filamento tambien podemos imprimir tambien en resina, ya que contamos con diferentes impresoras </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>2</span>
                     <h3>Venta de impresoras 3D y filamento</h3>
                     <p> Tenemos diferentes tipos de impresoras para la venta, ademas de que con cada una de ellas se pueden manejar diversos materiarles para los proyectos que necesites. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>3</span>
                     <h3>Servicio tecnico para impresoras</h3>
                     <p>Ofrecemos diferentes servicios para impresoras 3d desde limpieza, hasta solución de diferentes problemas. Ademas en este servicio puede llegar al establecimiento y dejarla impresora o incluso recibirlo a domicilio </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nuestro equipo de trabajo</h2>
                     <p>Somos un grupo de profesionales expertos en impresoras y impresiones 3D .Te asesoramos en la implementación de nuevas tecnologías en tu modelo de negocio, contáctanos
                     </p>
                  </div>
               </div>
            </div>
            <div>
               <div class="col-md-12">
                  <div class="team_box">
                     <figure><img src="images/" alt="#"/></figure>
                     <div class="social_box">
                        <ul class="social_team">
                           <li><a href="https://twitter.com/nlopezl1004?t=tPAPOBX2EfMZBfIDjdba2Q&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.linkedin.com/in/nicoll-l%C3%B3pez-lozano-0a6032225"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="https://instagram.com/lopeznicoll16?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Nicoll López</h3>
                        <p>Ingeniera de sistemas</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Solicitar una llamada o correo</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <form action="save_inf.php" method="POST" id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Nombre" type="type" name="Nombre"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Telefono" type="type" name="Telefono">                          
                           </div>
                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Mensaje" type="type" name="Mensaje">
                           </div>
                           <input type="submit" name="save_inf" class="btn btn-success btn-block" value="Enviar">
                           <div class="col-md-12">
                              <ul class="location_form">
                                 <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    (+57) 320 441 76 63
                                 </li>
                                 <li><a href="https://www.google.com/intl/es-419/gmail/about/"><i class="fa fa-envelope" aria-hidden="true"></i></a>nlopezl1004@gmail.com</li>
                              </ul>
                           </div>
                           <div class="col-md-12">
                              <ul class="social_icon">
                                 <li><a href="https://twitter.com/nlopezl1004?t=tPAPOBX2EfMZBfIDjdba2Q&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="https://instagram.com/lopeznicoll16?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_right2">
                     <div class="map_section">
                        <div id="map">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Contactanos </h3>
                        <ul class="location_icon">
                           <li><a href="https://www.google.com/maps?q=bogota+dc&rlz=1C1ALOY_esCO978CO978&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj4qfuS6737AhXDTjABHdsVCHcQ_AUoAXoECAIQAw"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Bogota D.C.</li>
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                              (+57) 320 441 76 63
                           </li>
                           <li><a href="https://www.google.com/intl/es-419/gmail/about/"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> nlopezl1004@gmail.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Recibir información</h3>
                        <form class="news_form">
                           <input class="letter_form" placeholder=" Email" type="text" name="Email">
                           <button class="sumbit">Subscribe</button>
                        </form>
                        <ul class="social_icon">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      <script>
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 4.60971, lng:  -74.08175},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 4.60971, lng:  -74.08175},
             map: map,
             icon: image
           });
         }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
   </body>
</html>


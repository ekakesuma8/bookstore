<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Amanu Book Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="frontend/css/style.css">
      <link href="sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Responsive-->
      <link rel="stylesheet" href="frontend/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="frontend/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="frontend/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div id="myNav" class="menu_sid">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="menu_sid-content">
            <a href="#protien">Our Protien</a>
            <a href="#about">About Us</a>
            <a href="#testimonial">Testimonial</a>
            <a href="#contact">Contact Us</a>
         </div>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="menu_sitbar">
            <ul class="menu">
               <li><button type="button" >
                  <img style="" onclick="openNav()" src="frontend/images/menu_icon.png" alt="#"/>
                  </button>
               </li>
            </ul>
            <ul class="social_icon">
               <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
         </div>
         <div class="header_full_bg">
            <div class="header_top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="logo">
                           <a href="index.html"><img src="frontend/images/logo.png" alt="#"/></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="banner_text">
                           <h1>Amanu<br> Book Store </h1>
                           
                        </div>
                     </div>
                     <div class="col-md-7">
                        <img class="bann_img" src="frontend/images/banner.jpg" alt="#"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- our protien  -->
      <div id="protien" class="protien_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Book</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach($data_buku as $buku)
               <div class="col-md-3 col-sm-6">
                  <div class="protien">
                     <figure><img src="frontend/images/buku1.jpg" alt="#"/></figure>
                     <h3>{{ $buku->edisi }}</h3>
                     <span> {{ $buku->judul }} </span>
                     <a class="read_more mar_top" href="Javascript:void(0)"> Buy Now</a>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- end our protien  -->
      <!-- about -->
     
      <!-- end about -->
      <!-- growyhing -->
    
      <!-- end growyhing -->
      <!-- testimonial -->
    
      <!-- end testimonial -->
      <!--  contact -->
    
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="daih_bg">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <ul class="conta">
                           <li><i class="fa fa-phone" aria-hidden="true"></i> Call Now  +6252778899</li>
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> Amanu@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                    
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <p class="variat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum </p>
                  </div>
                  <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                     <h3>Information  </h3>
                     <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                     <h3>Helpful Links</h3>
                     <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                     <h3>Supported</h3>
                     <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                     </ul>
                  </div>
                  <div class="col-sm-12">
                     <ul class="social2_icon">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2023 Copyright by Amanu All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="frontend/js/jquery.min.js"></script>
      <script src="frontend/js/bootstrap.bundle.min.js"></script>
      <script src="frontend/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="frontend/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>
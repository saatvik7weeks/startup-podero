<?php
$servername = "localhost";
$usm = "root";
$pass = "";
$db = "startupoderoventures";
$conn = mysqli_connect($servername, $usm, $pass, $db);
?>
<?php

if (isset($_POST['submit'])) {
   $title = $_POST['title'];
   $user_name = $_POST['user_name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $city = $_POST['city'];
   $event_type = $_POST['event_type'];
   $category = $_POST['category'];
   $event_date = date('Y-m-d', strtotime($_POST['event_date']));
   $event_time = date('h:i', strtotime($_POST['event_time']));
   if ($title == "" || $user_name == "" || $email == "" || $phone == "" || $city == "" || $event_type == "" || $category == "" || $event_date == "" || $event_time == "") {
      $_SESSION['status'] = "Please enter all credentials";
      function_alert($_SESSION['status']);
   } else {
      $query = "INSERT INTO hostevent (title, user_name, email, phone, city, event_type, category, event_date, event_time) VALUES ('$title', '$user_name', '$email', '$phone', '$city', '$event_type', '$category', '$event_date', '$event_time')";
      $run = mysqli_query($conn, $query);
      if ($run) {
         $_SESSION['status'] = "Host an Event Form Sucessfully Submitted";
         function_alert($_SESSION['status']);
      } else {
         $_SESSION['status'] = "details not filled completely";
         function_alert($_SESSION['status']);
      }
   }
}
?>
<?php
// PHP program to pop an alert 
// message box on the screen 

// Function definition 
function function_alert($message)
{

   // Display the alert box  
   echo "<script>alert('$message');</script>";
}
// header("location:hostevent.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" href="img/logo.jpg">
   <!-- GOOGLE FONTS CDN LINK -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- CSS LINK -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- AOS ANIAMATION PLUGIN -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- OWL CAROUSEL PLUGIN -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- MAGNIFIC POPUP PLUGIN -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/custom.css">
   <!--ICONS-->
   <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
   <title>StartUpPodero</title>
   <style>
      .host-header p {
         color: #666;
         font-family: 'Rubik', sans-serif;
         font-size: 16px;
         margin-bottom: 0;
      }

      p {
         margin-top: 0;
      }

      input[type=text],
      input[type=tel],
      input[type=date],
      select[type=text] {
         width: 100%;
      }

      i {
         height: 40px;
      }
   </style>
</head>

<body>

   <!-- ======================================== NAVIGRATION ======================================== -->
   <nav id="navigration" class="navbar fixed-top p-0">
      <div class="container">
         <!-- <a class="logo" href="#"><img src="img/logo.png" alt=""></a> -->
         <a class="logo" href="#"><img style="height: 50px;" src="img/logo.png"> </a>
         <div class="sidenav">
            <div class="header">
               <a class="logo d-lg-none" href="#">StartUpPodero Ventures </a>
               <a href="#" class="d-lg-none" id="showsidenav"><img src="img/icon/letter-x.png" alt=""> </a>
            </div>
            <ul class="mb-0">
               <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="aboutus.html">About US</a></li>

               <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="collapse" href="service.html">Our Packages <i class="fal fa-angle-down"></i></a>
                  <div id="menu2" class="dropdown-menus collapse">
                     <a class="dropdown-item" href="service.html"><span>Services</span></a>
                     <a class="dropdown-item" href="#"><span>Services Details</span></a>
                  </div>
               </li>
               <li class="nav-item"><a class="nav-link" href="Community.html">My Community</a></li>

               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="collapse" href="">Blogs <i class="fal fa-angle-down"></i></a>
                  <div id="menu3" class="dropdown-menus collapse">
                     <a class="dropdown-item" href="blogs.html"><span>Blog</span></a>
                     <a class="dropdown-item" href="success.html"><span>success stories</span></a>
                     <a class="dropdown-item" href="teams.html"><span>Our Teams</span></a>

                  </div>
               </li>
               <li class="nav-item"><a class="nav-link" href="event.html">Events</a></li>

               <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
         </div>
         <!-- <button class="btn font-btn get-quote d-none d-md-block"><i class="fal fa-chevron-right"></i> <span>Get A Quote</span></button> -->
         <div id="hamburger" class="d-lg-none">
            <img src="img/icon/menu.png" class="img01" alt="">
         </div>
      </div>
   </nav>
   <!-- ======================================== PAGE HEADER ======================================== -->
   <section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>HOSTING EVENT<span>.</span></h2>
                        <p><a href="index.html">HOME</a><span>/</span>Event Hosting</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- ======================================== HOSTING AN SECTION ======================================== -->
   <section id="HostSection">
      <div class="container">
         <center>
            <h2>Organize an Event</h2>
            <h3 style="color:orangered;">Please Fill Complete details</h3>
         </center>
         <br>
         <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
               <div class="host-header">
                  <h2 style="color:black;font-size:70px;font-weight:300px;line-height: .9;">IGNITE YOUR FUTURE<span style="color:orangered;">.</span></h2>
                  <p>
                     Join us for an electrifying evening of innovation and networking! Discover the future of tech with groundbreaking startups at our exclusive event.
                  </p>
                  <br>
                  <p>
                     Panel discussions on emerging trends and challenges in the IT startup ecosystem.
                  </p>
                  <br>
                  <p>
                     Interactive workshops on scaling strategies, product development, and funding opportunities.
                  </p>
                  <br>
                  <p>
                     Networking sessions to connect with potential investors, mentors, and collaborators.
                  </p>
                  <br>
                  <p>
                     Refreshments and entertainment to foster a vibrant atmosphere for idea exchange and collaboration.
                  </p>
               </div>
            </div>
            <div class="col-lg-6">
               <form action="hostevent.php" method="POST" class="myForm ml-5 mr-5" id="myform1" data-wow-duration="1.5s">
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-pencil"></i>
                     </div>
                     <input type="text" class="form-control" id="floatingName" name="title" placeholder=" Enter Event Title *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-user"></i>
                     </div>
                     <input type="text" class="form-control" id="floatingName" name="user_name" placeholder=" Enter Your Name *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-square-envelope"></i>
                     </div>
                     <input type="text" class="form-control" id="floatingName" name="email" placeholder=" Enter Your Email *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-mobile"></i>
                     </div>
                     <input type="tel" class="form-control" id="floatingName" name="phone" placeholder=" Enter Mobile Number *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-location-dot"></i>
                     </div>
                     <input type="text" class="form-control" id="floatingName" name="city" placeholder="Enter City *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-users"></i>
                     </div>
                     <select type="text" class="form-control" id="floatingName" name="event_type" placeholder="Enter type of an Event *" required>
                        <option value="online">Virtual-(Online)</option>
                        <option value="offline">In-Person-(Offline)</option>
                     </select>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-layer-group"></i>
                     </div>
                     <input type="text" class="form-control" id="floatingName" name="category" placeholder=" Enter Category *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-calendar-days"></i>
                     </div>
                     <input type="date" class="form-control" id="floatingName" name="event_date" placeholder=" dd/mm/yyyy *" required>
                  </div>
                  <div class="d-flex flex-row">
                     <div class="form-floating ml-5 mr-4 mb-3">
                        <i class="fa-solid fa-clock"></i>
                     </div>
                     <input type="time" class="form-control" id="floatingName" name="event_time" placeholder=" Enter time *" required>
                  </div>
                  <center><button type="submit" name="submit" value="submit" class="btn layer-btn">SUBMIT</button></center>
            </div>
         </div>
      </div>
   </section>
   <br>
   <!-- ======================================== FOOTER SECTION ======================================== -->
   <section id="footerSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box">
                  <a href="#" class="logo">StartUpPodero Ventures </a>
                  <p class="about">
                     Welcome to StartUpPodero Ventures, where we craft cutting-edge websites and apps, and host dynamic events that empower your business's growth!</p>
                  <div class="social-links">
                     <a href="https://www.linkedin.com/company/startupodero/"><i class="fab fa-linkedin"></i></a>
                     <a href="https://www.instagram.com/startupoderoventures?igsh=bm9ycHkyOWlneTBr"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.facebook.com/profile.php?id=61558936349282"><i class="fab fa-facebook"></i></a>
                     <a href="https://chat.whatsapp.com/Ca7ZhGCB3uS2fN1wwpgH4T"><i class="fab fa-whatsapp"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box box2">
                  <p class="title">EXPLORE</p>
                  <ul>
                     <li><a href="contact.php">Support</a></li>
                     <li><a href="policies.html">Privacy Policies</a></li>
                     <li><a href="terms.html">Terms & Conditions</a></li>
                     <li class="mb-0"><a href="contact.php">Help</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
               <div class="footer-box box3">
                  <p class="title">CONTACT</p>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="txt">
                        <span>Address: Hanuman Nagar, Chaitanyapuri, Hyderabad, Telangana, India, 500060</span>
                     </div>
                  </div>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="txt">
                        <span>startupodero@gmail.com</span>
                     </div>
                  </div>
                  <div class="icon-box mb-0">
                     <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                     </div>
                     <div class="txt">
                        <span>+91 9966946187</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="footer-box box4">
                  <p class="title">NEWSLETTER</p>
                  <form>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                     </div>
                     <button type="submit" class="btn" name="button"><i class="fal fa-envelope"></i></button>
                  </form>
                  <span>Sign up for our latest news & articles. We won’t give you spam mails.</span>
               </div>
            </div>
         </div>
         <div class="copy-right">
            <div class="row">
               <div class="col">
                  <span> Copyright &copy;2024 <a href="https://tsbridgeedu.in/" target="_blank" style="color: rgb(63, 63, 189); font-size: 22px;"> TS Bridge Edu.</a> All rights reserved.</span>

               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- ======================================== SCROLL TO TOP ICON ======================================== -->
   <a href="#" class="scroll-up">
      <i class="fal fa-chevron-up"></i>
   </a>


   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/font-awesome-pro.js"></script>
   <!-- SCROLL ANIAMATION Plugin -->
   <script src="js/wow.min.js"></script>
   <!-- MIXIT UP Plugin -->
   <script src="js/mixitup.min.js"></script>
   <!-- MAGNIFIC POPUP Plugin -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- CounterUp Plugin -->
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- OWL CAROUSEL Plugin -->
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>
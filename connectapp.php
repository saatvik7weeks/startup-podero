<?php

if (!isset($_POST["event_name"])) {
   header("location: allevent.php");
}
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
   <title>StartUpPodero</title>
</head>

<body>



   <!-- ======================================== NAVIGRATION ======================================== -->
   <nav id="navigration" class="navbar fixed-top p-0">
      <div class="container">
         <!-- <a class="logo" href="#"><img src="img/logo.png" alt=""></a> -->
         <a class="logo" href="#"><img style="height: 50px;" src="img/Logo.png"> </a>
         <div class="sidenav">
            <div class="header">
            </div>
            <a class="logo d-lg-none" href="#">StartUpPodero Ventures </a>
            <a href="#" class="d-lg-none" id="showsidenav"><img src="img/icon/letter-x.png" alt=""> </a>
         </div>
         <ul class="mb-0">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.html">About US</a></li>

            <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="packages.html">Our Packages</a></li>


            <li class="nav-item"><a class="nav-link" href="community.html">My Community</a></li>

            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="collapse" href="#menu3">Blogs <i class="fal fa-angle-down"></i></a>
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
                        <h2>Event registration<span>.</span></h2>
                        <p><a href="index.html">HOME</a> <span>/</span> CONNECT</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <?php if (isset($_POST['event_name'])) : ?>
      <div style="background-color: aliceblue;" class="container">

         <form class="well form-horizontal" action=" " method="post" id="contact_form">
            <fieldset>

               <!-- Form Name -->
               <legend>Register Now to join the Event</legend>

               <!-- event title  -->
               <div class="form-group">
                  <label class="col-md-4 control-label">Event Title</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="event_name" value="<?php echo $_POST['event_name'];
                                                      endif; ?>" class="form-control" type="text" disabled>
                     </div>
                  </div>
               </div>
               <!-- Text input-->

               <div class="form-group">
                  <label class="col-md-4 control-label">First Name</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="first_name" placeholder="First Name" class="form-control" type="text">
                     </div>
                  </div>
               </div>

               <!-- Text input-->

               <div class="form-group">
                  <label class="col-md-4 control-label">Last Name</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                     </div>
                  </div>
               </div>

               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                     </div>
                  </div>
               </div>


               <!-- Text input-->

               <div class="form-group">
                  <label class="col-md-4 control-label">Phone #</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                     </div>
                  </div>
               </div>

               <!-- Text input-->

               <div class="form-group">
                  <label class="col-md-4 control-label">Address</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="address" placeholder="Address" class="form-control" type="text">
                     </div>
                  </div>
               </div>

               <!-- Text input-->

               <div class="form-group">
                  <label class="col-md-4 control-label">City</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="city" placeholder="city" class="form-control" type="text">
                     </div>
                  </div>
               </div>

               <!-- Select Basic -->

               <div class="form-group">
                  <label class="col-md-4 control-label">State</label>
                  <div class="col-md-4 selectContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker">
                           <option value=" ">Please select your state</option>
                           <option>Select State</option>
                           <option>Andhra Pradesh</option>
                           <option>Arunachal Pradesh</option>
                           <option>Assam</option>
                           <option>Bihar</option>
                           <option>Chhattisgarh</option>
                           <option>Goa</option>
                           <option>Gujarat</option>
                           <option>Haryana</option>
                           <option>Himachal Pradesh</option>
                           <option>Jharkhand</option>
                           <option>Karnataka</option>
                           <option>Kerala</option>
                           <option>Madhya Pradesh</option>
                           <option>Maharashtra</option>
                           <option>Manipur</option>
                           <option>Meghalaya</option>
                           <option>Mizoram</option>
                           <option>Nagaland</option>
                           <option>Odisha</option>
                           <option>Punjab</option>
                           <option>Rajasthan</option>
                           <option>Sikkim</option>
                           <option>Tamil Nadu</option>
                           <option>Telangana</option>
                           <option>Tripura</option>
                           <option>Uttar Pradesh</option>
                           <option>Uttarakhand</option>
                           <option>West Bengal</option>
                           <option>Andaman and Nicobar Islands</option>
                           <option>Chandigarh</option>
                           <option>Dadra and Nagar Haveli and Daman and Diu</option>
                           <option>Delhi</option>
                           <option>Lakshadweep</option>
                           <option>Puducherry</option>
                        </select>
                     </div>
                  </div>
               </div>







               <!-- Success message -->
               <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for Registering, we will get back to you shortly.</div>

               <!-- Button -->
               <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4">
                     <button type="submit" class="btn" style="background: orangered; color: white;">Register <span class="glyphicon glyphicon-send"></span></button>
                  </div>
               </div>

            </fieldset>
         </form>
      </div>
      </div><!-- /.container -->




      <div id="phone">
         <img style=" height: 500px; margin-left: 50%; margin-top: -70%; " src="img/phone.png" alt="">
      </div>



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
                           <span>tysonchandu81@gmail.com</span>
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
      <script>






      </script>
</body>

</html>
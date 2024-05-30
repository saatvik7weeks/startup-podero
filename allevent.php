<?php
Session_start();
include_once("database/db.php");

// SQL query to retrieve data from the events table
$sql = "SELECT * FROM hostevent";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/logo.jpg">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- GOOGLE FONTS CDN LINK -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- CSS LINK -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- OWL CAROUSEL PLUGIN -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- MAGNIFIC POPUP PLUGIN -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/allevents.css">
  <title>StartUpPodero</title>
  <style>
    /* General styles */

    /* Event list styles */
    .event-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 40px;
    }

    /* Event item styles */
    .event-item {
      background-color: #f9f9f9;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 20px;
      flex: 1 1 calc(33.333% - 40px);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .event-title {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .event-details p {
      margin: 5px 0;
    }

    .event-details strong {
      font-weight: bold;
    }

    /* Button styles */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 1em;
      color: #fff;
      background-color: orangered;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
    }

    .btn:hover {
      background-color: orangered;
      color: white;
    }

    .register-btn {
      margin-top: 15px;
    }

    .no-event {
      text-align: center;
      padding: 50px 20px;
    }

    .no-events-message {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .create-event-btn {
      padding: 10px 20px;
    }
  </style>
</head>

<body>

  <!-- ======================================== NAVIGRATION ======================================== -->
  <nav id="navigration" class="navbar fixed-top p-0">
    <div class="container">
      <!-- <a class="logo" href="#"><img src="img/logo.png" alt=""></a> -->
      <a class="logo" href="#"><img style="height: 50px" src="img/logo.png" />
      </a>
      <div class="sidenav">
        <div class="header">
          <a class="logo d-lg-none" href="#">StartUpPodero Ventures </a>
          <a href="#" class="d-lg-none" id="showsidenav"><img src="img/icon/letter-x.png" alt="" />
          </a>
        </div>
        <ul class="mb-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.html">About US</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="service.html">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="packages.html">Our Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Community.html">My Community</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="collapse" href="">Blogs <i class="fal fa-angle-down"></i></a>
            <div id="menu3" class="dropdown-menus collapse">
              <a class="dropdown-item" href="blogs.html"><span>Blog</span></a>
              <a class="dropdown-item" href="success.html"><span>success stories</span></a>
              <a class="dropdown-item" href="teams.html"><span>Our Teams</span></a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.html">Events</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
      <div id="hamburger" class="d-lg-none">
        <img src="img/icon/menu.png" class="img01" alt="" />
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
                <h2>Events<span>.</span></h2>
                <p><a href="index.html">HOME</a> <span>/</span> EVents</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======================================== Event SECTION ======================================== -->
  <?php if ($count > 0) : ?>
    <section class="event-list container">
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <article class="event-item">
          <h2 class="event-title"><?php echo htmlspecialchars($row['title']); ?></h2>
          <div class="event-details">
            <p class="event-date"><strong>Date:</strong> <?php echo htmlspecialchars($row['event_date']); ?></p>
            <p class="event-category"><strong>Category:</strong> <?php echo htmlspecialchars($row['category']); ?></p>
            <p class="event-city"><strong>City:</strong> <?php echo htmlspecialchars($row['city']); ?></p>
            <p class="event-type"><strong>Type:</strong> <?php echo htmlspecialchars($row['event_type']); ?></p>
          </div>
          <form action="connectapp.php" method="POST" class="event-form">
            <input type="hidden" name="event_name" value="<?php echo htmlspecialchars($row['title']); ?>">
            <button type="submit" class="btn register-btn">Register Now</button>
          </form>
        </article>
      <?php endwhile; ?>
    </section>
  <?php else : ?>
    <div class="container no-event">
      <p class="no-events-message">No new events available now.</p>
      <a class="btn create-event-btn" href="event.html">Create Event</a>
    </div>
  <?php endif; ?>



  <!-- ======================================== FOOTER SECTION ======================================== -->
  <section id="footerSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div class="footer-box">
            <a href="#" class="logo">StartUpPodero Ventures </a>
            <p class="about">
              Welcome to StartUpPodero Ventures, where we craft cutting-edge websites and apps, and host dynamic
              events that empower your business's growth!</p>
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
  <script>






  </script>
</body>

</html>
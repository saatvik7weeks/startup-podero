<?php
Session_start();
$servername="localhost";
$usm="root";
$pass="";
$db="startupoderoventures";
$conn=mysqli_connect($servername,$usm,$pass,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from the events table
$sql = "SELECT * FROM hostevent";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>        
        <title>StartUpodero Admin</title>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:box-border;
                font-family:'Segoe UI','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .sidebar{
                position:absolute;
                top:0;
                left:0;
                height:100vh;
                width:250px;
                background-color: #12171e;
                padding:0.4rem 0.8rem;
                transition:all 0.5s ease;
            }
            .navigator{
                position:absolute;
                width:calc(100%-250px);
                top:15px;
                left:1150px;
            }
            .sidebar .top .logo {
                color:#fff;
                display:flex;
                height:50px;
                width:100%;
                align-items:center;
                pointer-events:none;
                opacity:1;
            }
            .sidebar ul li{
                position: relative;
                list-style-type: none;
                height:50px;
                width:90%;
                margin:0.8rem auto;
                line-height: 50px;
            }
            .sidebar ul li a{
                color:#fff;
                display: flex;
                align-items:center;
                text-decoration:none;
                border-radius: 0.8rem;
            }
            .sidebar ul li a:hover{
                background-color: #fff;
                color:#12171e;
            }
            .sidebar ul li a i{
                min-width:50px;
                text-align:center;
                height:50px;
                border-radius:12px;
                line-height: 50px;
            }
            .sidebar ul li .tooltip{
                opacity:0;
                display:none;
            }
            .button {
                background-color: #04AA6D;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
            .abc{
                text-decoration: none;
            }
            .button{
                background-color: #12171e;
            }
            .button:hover{
                background-color: orangered;
            }
            table{
                height:auto;
                width:50%;
            }
            table{
                margin-left: 30%;
                margin-right: auto;
                margin-top:7%;
            }
            th{
                height: 40px;
            }
        </style>
    </head>
    <body>
        <!--=========================SIDE BAR==================================-->
        <div class="sidebar">
            <div class="top">
                <div class="logo">
                    <img style="height: 50px;" src="/img/logo.png"> </a>
                </div>
            </div>
            <br><br>
            <ul>
                <li>
                    <a href="hosted.php">
                        <i class="bx bxs-grid-alt"></i>
                        <span class="nav-item">Event</span>
                    </a>
                    <span class="tooltip">Event</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-shopping-bag"></i>
                        <span class="nav-item">Community</span>
                    </a>
                    <span class="tooltip">Community</span>
                </li>
                <li>
                    <a href="contacted.php">
                        <i class="bx bx-contact"></i>
                        <span class="nav-item">Contact</span>
                    </a>
                    <span class="tooltip">Contact</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-log-out"></i>
                        <span class="nav-item">logout</span>
                    </a>
                    <span class="tooltip">logout</span>
                </li>
            </ul>
        </div>
        <!--==========================NAVBAR====================-->
        <div class="navigator">
            <div class="container">
                <div class="navbar">
                    <div class="button">
                        <a class="abc" href="index.html" style="color:#fff;"><span class="nav-item">StartUpodero</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--================CONTENT====================================-->
        <div class="main">
            <div class="container">
                <div class="right"> 
                    <table border='2'>
                        <tr><th>ID</th><th>Title</th><th>User Name</th><th>Email</th><th>Phone</th><th>City</th><th>Event Type</th><th>Category</th><th>Event Date</th><th>Event Time</th></tr>
                        <?php while($row=mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td align="center" height="40px"><?php echo $row['id'] ?></td>
                                <td align="center" height="40px"><?php echo $row['title'] ?></td>
                                <td align="center" height="40px"><?php echo $row['user_name'] ?></td>
                                <td align="center" height="40px"><?php echo $row['email'] ?></td>
                                <td align="center" height="40px"><?php echo $row['phone'] ?></td>
                                <td align="center" height="40px"><?php echo $row['city'] ?></td>
                                <td align="center" height="40px"><?php echo $row['event_type'] ?></td>
                                <td align="center" height="40px"><?php echo $row['category'] ?></td>
                                <td align="center" height="40px"><?php echo $row['event_date'] ?></td>
                                <td align="center" height="40px"><?php echo $row['event_time'] ?></td>
                            </tr>
                        <?php } ?>      
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

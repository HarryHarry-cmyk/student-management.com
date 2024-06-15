<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message']){
        $message = $_SESSION['message'];

        echo "<script type='text/javascript'>
            
        alert('$message');
       
        </script>";
    }

    error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "select * from teacher";

$result = mysqli_query($data,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    .main_img{
        width: 1280px;
        padding: 20px;
        padding-left: 290px;
    }
    body{
        background-color: ;
    }
    h1,p{
        font-family: 'Times New Roman';
    }
  </style>
  
</head>
<body>
    <nav>
        <label class="logo">MADRASA IMDADUL ULOOM YUSUFIYA URDU HIGH SCHOOL & JR. COLLEGE DAUND</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="admission_student.php">Admission</a></li> -->
            <li><a href="contact.php">Contact</a></li>
            <li><a href="register.php" class="btn btn-primary">Register</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
            
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">We Teach Students with Care</label>
        <img class="main_img" src="schoolImg.png">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="school1.png">
            </div>

            <div class="col-mid-8">
                <center><h1>Welcome to Madrasa Imdadul Uloom Yusufiya Urdu High School & Jr. College</h1></center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vero. Ratione blanditiis dolores aliquam a! Odit laboriosam dolorem ea. Alias nostrum culpa veniam iure dolorem eius. Quidem, deleniti minus! Labore!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vero. Ratione blanditiis dolores aliquam a! Odit laboriosam dolorem ea. Alias nostrum culpa veniam iure dolorem eius. Quidem, deleniti minus! Labore!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vero. Ratione blanditiis dolores aliquam a! Odit laboriosam dolorem ea. Alias nostrum culpa veniam iure dolorem eius. Quidem, deleniti minus! Labore!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, vero. Ratione blanditiis dolores aliquam a! Odit laboriosam dolorem ea. Alias nostrum culpa veniam iure dolorem eius. Quidem, deleniti minus! Labore!
                </p>
            </div>
        </div>
    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">

            <?php
                while($info=$result->fetch_assoc()) {

                
            ?>
            <div class="col-md-4">
             <img class="teacher" src="<?php echo "{$info['image']}"?>" alt=""> 
                
                <h3><?php echo "{$info['name']}"?></h3>
                <h5><?php echo "{$info['description']}"?></h3>
                
            </div>
            <?php
        }
            ?>

            <!-- <div class="col-md-4">
                <img class="teacher" src="t2.png" alt="">

                <p>
                    Teacher characteristics
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p>
                    Teacher characteristics
                </p>
            </div> -->
        </div>
    </div>



    <center>
        <h1>Our Facilities</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="t1.png" alt="">
                
                <p  style="text-align: center;">
                    Islamic Atmosphere
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="t2.png" alt="">

                <p style="text-align: center;">
                Experienced and Highly Qualified Lectures
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Computer Lab
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t1.png" alt="">
                
                <p  style="text-align: center;">
                    Library
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Experienced and Highly Qualified Lectures
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Disciplined & Green Campus
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Campus is under CCTV Surveillance
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Drinking Water
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="t3.png" alt="">

                <p  style="text-align: center;">
                    Girls Hostel For Outsiders
                </p>
            </div>
        </div>
    </div>
<!-- 
    <center>
        <h1 class="adm">Enquiry Form</h1>
    </center>


    <div align="center" class="admission_form">
        
        <form action="enquiry.php" method="POST">

            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Class</label>
                <input class="input_deg" type="text" name="c_name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="email" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="phone" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <input class="input_deg" type="text" name="message">
            </div>

            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="submit" name="submit">
            </div>
        </form>
    </div> -->

    <br><br><br><br><br>
    <footer>
        <div class="container1">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email: madrasaschool@example.com</p>
                <p>Phone: +91 9028273486</p>
                <p>Address: Saraswati Nagar Gopalwadi Road Daund</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                 <ul class="list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                 </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2023 madrasa school . All rights reserved</p>
        </div>
    </footer>
</body>
</html>
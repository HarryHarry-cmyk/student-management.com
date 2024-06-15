<?php

session_start();

/* if(!isset($_SESSION['username'])){
    header("location:login.php");
} */

/* elseif($_SESSION['usertype']='student'){
    header("location:login.php");
} */

error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['add_facility'])){
    $facility = $_POST['facility'];
    $file = $_FILES['image']['name'];

    $dst = "./image/".$file;

    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['image']['name'],$_dst);

    $sql = "insert into facility(facility_name,image)values('$facility','$dst_db') ";

    $result = mysqli_query($data,$sql);

    if($result){

        header('location:add_facility.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <?php
    include 'admin_css.php';
    ?>

<style type="text/css">

        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg{
            background-color: skyblue;
            width: 500px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>

</head>
<body>
     <!-- <h1>Admin Home</h1>

    <a href="logout.php">Logout</a>  -->
    
    <?php
    include 'admin_sidebar.php';
    ?>

    <div class="content">
    <center>
    <h1>Add Facility</h1>
    <br>
    <div class="div_deg">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div>
                <label for="">Facility: </label>
                <textarea name="facility" id=""></textarea>
            </div>
            <br>
            <div>
                <label for="">Image: </label>
                <input type="file" name="image">
            </div>
            <br>
            <div>
                <input class="btn btn-primary" type="submit" name="add_facility" value="Add_facility">
            </div>
        </form>
    </div>
    </center>
    </div>
</body>
</html>
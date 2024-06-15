<?php

session_start();

/* if(!isset($_SESSION['username'])){
    header("location:login.php");
} */

/* elseif($_SESSION['usertype']='student'){
    header("location:login.php");
} */

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "select * from admission";

$result = mysqli_query($data,$sql);


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

</head>
<body>
    <!--  <h1>Admin Home</h1>

    <a href="logout.php">Logout</a>  -->

    <?php
    include 'admin_sidebar.php';
    ?>

    
    <div class="content">
    <center>
    <h1>Applied For Admission</h1>

    <br><br>
    <table border="1px">
        <tr>
            <th style="padding: 20px; font-size:15px" >Name</th>
            <th style="padding: 20px; font-size:15px">Mother Name</th>
            <th style="padding: 20px; font-size:15px" >Email</th>
            <th style="padding: 20px; font-size:15px">Aadhar</th>
            <th style="padding: 20px; font-size:15px">Birth Date</th>
            <th style="padding: 20px; font-size:15px" >Phone</th>
            <th style="padding: 20px; font-size:15px" >Category</th>
            <th style="padding: 20px; font-size:15px" >Gender</th>
            <th style="padding: 20px; font-size:15px" >Flat No/Building Name</th>
            <th style="padding: 20px; font-size:15px" >Street No/Street Name</th>
            <th style="padding: 20px; font-size:15px" >Landmark</th>
            <th style="padding: 20px; font-size:15px" >City Name</th>
            <th style="padding: 20px; font-size:15px" >District</th>
            <th style="padding: 20px; font-size:15px" >State</th>
            <th style="padding: 20px; font-size:15px" >PinCode</th>
            <th style="padding: 20px; font-size:15px" >Class</th>
            <th style="padding: 20px; font-size:15px" >Photo</th>
            <th style="padding: 20px; font-size:15px" >Sign</th>
            <th style="padding: 20px; font-size:15px" >Marksheet</th>
            <th style="padding: 20px; font-size:15px" >Leaving Certificate</th>
        </tr>

        <?php
            
            $result = mysqli_query($data, "select * from admission");
            while($info=$result->fetch_assoc()){
                
            
        ?>
        <tr>
            <td style="padding: 20px;">
                <?php echo "{$info['name']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['mothername']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['email']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['aadhar']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['birth']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['phone']}"; ?>
        </td>
        </td>
        <td style="padding: 20px;">
            <?php echo "{$info['category']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['gender']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['f_no']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['s_no']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['landmark']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['cname']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['district']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['state']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['p_code']}"; ?>
        </td>

        <td style="padding: 20px;">
            <?php echo "{$info['class']}"; ?>
        </td>

        <td class="table_td">
                <img height="150px" width="150px" src="image/<?php echo "{$info['photo']}" ?>">
            </td>
        
        <td style="padding: 20px;">
        <img height="150px" width="150px" src="image/<?php echo "{$info['sign']}" ?>">
        </td>

        <td style="padding: 20px;">
        <img height="150px" width="150px" src="image/<?php echo "{$info['marksheet']}" ?>">
        </td>

        <td style="padding: 20px;">
        <img height="150px" width="150px" src="image/<?php echo "{$info['lc']}" ?>">
        </td>
        </tr>

        <?php
                
            }
        ?>

    </table>

    </center>
</div>
</body>
</html>


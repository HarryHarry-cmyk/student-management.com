<?php
    
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if($data==false) {
    die("Connection error..");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $sql = "select * from register1 where name='".$name."' AND password='".$pass."' ";

    $result = mysqli_query($data, $sql);

/*     $row=mysqli_fetch_array($result); */


    if($name=="admin"){

        $_SESSION['usertype']="admin";

        header("location:adminhome.php");
    } 
    else{
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['name'] == $name && $user_data['password'] == $pass) {
            header("location:studenthome.php");
        }
    }
    

    /* elseif($row["usertype"]=="admin") 

    $_SESSION['username']=$name;

    $_SESSION['usertype']="admin";
    
    header("location:adminhome.php");
    } */
    
    
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="schoolImg.png" class="body_deg">
    <center>


        <div class="form_deg">
            <center class="title_deg">
                Login Form
                <h1>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h1>
            </center>
            <form action="" method="POST" class="login_form">

                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="login" value="login">
                </div>

                <br>
                <div class="login-register">
                        <p style="color: white;">Don't have an account?<a href="register.php" 
                        style="color: skyblue;"class="login-link">Register</a></p>
                    </div><br>
                </div>
            </form>
        </div>
    </center>
</body>
</html>
<?php
error_reporting(0);
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

if($_GET['facility_id']){
    $f_id = $_GET['facility_id'];
    $sql = "select * from facility where id='$f_id'";
    $result = mysqli_query($data, $sql);

    $info = $result->fetch_assoc();

} 

if(isset($_POST['update_facility'])){
   
    $id = $_POST['id'];
    $facility = $_POST['facility'];
    $file = $_FILE['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['image']['name'],$dst);

    if($file) {
        
        $sql2 = "update facility set facility_name='$facility', image='$dst_db' where id='$id'  ";
        

    }else{
        $sql2 = "update facility set facility_name='$facility' where id='$id'  ";

    }
    

    $result2 = mysqli_query($data,$sql2);

    if($result2){
        echo "update success";
    }else{
        echo "update failed";
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

<style>
    label{
        display: inline-block;
        width: 150px;
        text-align: right;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 16px;
        padding:10px;
    }

    .form_deg{
        background-color: skyblue;
        width: 600px;
        padding-top: 70px;
        padding-bottom: 70px;
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
    <h1>Update Facilities</h1>

    <form class="form_deg" action="#" method="POST" enctype="multipart/form-data">

        <input type="text" name="id" value="<?php echo "{$info['id']}"?>" hidden>

    <div>
        <label for="">Facilities</label>
        <textarea name="facility" rows="3">
        <?php echo "{$info['facility_name']}"?>
        </textarea>
    </div>

    <div>
        <label for="">Facility old Image</label>
        <img width="150px" height="130px" src ="<?php echo "{$info['image']}"?>">
    </div>

    <div>
        <label for="">Choose Facility New Image</label>
        <input type="file" name="name">
    </div>

    <div>
        <input class="btn btn-success" type="submit" name="update_facility">
    </div>
    
    </form>

</center>
    </div>
</body>
</html>
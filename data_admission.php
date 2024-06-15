<?php

error_reporting(0);
session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if($data==false){
    die("Connection error");
}

if(isset($_POST['apply'])) {
    $name = $_POST['name'];

    $name=$_POST['name'];
    $m_name=$_POST['m_name'];
    $email=$_POST['email'];
    $aadhar_num=$_POST['aadhar_num'];
    $b_date=$_POST['b_date'];
    $phone=$_POST['phone'];
    /* $male=$_POST['male'];
    $female=$_POST['female'];
    $other=$_POST['other']; */
    $fNo=$_POST['f_no'];
    $sNo=$_POST['s_no'];
    $landmark=$_POST['landmark'];
    $city=$_POST['cname'];
    $dist=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['p_code'];
    $class=$_POST['class'];
    $photo=$_POST['s_photo'];
    $sign=$_POST['s_sign'];
    $marksheet=$_POST['s_marksheet'];
    $lc=$_POST['lc']; 

    $sql = "insert into admission(name,mothername,email,aadhar,birth,phone,male,female,other,f_no,s_no,landmark,cname,district,state,p_code,photo,sign,marksheet,lc) values('$name','$m_name','$email','$aadhar_num','$b_date','$phone','$male','$female','$other','$fNo','$sNo','$landmark','$city','$dist','$state','$pincode','$class','$photo','$sign','$marksheet','$lc')";

    $result = mysqli_query($data,$sql);

    if(mysqli_num_rows > 0){
        echo "<script type='text/javascript'> alert('Applied....'); </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Not Applied....'); </script>";
    }
}
?>
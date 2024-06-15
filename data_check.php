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


if(isset($_POST['apply'])){
    
    $s_id = 'TS'.rand(99,10).time();
    $name=$_POST['name'];
    $m_name=$_POST['m_name'];
    $email=$_POST['email'];
    $aadhar_num=$_POST['aadhar_num'];
    $b_date=$_POST['b_date'];
    $phone=$_POST['phone'];
    $category = $_POST['category'];
    $gender=$_POST['gender'];
    $fNo=$_POST['f_no'];
    $sNo=$_POST['s_no'];
    $landmark=$_POST['landmark'];
    $city=$_POST['cname'];
    $dist = $_POST['dist']; 
    $state=$_POST['state'];
    $pincode=$_POST['p_code'];
    $class = $_POST['class'];
    /* $photo=$_POST['s_photo']; */
    /* $sign=$_POST['s_sign']; */
    $marksheet=$_POST['s_marksheet'];
    $lc=$_POST['lc']; 

    $file_name1 = $_FILES['s_photo']['name'];
    $tempname1 = $_FILES['s_photo']['tmp_name'];
    $folder1 = 'image/'.$file_name1;

    move_uploaded_file($tempname1, $folder1);

    $file_name2 = $_FILES['s_sign']['name'];
    $tempname2 = $_FILES['s_sign']['tmp_name'];
    $folder2 = 'image/'.$file_name2;

    move_uploaded_file($tempname2, $folder2);

    $file_name3 = $_FILES['s_marksheet']['name'];
    $tempname3 = $_FILES['s_marksheet']['tmp_name'];
    $folder3 = 'image/'.$file_name3;

    move_uploaded_file($tempname3, $folder3);

    $file_name4 = $_FILES['lc']['name'];
    $tempname4 = $_FILES['lc']['tmp_name'];
    $folder4 = 'image/'.$file_name4;

    move_uploaded_file($tempname4, $folder4);

     $sql = "insert into admission(s_id,name,mothername,email,aadhar,birth,phone,category,gender,f_no,s_no,landmark,cname,district,state,p_code,class,photo,sign,marksheet,lc) values('$s_id','$name','$m_name','$email','$aadhar_num','$b_date','$phone','$category','$gender','$fNo','$sNo','$landmark','$city','$dist','$state','$pincode','$class','$file_name1','$file_name2','$file_name3','$file_name4')";

    $result = mysqli_query($data,$sql);

    /* if($result) {
        
        echo "Apply Success...";

        /* header("location:studenthome.php"); */
    /* }
    else {
        echo "Apply failed...";
    } */ 
    
    $last_id = $db->lastInsertId();
      if($last_id!='')
      {
    header("location:upload.php?id=".$s_id);
      }
      else 
      {
      	echo 'Something went wrong';
      }
    
}

?>

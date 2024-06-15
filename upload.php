<?php require_once("config.php");$s_id=$_GET['id'];?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admission form 2024</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styledemo.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<style type="text/css">
	@page { size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;}
@media print {
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    .underline{
line-height: 27px !important;
 text-decoration-style: dotted !important;
}
}


</style>
</head>
<body>
<div class="container-fluid">
	<?php $sql="SELECT count(*) from admission WHERE s_id=:s_id"; 
    	 $stmt = $db->prepare($sql);
           $stmt->bindParam(':s_id', $s_id, PDO::PARAM_STR);
           $stmt->execute();
          $count=$stmt->fetchcolumn();
      if($count==0) 
      {
      	echo 'Registration number is missing or invalid.Kindly fillup <a href="admission_student.php">Admission form</a>..';
      }
      else {
  ?>
<div class="row">
  <div class="col-sm-1">
  </div>

    <div class="col-sm-10" style="border: 2px solid black; padding:10px;">
    	<?php 

         $sql="SELECT * from admission WHERE s_id=:s_id"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':s_id', $s_id, PDO::PARAM_STR);
           $stmt->execute();
           $rows=$stmt->fetchall();
         foreach($rows as $row)
         {
    	 ?> 
         <div class="row">
          <div class="col-2">
            <img src="https://technosmarter.com/assets/images/logo-ts.png" class="img-fluid">
          </div>
           <div class="col">
              <div class="main-heading">Techno Smarter Organization Education Hub</div>
     <p class="sub-heading"> Ministry of Corporate Affairs (Govt. of India ) Govt. CIN. No. TS75200CP2921NPL TAN. TCPP90708E</p>
      <div class="address"> Hed.Office: A Sing,Mohan Nagar Prasad Road, New Delhi - 110056  Register office: Subhash Nagar Dehradoon Uttarakhand 248002
</div>
         <p class="email"> Email: technosmarterinfo@gmail.com , Website: www.technosmarter.com</p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row">
  <p id="message"></p>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
   <h3> <u>Admission form 2024</u></h3>
  </div>
  <div class="col-sm-2">
  </div>

  </div>

<div class="row">
    <div class="col-6">
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Studnet Id</label>
    </div>
     <div class="col-8">
      <strong><?php echo $row['s_id']; ?></strong>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Full Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['name']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">

      <label class="lable">Mother Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['mothername']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Email</label>
    </div>
     <div class="col-8">
       <?php echo $row['email']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Aadhar Number</label>
    </div>
     <div class="col-8">
      <?php echo $row['aadhar']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Birth Date</label>
    </div>
     <div class="col-8">
      <?php echo $row['birth']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Phone</label>
    </div>
     <div class="col-8">
       <?php echo $row['phone']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">Category</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['category']; ?> 
    </div>
    </div>
    
<div class="form-group row">
   <div class="col-4">
      <label class="lable">Gender</label>
    </div>
     <div class="col-8">
           <?php echo $row['gender']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Flat No/Building Name</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['f_no']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Street No/Street Name</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['s_no']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Landmark</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['landmark']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">City Name</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['cname']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">District</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['district']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">State</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['state']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Pincode</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['p_code']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Class</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['class']; ?> 
    </div>
    </div>
    </div>

    <div class="col-6">
  <div class="row">
    <div class="col-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="width: 150px; ">
      <img src="uploads/<?php echo $row['image']; ?> "  width="150" height="150">
  </div>

  </div>
  </div>
  </div>  
  
  <div class="row">
    <div class="col-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Signature</label>
   <div style=" width: 150px; ">
      <img src="uploads/<?php echo $row['sign']; ?>"  width="151" height="120" />
  </div>
  </div>  
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Marksheet</label>
   <div style=" width: 150px; ">
      <img src="uploads/<?php echo $row['marksheet']; ?>"  width="151" height="120" />
  </div>
  </div>  
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Leaving Certificate</label>
   <div style=" width: 150px; ">
      <img src="uploads/<?php echo $row['lc']; ?>"  width="151" height="120" />
  </div>
  </div>  
    </div>
  </div>

    </div>

</div> 
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Category</label>
    </div>
     <div class="col-8">
    <?php echo $row['category']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Course</label>
    </div>
     <div class="col-8">
    <?php echo $row['course']; ?> 
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Fees</label>
    </div>
     <div class="col-8">
    <?php echo $row['course_fees']; ?> INR  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Payment Status</label>
    </div>
     <div class="col-8">
    <?php echo strtoupper($row['pay_status']); ?> 
    </div>
    </div>
    </div>
  </div>

  <!-- Row 4 end --> 
<?php } ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Print Form</button></center>
<br>
<?php } ?> 

</div>

</body>
</html>
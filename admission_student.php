<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Admission Form</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styledemo.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
  <br>
<div class="container">
<div class="row" style="border: 2px solid black;">
<h1 style="text-align: center; font-family: 'Times New Roman';">Madrasa Imdadul Uloom Yusufiya Urdu High School & Jr. College Daund</h1> 
<br>
  <div class="col-sm-2">
  </div>
  
  <div class="col-sm-8" style="padding:15px; font-family: 'Times New Roman'; text-align: center;">
  <h1>Admission Form 2024</h1>
  </div>
  <div class="col-sm-2">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-1">
  </div>
    <div class="col-sm-10" style="border: 0px solid black; padding:80px;">
      <form action="data_check.php" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-6">
      <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Full Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="name" class="form-control" required>
    </div>
    </div>
    
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Mother Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="m_name" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email:- </label>
    </div>
     <div class="col-sm-8">
     <textarea name="email" class="form-control" required></textarea>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Aadhar Number:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="aadhar_num" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Date of Birth:- </label>
    </div>
     <div class="col-sm-8">
      <input type="date" name="b_date" maxlength="10" class="form-control" required>
    </div>
    </div>
<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Phone:- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="phone" name="phone" id="phone" class="form-control">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Category:- </label>
    </div>
     <div class="col-sm-8">
     <select name="category"  class="form-control" required>
      <option value="">Select your category</option>
        <option value="OBC">OBC</option>
        <option value="General">General</option>
     </select>
    </div>
    </div>
<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Gender :- </label>
    </div>
     <div class="col-sm-8">
     <select name="gender" class="form-control" required>
      <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
     </select>
    </div>
    </div>
    
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Flat No/Building Name:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="f_no" class="form-control" required>
    </div>
    </div>
    
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Street No/Street Name:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="s_no" class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Landmark:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="landmark" class="form-control" required>
    </div>
    </div>
    
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">City Name:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="cname" class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">District:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="dist" class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">State:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="state" class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Pincode:- </label>
    </div>
     <div class="col-sm-8">
      <input type="number" name="p_code" class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Class</label>
    </div>
     <div class="col-sm-8">
     <select name="class" class="form-control" required>
      <option value="">Select Class</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
     </select>
    </div>
    </div>
    </div>
    <div class="col-sm-6">
  <div class="row">
    <div class="col-sm-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
      <img id="output"  width="150" height="150" / style="display:none">
  </div>

    <input type="file" name="s_photo" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
  </div>
  </div>
  </div>  

  <br> 
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Signature</label>
   <div style="border: 1px solid black; height: 120px; width: 150px;  background: #F5FAFF;">
      <img id="outputs"  width="150" height="120" / style="display:none">
  </div>
    <input type="file" id="simage" name="s_sign"  onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
<script>
  var loadFiles = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputs');
      output.src = reader.result;
    }; 

  $('#outputs').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

  </div>  
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Marksheet</label>
   <div style="border: 1px solid black; height: 120px; width: 150px;  background: #F5FAFF;">
      <img id="outputs1"  width="150" height="120" / style="display:none">
  </div>
    <input type="file" id="simage" name="s_marksheet"  onchange="loadFiles1(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
<script>
  var loadFiles1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputs1');
      output.src = reader.result;
    }; 

  $('#outputs1').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

  </div>  
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Leaving Certificate</label>
   <div style="border: 1px solid black; height: 120px; width: 150px;  background: #F5FAFF;">
      <img id="outputs2"  width="150" height="120" / style="display:none">
  </div>
    <input type="file" id="simage" name="lc"  onchange="loadFiles2(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
<script>
  var loadFiles2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputs2');
      output.src = reader.result;
    }; 

  $('#outputs2').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

  </div>  
    </div>
  </div>


    </div>
</div> <!--Row 1 end --> 
  <br>
     <div class="row">
     <div class="col-sm-2">
      <label class="lable"></label>
    </div>
    <div class="col-sm-8"> 
 <div id="msg-price"> </div>
    </div>
  </div> <!-- Row 5 end -->
     <div class="row">
     <div class="col-sm-2">
      <label class="lable">Declaration </label>
    </div>
    <div class="col-sm-8">
      <div style=""><div id="msg-price"> </div></div>
      
      <div style="border: 2px solid black;padding:10px; text-align: center;border-radius: 25px;">
        <input type="checkbox" name="declare" required>
 I declare that I have read and filled the above information, so if the information given by me is incorrect, you have the right to cancel without informing me.
    </div>
      <div class="form-group row">
        <div class="col-sm-4">
        </div>
           <div class="col-sm-4">
            <br> 
               <button class="btn btn-success" name="apply">Apply </button>
               <button class="btn btn-success" name="print">Print </button>
           </div>
           <div class="col-sm-4">
           </div>
      </div> 
    </div>
  </div> <!-- Row 5 end --> 
</form>
</div>
<div class="col-sm-2">
  </div>
</div>
</div>
</body>
</html>
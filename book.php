<?php

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,'villa');

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address']; 
$idnumber=$_POST['idnumber'];
$purpose=$_POST['purpose'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$cid=$_POST['cid']; 

$sql="insert into details(name,phone,address,idnumber,purpose,dob,sex,cid) values('$name','$phone','$address','$idnumber','$purpose','$dob','$sex','$cid')";

$query_run=mysqli_query($con,$sql);

if($query_run){
  
  echo "<script>alert('data saved');</script>";
  
}
else{
  
    echo "<script>alert('data not saved');</script>";
  
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>AQUA VILLA BOOKING PAGE</title>
  <link rel="icon" href="img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <!--google font-->
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <style>
  body{
      
      font-family: 'Montserrat', sans-serif;
      
  }
  
  </style>
</head>
<body>

  <!--navbar starts here-->
<nav class="navbar navbar-expand-sm bg-light navbar shadow" style="background:#ffffff; height: 90px;">
  <a class="ml-4" href="index.php"><img src="img/aquavilla.png" style=""></a><br>
</nav>
<br>

<!--form-->

<div class="container col-lg-6">
  <h2 class="text-center" style="color:#66b3ff">Fill Up The Booking Form</h2>
  <hr>
  <form action="" method="POST">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Full Name" name="name" required="">
    </div>

    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter Number" name="phone" required="">
    </div>

    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Full Address" name="address" required="">
    </div>

    <div class="form-group">
      <label for="pwd">ID Proof:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ID Proof(PAN,ADHAAR,VOTER ID,etc" name="idnumber" required="">
    </div>

    <div class="form-group">
      <label for="pwd">Purpose:</label>
      <textarea type="text" class="form-control" id="pwd" placeholder="Tell Us About Your Purpose" name="purpose" required=""></textarea>
    </div>

    <div class="form-row">

    <div class="form-group col-md-4">
      <label for="pwd">Date of birth:</label>
      <input type="date" class="form-control" id="dob" name="dob" required="">
    </div>

    <div class="form-group col-md-4">
      <label for="pwd">Sex:</label>
      <select id="sex" class="form-control" name="sex" required="">
        <option selected>Choose</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="pwd">Check-in-Date:</label>
      <input type="date" class="form-control" id="cid" name="cid" required="">
    </div>

  </div>
    <br>
    <button type="submit" class="btn btn-primary container col-lg-12" name="submit">Submit</button>
  </form>
</div>
<br><br><br>

<!---footer starts here--->
<footer style="box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2);" class="footer bg-light">
<div class="container-fluid shadow" style="background:#ffffff"><br>
<div class="row">
<div class="col-lg-6" align="center">
<p style="font-size:14px">Copyright &copy; 2020 <a href="index.php" style="color:gray;">THE AQUA VILLA</a>. All rights reserved</p>
</div>

<div class="col-lg-6 col-sm-12 d-inline" align="center" style="font-size:14px">
<a href="privacy-policy.php" style="color:gray;">Privacy Policy |</a>
<a href="terms-and-condition.php" style="color:gray;"> Terms of Use</a>
</div>

</div><br>
</div>
</footer>

</body>
</html>

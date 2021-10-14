<!DOCTYPE html>
<html>
<head>
  <title>AQUA VILLA BOOKING</title>

  <link rel="icon" href="img/favicon.png">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
</head>

<body>

<!--navbar starts here-->
<nav class="navbar navbar-expand-lg navbar-light shadow" style="background:#ffffff">
  <a class="navbar-brand" href="index.php"><img src="img/aquavilla.png" class="" style=""></a>
</nav>
  
<!----Form---->

<div class="container col-lg-8"><br><br>
<h3 class="text-dark text-center">Fill Up For Booking</h3>
<hr style="height:1px;background:#f2f2f2;">

<form  method="POST" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name" class="font-weight-bold">Name(full)</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" >
    </div>
    <div class="form-group col-md-6">
      <label for="phone" class="font-weight-bold">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Active Phone Number" >
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="font-weight-bold">Address(full)</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Put Address As Per Your ID Card">
  </div>
  
   <div class="form-group">
    <label for="idnumber" class="font-weight-bold">ID Proof(PAN,ADHAAR,VOTER ID,etc)</label>
    <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="Provide Us With ID Number" >
  </div>
   <div class="form-group">
    <label for="purpose" class="font-weight-bold">Purpose</label>
    <textarea type="text" class="form-control" id="purpose" name="purpose" placeholder="Tell Us About Your Purpose" ></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="dob" class="font-weight-bold">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group col-md-4">
      <label for="sex"  class="font-weight-bold">Sex</label>
      <select id="sex" class="form-control" name="sex">
        <option selected>Choose...</option>
        <option>Male</option>
    <option>Female</option>
    <option>Other</option>
    
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="cid" class="font-weight-bold">Check-in-Date</label>
      <input type="date" class="form-control" id="cid" name="cid">
    </div>
  </div>

 <br>
  <button type="submit" class="btn btn-primary container col-lg-12" name="submit" style="">Submit</button>
</form>
</div>
<br><br>

<!---footer starts here--->
<footer style="box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2);">
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
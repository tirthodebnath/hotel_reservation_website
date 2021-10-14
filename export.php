<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="icon" href="img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <!--navbar starts here-->
<nav class="navbar navbar-expand-sm bg-light navbar shadow" style="background:#ffffff; height: 90px;">
  <a class="ml-4" href="index.php"><img src="img/aquavilla.png" style=""></a><br>
</nav>


<!--form-->

<?php

$con=mysqli_connect("localhost","root","","villa");

?>

<div class="container"><br>
<h2 class="text-center">Admin View</h2><hr>

<a href="admin.php?export=true" class="btn btn-primary">Download</a>
<br><br>
<table align="center" class="table table-striped">
<tr>

        <th>Id</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Id-Number</th>
    <th>Purpose</th>
    <th>D.O.B</th>
    <th>gender</th>
    <th>Check-In-Date</th>

</tr>

<?php

$data=array();

$query=mysqli_query($con,'select*from details order by id desc');

while($row=mysqli_fetch_array($query)){

$data=$row;

  
?>  

<tr>
        <td><?php echo $row['id']; ?></td>
        
        <td><?php echo $row['name']; ?></td>
        
        <td><?php echo $row['phone']; ?></td>
        
        <td><?php echo $row['address']; ?></td>
        
        <td><?php echo $row['idnumber']; ?></td>
        
        <td><?php echo $row['purpose']; ?></td>
        
        <td><?php echo $row['dob']; ?></td>
        
        <td><?php echo $row['sex']; ?></td>
        
        <td><?php echo $row['cid']; ?></td>
        
        </tr>
      
  
<?php
}

?>
</table>
</div><br><br>







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
<?php
$con=mysqli_connect("localhost","root","","villa");

if(isset($_GET['export'])){
	
	if($_GET['export']=='true'){
		
	$query=mysqli_query($con,'select*from details order by id desc');	
		
	$delimeter=",";

    $filename="significant_".date('Ymd').".csv";	
	
$f=fopen('php://memory','w');	

$fields=array('id','name','phone','address','idnumber','purpose','dob','sex','cid');
	
	fputcsv($f,$fields,$delimeter);
	
	while($row=$query->fetch_assoc()){
		
		
		$lineData=array($row['id'],$row['name'],$row['phone'],$row['address'],$row['idnumber'],$row['purpose'],$row['dob'],$row['sex'],$row['cid']);
		fputcsv($f,$lineData,$delimeter);
	}
	
	fseek($f,0);
	
	header('Content-Type:text/csv');
	header('Content-Disposition:attchment;filename="'.$filename.'";');
	
	fpassthru($f);
		
	}
	
	
}


?>
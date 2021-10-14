<?php

if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['mail'];
		$phone=$_POST['number'];
		

		$to='aquavilla.vedicvillage@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='For Subscription';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}

header('refresh:2;url=index.php');


?>
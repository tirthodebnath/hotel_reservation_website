<?php


if(isset($_POST['submit'])){
		$cin=$_POST['checkin'];
		$cout=$_POST['checkout'];
		$pnum=$_POST['peepnumber'];
		$mail=$_POST['mail'];
		
		

		$to='thinksurfmedia@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='For Subscription';
		$message="Checkin-Time :".$cin."\n"."checkout-Time :".$cout."\n"."mail id is :".$mail."\n"."Number of Peoples :".$pnum."\n\n";
		$headers="From: ".$mail;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you, We will grt back to you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}

header('refresh:2;url=index.php');

?>
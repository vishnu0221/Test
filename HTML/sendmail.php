<?php

if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['subres']))
{
 	$name=$_POST['name'];
 	$email=$_POST['email'];
	$phone=$_POST['phone'];
	echo "<h1>".$name."</h1>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	//mail
	$subject = "New enquiry via site enquiry form";
	$body = "Hi,<br><br>
			 Enquiry Details:<br><br> 
			 Name:".$firstname."<br>
			 Email:".$email."<br>
			 Phone:".$phone."<br>
			 Enquiry About:".$about."<br>";
	mail('testmail@test.com',$subject,$body,$headers);	

	//response mail
	$headers .= 'From: <info@kompetenzen.in>' . "\r\n";
	$resSubject = "<b>Thankyou for enquiring about us.</b>";
	$resBody = "Dear ".$firstname.",<br><br>
				First of all, we would like to thank you for enquiring about our services.<br><br>
				One of our executives will contact you soon to provide more information.<br><br>
				<b>Best Regards,<br>
				Kompetenzen Team.</b><br>
            	<strong><a style='color:blue;' href='kompetenzen.in'>www.kompetenzen.in</a></strong>.";
	mail($email,$resSubject,$resBody,$headers);	
	header('Location:index.html');
}

?>
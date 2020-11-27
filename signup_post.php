<?php
session_start();
include 'signup.php';
$servername='localhost';
$username='root';
$password='';
$dbname='signup';


$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['create'])){
	$name=$_POST['fullnamesignup'];
	$email=$_POST['emailsignup'];
	$password=$_POST['passwordsignup'];
	$password=md5($password);
	$_SESSION['name']=$name;
	if($_POST['passwordsignup']===$_POST['passwordsignup_confirm']){
	
	//$password=md5($password);
	
	$register_query="INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
	$register_result=mysqli_query($conn,$register_query);
	
	$to = $email;
$subject = "Welcome to the family ".$name;






$from = 'akshat.vhs@gmail.com'; 
$fromName = '7-Star Dhaba'; 
 

 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Sharma Ji da 7-Star Dhaba</title> 
		
		<style>
		

h1{
	font-size:2rem;
	font-family: bold;
	text-transform: uppercase;
	letter-spacing: 2px;
	position: relative;
	top: 3%;
	left: 50%;
	transform :translate(-50%, -50%);
	padding: 3rem 5rem;
	text-shadow: 0 0 3px #FF0000, 0 0 5px #1040FF;
}
@keyframes bganimation {
  0%{
    background-position: 0% 50%;
  }
  50%{
    background-position: 100% 50%;
  }
  100%{
    background-position: 0% 50%;
  }
}
		
		</style>
    </head> 
    <body> 
	<section>
        <h1>Thanks for joining!! Welcome to Sharma Ji da 7-Star Dhaba. We pledge to serve you the best food!!</h1> 
       </section>
    </body> 
    </html>';
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 

 
// Send email 

if(mail($to, $subject, $htmlContent, $headers) &&  mysqli_affected_rows($conn)>0 ){
			echo '<script>alert("Signup Successful!! A welcome email has been sent to you")</script>';
}else{ 
			echo '<script>alert("You are already a user. Please Sign-in")</script>'; 
	}}
	else{
					echo '<script>alert("Passwords don\'t match")</script>'; 

	}

}
?>
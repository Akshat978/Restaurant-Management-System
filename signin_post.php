<?php
session_start();
include 'signin.php';
$servername='localhost';
$username='root';
$password='';
$dbname='signup';


$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['made'])){
	$email=$_POST['number'];
	
	$password=$_POST['password'];
	$password=md5($password);
	$_SESSION['email']=$email;
	$signin_query="select * from users where email='$email' AND password='$password'"; 
	$signin_result=mysqli_query($conn,$signin_query);
	$row=@mysqli_fetch_array($signin_result);
	if($row['number']==$number && $row['password']==$password){
			
			header("Location: web/index.php");
		
	}
	else{
				echo '<script>alert("Username or password is incorrect")</script>'; 
	}
}
?>
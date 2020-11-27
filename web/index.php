<?php
session_start();?><p style="color:white;">Logged in as 
<?php echo $_SESSION['email'];
?></p>


<html lang="en">

<head>
<style>
a:link, a:visited {
  font-size:1rem;
  background-color: #000;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-shadow: 2px 2px 5px white;
  box-shadow: 0 5px 15px rgba(256, 256, 256, 1);
  text-decoration: none;
  display: inline-block;
  border: 2px solid red;
  border-radius: 25px;
  font-family: "Comic Sans MS", cursive, sans-serif;
}

a:hover, a:active {
  background-color: ;
  color: white;
  text-shadow: 2px 2px 5px black;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 1);
}	

html,body{
	padding:0;
	margin:0;
	background:#000;
font-family: 'Roboto', sans-serif;
 }
body a{
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	text-decoration:none;
}
body a:hover {
	text-decoration: none;
}

body a:focus, a:hover {
	text-decoration: none;
}
input[type="email"],input[type="text"],input[type=password],
input[type="button"],input[type="submit"],textarea{
font-family: 'Roboto', sans-serif;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
h1,h2,h3,h4,h5,h6{
	margin:0;	
	padding:0;
font-family: 'Roboto', sans-serif;
	letter-spacing:1px;
}	
p{
	margin:0;
	padding:0;
	letter-spacing:1px;
font-family: 'Roboto', sans-serif;
}
ul{
	margin:0;
	padding:0;
}
/*-- //Reset-Code --*/
body {
    background: url(../images/1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    min-height: 100vh;
}
.appointment-w3 {
    width: 24%;
    margin: 60px auto 50px;
    background-color: #000;
    padding: 30px 30px;
    border: 6px solid #fff;
}
h1{  padding-top: 31px;}
h1.header-w3ls {
    text-align: center;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 11px;
    text-shadow: 2px 3px rgba(0, 0, 0, 0.42);
}
.personal h2,
.information h3,
.passport h3{
  color:#000;
text-align:center;
margin:.5em 0em;
letter-spacing:3px;
}

 select.form-control {
	 outline: none;
    width: 100%;
	height:43px;
	border-radius:0;
	box-sizing: border-box;
 }
 			
.form-left-w3l input[type="text"],
.form-right-w3ls input[type="text"],
.form-left-w3l input[type="email"]
,.form-control-w3l textarea[type="text"],
.form-right-w3ls  input[type="date"],
.form-left-w3l  input[type="date"]{
    -webkit-appearance: none;
    display: inline-block;

}
 select.form-control ,
 .form-left-w3l input[type="text"],
 .form-right-w3ls input[type="text"],
 .form-left-w3l input[type="email"]
,.form-control-w3l textarea,
.form-right-w3ls  input[type="date"],
.form-left-w3l  input[type="date"]
{
 outline: none;
width: 100%;
box-sizing: border-box;
background:transparent;
color: #fff;
letter-spacing:2px;
border:none;
border-bottom:1px solid #fff ;
font-size: 15px;
padding: .8em 0;
margin: 0px 0px 19px;
transition: all 0.5s ease-in-out;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
	
}
select.form-control {
    background: #000;
}
textarea{
    height: 134px;
    padding: 1em;
	overflow: hidden;
	resize:none;
}
input#timepicker,input#timepicker1,input#datepicker,input#datepicker1 {
    display: inline-block;
    height: inherit;
	outline:none;
}
input#datepicker,input#datepicker1 {width:64%;}
input#timepicker,input#timepicker1{width:34%;}
input#datepicker2{width:100%;}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
     color: #fff;
}
::-moz-placeholder { /* Firefox 19+ */
    color: #fff;
}
:-ms-input-placeholder { /* IE 10+ */
     color: #fff;
}
:-moz-placeholder { /* Firefox 18- */
    color: #fff;
}	
input[type="submit"] {
	    border-radius:0px;
    text-transform: uppercase;
       background:#fed136;
    color: #000;
    padding:11px 15px;
    border: none;
	border-bottom: 3px solid #b18d12;
    font-size: 17px;
    outline: none;
    width: 100%;
    letter-spacing: 1px;
    margin:20px 0px;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
 
	input[type="submit"]:hover {
    color: #000;
    background:#e6d28d;
}
.copy{padding-bottom:30px;}
.copy p{
    margin:0em;
    text-align: center;
    color: white;
    letter-spacing: 3px;
}	
.copy p a{
	  color:#fed136;
	  text-decoration:none;
      }	 
.copy p a:hover{color:#fff;}


/*--responsive--*/
@media(max-width:1920px){
	h1.header-w3ls {
    font-size: 64px;
	}
.copy p {
    font-size: 17px;
}
}
@media(max-width:1680px){
	h1.header-w3ls {
    font-size: 58px;
}
.copy p {
    font-size: 16px;
}
}
@media(max-width:1600px){
	h1.header-w3ls {
    font-size: 50px;
	}
	.copy p {
    font-size: 14px;
	}
}
@media(max-width:1440px){
.appointment-w3 {
    width: 28%;
}
}
@media(max-width:1280px){
.appointment-w3 {
    width: 30%;
}
}
@media(max-width:1080px){
.appointment-w3 {
    width: 35%;
}
}
@media(max-width:1050px){

}
@media(max-width:1024px){
	select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, 
	.form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
    font-size: 14px;
	}
	.appointment-w3 {
    padding: 24px 35px;
	}
	.appointment-w3 {
    width: 37%;
}
}
@media(max-width:991px){
.appointment-w3 {
    width: 40%;
}
}
@media(max-width:900px){
	h1.header-w3ls {
    letter-spacing: 8px;
	  font-size: 48px;
	}
  select.form-control, .form-left-w3l input[type="text"], 
  .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"],
  .form-control-w3l textarea, .form-right-w3ls input[type="date"],
  .form-left-w3l input[type="date"] {
    padding: .6em 0;
}
select.form-control {
	
    height: 36px;
}
.appointment-w3 {
    width: 42%;
}
}
@media(max-width:800px){
	.appointment-w3 {
    width: 50%;
}
h1.header-w3ls {
    letter-spacing: 6px;
}
}
@media(max-width:768px){
	.appointment-w3 {
    width: 53%;
}
input[type="submit"] {
    font-size: 16px;
}
}
@media(max-width:767px){
	textarea {
    height: 127px;
	}
	.appointment-w3 {
    padding: 21px 35px;
}
}
@media(max-width:736px){
	.appointment-w3 {
    margin: 22px auto 30px;
	}
	h1.header-w3ls {
    font-size: 46px;
}
}
@media(max-width:667px){
	h1.header-w3ls {
    letter-spacing: 4px;
}
.appointment-w3 {
    padding: 21px 28px;
	width: 57%;
}
.copy p {
    letter-spacing: 2px;
}
}
@media(max-width:640px){
	h1.header-w3ls {
    font-size: 44px;
}
select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, 
.form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
    letter-spacing: 1px;
}
.appointment-w3 {
    width: 60%;
}
}
@media(max-width:600px){
	h1.header-w3ls {
    letter-spacing: 2px;
}
select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, .form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
    font-size: 13px;
}
.copy p {
    line-height: 28px;
    padding: 0px 20px;
}
}
@media(max-width:568px){
	.personal h2, .information h3, .passport h3 {
    font-size: 28px;
}
h1.header-w3ls {
    font-size: 42px;
}
textarea {
    height: 114px;
}
}
@media(max-width:480px){
.main {
	flex-direction: column;
   -webkit-flex-direction:  column;
}
h1.header-w3ls {
    font-size: 41px;
	line-height: 51px;
}
.appointment-w3 {
    margin: 13px auto 30px;
}
.appointment-w3 {
    width: 65%;
}
}
@media(max-width:440px){
	.personal h2, .information h3, .passport h3 {
    font-size: 26px;
}
	input[type="submit"] {
    margin: 14px 0px;
	}
}
@media(max-width:414px){
.appointment-w3 {
    width: 74%;
}
}
@media(max-width:384px){
	h1.header-w3ls {
    font-size: 37px;
}
}
@media(max-width:375px){
	textarea {
    height: 111px;
}
input#timepicker, input#timepicker1 {
    width: 100%;
}
input#datepicker, input#datepicker1 {
    width: 100%;
}
h1.header-w3ls {
    font-size: 35px;
	 line-height: 42px;
}
}
@media(max-width:320px){
	.personal h2, .information h3, .passport h3 {
    letter-spacing: 1px;
	    font-size: 24px;
}
h1.header-w3ls {
	letter-spacing: 1px;
    font-size: 31px;
}
.copy p {
    letter-spacing: 1px;
}
.copy p {
    padding: 0px 5px;
}
}
/*--//responsive--*/


</style>
	<title>Table Booking</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Table Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- //Calendar -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		Reserve a Table</h1>
	<div class="appointment-w3">
		<form action="" method="post" name="form1">
			<div class="personal">
			
				<div class="main">
					
					<div class="form-right-w3ls ">

						<input type="text" class="buttom" name="phone number" autocomplete="off" placeholder="10-digit Mobile Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
			<div class="information">
				
				
				<div class="main">

					
					<div class="form-left-w3l">
						<input id="datepicker" name="text" type="text" autocomplete="off" placeholder="Booking Date &" required="">
						<input type="text" id="timepicker" autocomplete="off" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Time" required=""
						 onkeypress="return false;">
						<div class="clear"></div>
					</div>
				</div>
				
				<div class="main">

					<div class="form-left-w3l">
						<select name="adults" class="form-control" autocomplete="off" required>
					<option value="">Number of People</option>
						<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>and more</option>
					</select>
					</div>
					<div class="form-right-w3ls">
						<select class="form-control" name="children" autocomplete="off" required>
					<option value="">Special Offers for Infants(<3)</option>
						
					</select>
					</div>
				</div>
				
			</div>
			
			
			<div class="btnn">
				<input type="submit" value="Book" onclick="red()"/>
			</div>
			<a href="../3drestaurantmenu/logout.php" >Logout</a>
		</form>
	</div>
		
	<!-- js -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker({minDate:'now'});
		});
	</script>
	<!-- //Calendar -->
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({ twentyFour: true});
	</script>
	<script>
	function red(){
		var empt= document.forms["form1"]["phone number"].value;
		var empt1= document.forms["form1"]["text"].value;
		var empt2= document.forms["form1"]["Time"].value;
		var empt3= document.forms["form1"]["adults"].value;
		if(empt.length<10 || empt1=="" || empt2=="" || empt3==""){
			alert("Please input a Value");
		}
		else	{
		document.location.href="../3drestaurantmenu/connect_menu.php";
		alert("We Have Reserved Your Table");
		return true;
		}
	}
	</script>
	<!-- //Time -->

</body>

</html>
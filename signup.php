<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<style>
		.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
		</style>
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Sharma Ji Da 7 Star Dhaba</h1>
				<nav class="codrops-demos">
					
			
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    
                 <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="fullnamesignup" class="unumber" data-icon="u">Your Full Name</label>
                                    <input id="fullnamesignup" name="fullnamesignup" autocomplete="off" required="required" type="text" placeholder="Akshat" />
                                </p>
                                
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" autocomplete="off" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" autocomplete="off" required="required" type="password" placeholder="eg. X8df!90EO" pattern=".{6,50}" required title="6 to 50 characters"/>
									<input type="checkbox" onclick="Toggle()"/> 
									<b>Show Password</b>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" autocomplete="off" required="required" type="password" placeholder="eg. X8df!90EO"/>
									<input type="checkbox" onclick="Togglea()"/> 
									<b>Show Password</b>
                                </p>
								
                                <p class="signin button"> 
									<input type="submit" name="create" value="Sign up"/> 
								</p>
                                <p>  
									Already a member ?
									<a href="signin_post.php"> Go and log in </a>
								</p>
                           </form>
                        </div>
						</div>
        </div>

                    </section>
                </div>  
				
	       <script> 
    // Change the type of input to password or text 
        function Toggle() { 
            var temp = document.getElementById("passwordsignup"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 
		function Togglea() { 
            var temp = document.getElementById("passwordsignup_confirm"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 
</script> 


</body>
</html>
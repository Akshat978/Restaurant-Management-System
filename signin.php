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
                            <form  action="" autocomplete="on" method="post"> 
                              <a><h1>Log in</h1></a>
                                <p>
                                    <label for="number" class="unumber" data-icon="u" > Your email </label>
                                    <input id="number" name="number" required="required" autocomplete="off" type="text" placeholder="yourmail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" autocomplete="off" type="password" placeholder="eg.rguyvcgrv"/> 
									<input type="checkbox" onclick="Toggleb()"/> 
									<b>Show Password</b>
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" name="made" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="signup_post.php" >Join us</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		<script> 
    // Change the type of input to password or text 
        function Toggleb() { 
            var temp = document.getElementById("password"); 
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
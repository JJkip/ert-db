<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body class="login">
        <div class="container">
            
            
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="dashboard.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Forgot password ?
									<a href="#toregister" class="to_register">Reset</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="index.php" autocomplete="on"> 
                                <h1> Password Reset</h1> 
                                
                                <p> 
                                    <label for="forgotpassword" class="forgotpassword" data-icon="e" > Enter your email</label>
                                    <input id="forgotpassword" name="forgotpassword" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" value="Send"/> 
								</p>
                                <p class="change_link">  
									Already a Registered?
									<a href="#tologin" class="to_register"> Login </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script>
jQuery(document).ready(function() {     
  //Metronic.init(); // init metronic core components
//Layout.init(); // init current layout
//Demo.init(); // init demo features
  //Login.init();
       // init background slide images
       $.backstretch([
        "images/bg/1.jpg",
        "images/bg/2.jpg",
        "images/bg/3.jpg",
        "images/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
    </body>
</html>
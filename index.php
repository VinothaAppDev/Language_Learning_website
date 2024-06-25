<?php include('server.php') ?>
<?php include('errors.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>language learning web</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
	function loadGoogleTranslate(){
		new google.translate.TranslateElement("myid")
	}
    </script>

    <header class="header">
        <a href="#" class="logo">Mother tongue</a>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
    </header>

    <section class="section">
            <div class="welcome">
                Welcome !!
            </div>
        
            <div class="content">
            The programme "Mother tongue" was initiated to celebrate the spirit of national integration. "Mother tongue" marks the unique symphony of languages of our country and is an expression of our shared dreams, hopes and aspirations for one India. Under Mother tongue initiative it was planned to provide multilingual exposure to students in Indian languages, of the Constitution of India. This initiative was just the beginning of the journey meant to create interest in these languages and aroused curiosity to learn more.
           </div>
       

        <div class="wrapper">
            <span class="icon-close">
                <i class='bx bx-x'></i>
            </span>
            <div class="logreg-box">

                <!--login form starts here-->
                <div class="form-box login">
                
                    <div class="logreg-title">
                        <h2>Login</h2>
                        <p>Login to continue learning</p>
                    </div>

                    <form action="index.php" method="post">
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="text" name="username"/>
                            <label>Email or Username</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password"/>
                            <label>Password</label>
                        </div>

                        <button type="submit" class="btn"  name="login_user">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>

                <!--register form strats here-->
                <div class="form-box register">
                
                    <div class="logreg-title">
                        <h2>Register</h2>
                        <p>Register to start learning</p>
                    </div>

                    <form action="index.php" method="post">
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text"  required  name="username" value="<?php echo $username; ?>">
                            <label>Full Name</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" required  name="email" value="<?php echo $email; ?>"/>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required  name="password_1"/>
                            <label>Password</label>
                        </div>
 
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required name="password_2"/>
                            <label>Repeat Password</label>
                        </div>
                        
                        <button type="submit" class="btn"  name="reg_user">Register</button>

                        <div class="logreg-link">
                            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>

            </div>

            

        </div>

    </section>

    <!-- footer start -->
    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Address</h4>
  	 			<ul>
  	 				<li><a href="#">bannari amman institute of technology</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Phone</h4>
  	 			<ul>
  	 				<li><a href="#">+91 8148003929</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

    <!-- footer ends -->



    <script src="js/script.js"></script>
</body>

</html>
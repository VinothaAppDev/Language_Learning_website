<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Select language</title>
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
        <a href="#" class="logo">Language learning site</a>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup"><a href="logout.php">logout</a></button>
        </div>
        </header>

        <section class="section">

        <style>
            img{
                position: relative;
                top: 150px;
                left: 55%;
            }

            .submitbtn {
             padding-left: 20px;
             padding: 15px 25px;
             border: unset;
             border-radius: 15px;
             color: #212121;
             z-index: 1;
             background: #e8e8e8;
             position: relative;
             font-weight: 800;
             font-size: 17px;
             -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
             box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
             transition: all 250ms;
             overflow: hidden;
            }

            .submitbtn::before {
             content: "";
             position: absolute;
             top: 0;
             left: 0;
             height: 100%;
             width: 0;
             border-radius: 15px;
             background-color: #212121;
             z-index: -1;
             -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
             box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
             transition: all 250ms
            }

            .submitbtn:hover {
             color: #e8e8e8;
            }

            .submitbtn:hover::before {
             width: 100%;
            }

            .wrapper1 h1{
                text-align: center;
                position: relative;
                top: 15px;
            }
        </style>
        <img src="img/select.png" alt="nope">

            <div class="wrapper1">
                <h1>Select the Language to learn</h1>
                <br><br>
                <label class="a" for="dropdown1">Choose the learning language:</label>
                <select id="dropdown1">
                    <option value="English">English</option>
                    <option value="assamese">Assamese</option>
                    <option value="bengali">Bengali</option>
                    <option value="bodo">Bodo</option>
                    <option value="dogri">Dogri</option>
                    <option value="gujarati">Gujarati</option>
                    <option value="hindi">Hindi</option>
                    <option value="kannada">Kannada</option>
                    <option value="kashmiri">Kashmiri</option>
                    <option value="konkani">Konkani</option>
                    <option value="maithili">Maithili</option>
                    <option value="malayalam">Malayalam</option>
                    <option value="manipuri">Manipuri</option>
                    <option value="marathi">Marathi</option>
                    <option value="nepali">Nepali</option>
                    <option value="odia">Odia</option>
                    <option value="punjabi">Punjabi</option>
                    <option value="sanskrit">Sanskrit</option>
                    <option value="santali">Santali</option>
                    <option value="sindhi">Sindhi</option>
                    <option value="tamil">Tamil</option>
                    <option value="telugu">Telugu</option>
                    <option value="urdu">Urdu</option>
                </select>
                <br>
                
                <label class="a" for="dropdown2">Choose the tutor language:</label>
                <select id="dropdown2">
                    <option value="english">English</option>
                    <option value="assamese">Assamese</option>
                    <option value="bengali">Bengali</option>
                    <option value="bodo">Bodo</option>
                    <option value="dogri">Dogri</option>
                    <option value="gujarati">Gujarati</option>
                    <option value="hindi">Hindi</option>
                    <option value="kannada">Kannada</option>
                    <option value="kashmiri">Kashmiri</option>
                    <option value="konkani">Konkani</option>
                    <option value="maithili">Maithili</option>
                    <option value="malayalam">Malayalam</option>
                    <option value="manipuri">Manipuri</option>
                    <option value="marathi">Marathi</option>
                    <option value="nepali">Nepali</option>
                    <option value="odia">Odia</option>
                    <option value="punjabi">Punjabi</option>
                    <option value="sanskrit">Sanskrit</option>
                    <option value="santali">Santali</option>
                    <option value="sindhi">Sindhi</option>
                    <option value="tamil">Tamil</option>
                    <option value="telugu">Telugu</option>
                    <option value="urdu">Urdu</option>
                </select>
                <br><br>
                <button id="redirectButton" class ="submitbtn"> Submit </button>
                
            
            </div>
        </section>
    
    <script>
        const redirectButton = document.getElementById('redirectButton');

        redirectButton.addEventListener('click', () => {
            const dropdown1Value = document.getElementById('dropdown1').value;
            const dropdown2Value = document.getElementById('dropdown2').value;

            let redirectTo = `${dropdown1Value}/${dropdown2Value}.html`;

            // Redirect the page
            if (redirectTo) {
                window.location.href = redirectTo;
            } else {
                alert('No redirection rule defined for the selected options.');
            }
        });
    </script>

        
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


    </body>
</html>

<!DOCTYPE HTML>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Hi! I'm Jenny Papilla I am a IT Supervisor and have worked as a consultant. I am confident with my management skills, business acumen and knowledge in analyzation of processes are ideal for the position available in your company." />
      <meta name="keywords" content="Jenny Papilla, Porfolio, It Management, Supervisor" />
      <meta name="author" content="Jenny Papilla" />
      <meta property="og:title" content="Jenny Papilla">
      <meta property="og:url" content="https://jennypapilla.github.io/my/">
      <meta property="og:description" content="Hi! I'm Jenny Papilla I am a IT Supervisor and have worked as a consultant. I am confident with my management skills, business acumen and knowledge in analyzation of processes are ideal for the position available in your company.">
      <meta property="og:image" content="https://jennypapilla.github.io/my/images/slide_1.jpg">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Jenny Papilla - Objective</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="stylesheet" href="css/flexslider.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

      <div id="preloader">
         <div class="pre-container">
            <div class="spinner">
               <div class="double-bounce1"></div>
               <div class="double-bounce2"></div>
            </div>
         </div>
      </div>

      <nav id="main-nav">
         <a href="#" class="js-nav-toggle nav-toggle active"><i></i></a>
         <div class="js-fullheight table">
            <div class="table-cell js-fullheight">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="objective.html">Objective</a></li>
                  <li><a href="qualification.html">Qualification</a></li>
                  <li><a href="experience.html">Experience</a></li>
                  <li><a href="certification.html">Certification</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul>
               <p class="social-icon">
                  <a href="https://www.facebook.com/1315504285" target="_blank"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="skype:jenel.alexa@gmail.com?chat"><i class="fab fa-skype"></i></a>
               </p>
            </div>
         </div>
      </nav>

      <div class="scroll-icon">
         <a href="#info" class="smoothscroll">
            <div class="mouse"></div>
         </a>
         <div class="end-top"></div>
      </div>
      <div id="page">

         <header class="header">
            <div class="container">
               <div class="navbar-brand">
                  <div class="row">
                     <div class="col-xs-6">
                        <h1 class="text-left"><a class="logo" href="index.html">Jenny</a></h1>
                     </div>
                  </div>
                  <a href="#" class="js-nav-toggle nav-toggle"><i></i></a>
               </div>
            </div>
         </header>
<?php 

//Checking for errors
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//If form submit
if(isset($_POST['submit'])){
    
    //Is it a real email
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
        
        $name = htmlspecialchars($_POST['name']); 


        if($name!=""){
    
        $from = strip_tags($_POST['email']);
        $to   = "jennypapillacv@gmail.com";

        //Email subject
        $subject = "Message from you website";
        
        //Add HTML contents in $message
        $message = htmlspecialchars($_POST['message']); 

        $headers = "From:".$from. "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
              
         //Mail function   
        mail($to,$subject,$message,$headers);
            
            
        echo "Mail Sent. Thank you " . $name . ". The email you used was: ". $from;
            
        }else{ echo "Please enter a name"; }
        
    }else{ echo "Not a Valid Email"; }    
        
    }
?>
         <section id="banner" class="js-fullheight">
            <div class="flexslider js-fullheight">

               <ul class="list-unstyled ml-5 mt-3 position-relative social-links">
                  <li class="mb-3"><a href="https://www.facebook.com/1315504285" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="mb-3"><a href="skype:jenel.alexa@gmail.com?chat"><i class="fab fa-skype"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
               </ul>

               <ul class="slides">
                  <li style="background-image: url(images/slide_1.jpg);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc slider-mar-top">
                                 <h2>I'm Jenny Papilla!</h2>
                                 <h3>I am a <span>IT</span>
                                    <span id="typed-slide-1"></span>
                                    <span id="typed-strings-slide-1">
                                    <span>Supervisor</span>
                                    <span>Specialist</span>
                                    </span>
                                 </h3>
								<p class="education">De La Salle University - Dasmariñas, Cavite 2004<br>
								   Bachelor of Science in Computer Science</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>

               </ul>
            </div>
         </section>

         <section id="contact" class="bg-light pt-0">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>Get In Touch</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">CONTACT</span>
                     <p>For any question just send me a message.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 col-md-push-1">
                     <ul class="contact-info">
                        <li><i class="fas fa-map-marked-alt"></i>Dasmariñas, Cavite</li>
                        <li><i class="fas fa-phone-alt"></i>+63 960 575 3248</li>
                        <li><i class="fas fa-envelope"></i><a href="#">jenn.papilla@gmail.com</a></li>
                        <li><i class="fas fa-globe"></i><a href="#">www.yoursite.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-7 col-md-push-1">
				  <form action="contact.php" method="post">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email" required>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message" required></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group text-right">
                              <input type="submit" value="Send Message" class="btn btn-primary">
                           </div>
                        </div>
                     </div>
					 </form>
                  </div>
               </div>
            </div>
         </section>

          <footer>
            <div id="footer">
               <div class="container">
                  <div class="row copy-right">
                     <div class="col-md-6 col-md-offset-3 text-center">
                        <h2><a class="footer-logo" href="index.html">Jenny Papilla</a></h2>

                           <div class="col-md-12 no-padding mt-20">
                              <a class="btn btn " href="files/my_cv.pdf">Download CV</a>
                              <a class="btn btn-primary" href="tel:+639605753248">Call Me</a> 
                           </div>
						   
                        <p class="social-icon">
                           <a href="https://www.facebook.com/1315504285" target="_blank"><i class="fab fa-facebook-square"></i></a>
                           <a href="#"><i class="fab fa-twitter-square"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="skype:jenel.alexa@gmail.com?chat"><i class="fab fa-skype"></i></a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <a id="back-to-top" href="#"><i class="fas fa-chevron-up"></i></a>
         </footer>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countTo.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/typed.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
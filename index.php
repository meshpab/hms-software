
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hospital management System </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">HC
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Procedures</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li> 
                       <li> <a href="https://maps.google.com" target="_blank">Map</a>
                       </li>
                    </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
</ol>

            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_6.webp" alt="Second slide">
                  
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <!-- <h5 class="animated bounceInDown">Hospital Management System</h5> -->
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_4.jpg" alt="Third slide">
                   
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <!-- <h5 class="animated bounceInDown">Hospital Management System</h5> -->
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>HEALTHCONNECT LOGIN</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">LOGIN</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">LOGIN</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">LOGIN</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Telemedicine</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Analytics</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>E-Prescription</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Wellness</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Scheduling</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>


        </div>

    </section>
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
                <p>HealthConnect is an innovative healthcare management system designed to bridge the gap between healthcare providers and patients. Our platform simplifies access to medical services by offering efficient scheduling, seamless communication, and real-time health monitoring. With a user-friendly interface, HealthConnect empowers patients to take charge of their health while enabling healthcare professionals to deliver personalized, timely care. We are committed to enhancing healthcare delivery through technology, ensuring improved outcomes, and fostering trust within the healthcare ecosystem. At HealthConnect, we believe that accessible and connected healthcare is the key to a healthier community.</p>
               
    </section>    

    
            <!--  ************************* Procedures Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Procedures</h2>
                <p></p>


       <p><h3>Child delivery</h3>
        •	Gather necessary supplies (clean towels, gloves, cord clamps, etc.). <br>
        •	Plan for emergencies and have a hospital contact ready. <br>
        •	Set up a clean, warm, and quiet space with protective sheets. <br>
        •	Monitor contractions to identify early, active labor, and the urge to push. <br>
        •	Practice deep breathing and change positions for comfort. .<br>
        •	Push gently when the urge arises, and support the baby’s head as it emerges. <br>
        •	Dry the baby, clear the airway if needed, and provide skin-to-skin contact. .<br>
        •	Wait for the placenta to detach and push gently to expel it.<br>
        •	Clamp and cut the cord after it stops pulsating. <br>
        •	Ensure the mother and baby are stable, seek medical help if complications arise.<br>
        </p>
        <p><h3>Faint First Aid</h3>
            •	Ensure Safety: Move the person to a safe place to prevent injury.<br>
•	Position the Person: Lay them flat on their back and elevate their legs about 12 inches. .<br>
•	Loosen Tight Clothing: Loosen belts, collars, or anything restrictive. .<br>
•	Check Responsiveness: Gently tap or call out to see if they respond. .<br>
•	Ensure Fresh Air: Improve ventilation by opening windows or moving them to a cooler area. .<br>
•	Do Not Give Food or Drinks: Avoid offering anything until they are fully conscious. .<br>
•	Monitor Recovery: Keep them lying down until fully alert, then help them sit up slowly.<br>
•	Call for Medical Help if Necessary: Seek help if unconscious for over a minute, or if there are signs of injury or severe symptoms (e.g., chest pain). .<br>
•	Reassure Them: Stay calm and provide comfort once they regain consciousness. .<br>
</p>
<p><h3>Other first aid procedures</h3>
    <h4>1. Cuts and Scrapes</h4>
Cause:<br>Sharp objects, falls, or accidents.<br>
Response:<br>
Wash hands to prevent infection.<br>
Clean the wound with water.<br>
Apply an antiseptic and cover with a clean bandage.<br>
<h4>2. Burns</h4>
Cause:<br> Heat, chemicals, or electricity.<br>
Response:<br>
Cool the burn with running water for 10–20 minutes.<br>
Avoid breaking blisters.<br>
Cover with a sterile, non-stick dressing.<br>
<h4>3. Choking</h4>
Cause:<br> Food or small objects blocking the airway.
Response:<br>
Encourage coughing if partial obstruction.<br>
For severe obstruction, perform the Heimlich maneuver or back blows.<br>
<h4>4. Nosebleeds</h4>
Cause:<br> Trauma, dry air, or allergies.<br>
Response:<br>
Sit upright and lean forward.<br>
Pinch the nostrils shut for 10 minutes.<br>
Apply a cold compress to the nose.<br>
<h4>5. Poisoning</h4>
Cause:<br> Swallowing harmful substances, inhalation, or skin contact.<br>
Response:<br>
Identify the poison and call emergency services.<br>
Do not induce vomiting unless instructed by a professional.<br>
 <h4>6. Seizures</h4>
Cause:<br> Epilepsy, fever, or head injury.<br>
Response:<br>
Protect the person from injury (move objects away).<br>
Do not restrain or put anything in their mouth.<br>
Roll them onto their side after the seizure ends.<br>
 <h4>7. Drowning</h4>
Cause:<br> Submersion in water.<br>
Response:<br>
Remove the person from water and check breathing.<br>
Perform CPR if not breathing.<br>
<h4>8. Heart Attack</h4>
Cause:<br> Blocked blood flow to the heart.<br>
Response:<br>
Call emergency services immediately.<br>
Help the person sit and stay calm.<br>
Give aspirin if they’re not allergic.<br>

</p>
        <!-- ######## procedure End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">procedures</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
         Hospital Management System
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>
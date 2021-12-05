<?php
   require_once "autoload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

   <!-- header-start -->
  <section class="header">
      <div class="container">
      <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="media/blood-donation.png" alt="logo" >DONATETHEBLOOD</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="donate.php">Donate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="donor.php">Donors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </nav>
      </div>
  </section>
   <!-- header-end -->
	<!-- hero-start -->
     <section class="hero">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center pa-1 pt-5">
                     <h2>Donate the blood, save the life</h2>
                 </div>
                 <div class="col-md-12 text-center pa-2">
                 <h5>Donate the blood to help the others.</h5>

                 </div><br><br><br>
                 <div class="col-md-12 text-center pa-3">
                   <h2>Search The Donors</h2>
                   <span></span>
                 </div><br>
                 <div class="col-md-6 offset-md-3 pa-4">
                 <form action="search.php" method="GET" entype="multipart/form-data">
					<div class="form-group se11">
						<select class="se1 mt-5" name="location" id="location">
                            <option >--Select--</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                        </select>
					</div>
					<div class="form-group">
                    <select class="se2  mt-5" name="blood" id="blood">
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                        </select>
					</div><br><br><br><br><br>
					
					<div class="form-group">
						<input class="btn " type="submit" name="search" value="Search">
					</div>
					
				</form>

                 </div>
             </div>
         </div>
     </section>
    <!-- hero-end -->

    <!-- donate-start -->
    <section class="donate">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center pt-5 pb-5">
            <h1>Donate The Blood</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- donate-end -->


    <!-- card-start -->
     <section class="cards pt-5 pb-5">
         <div class="container">
           <div class="row">
             <div class="col-md-4">
               <div class="card shadow">
                 <div class="card-body">
                   <h3 class="text-center" style="color:#FF8E31;font-weight:600">Our Vission</h3><br>
                   <img class="img-fluid" src="media/binoculars.png" alt="img1"><br>
                   <p class="text-center">We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.</p>
                 </div>
               </div>

             </div>
             <div class="col-md-4">
             <div class="card shadow">
                 <div class="card-body">
                   <h3 class="text-center" style="color:#78D4C5;font-weight:600">Our Goal</h3><br>
                   <img class="img-fluid" src="media/goal.png" alt="img1"><br>
                   <p class="text-center">We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.</p>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
             <div class="card shadow">
                 <div class="card-body">
                   <h3 class="text-center" style="color:#E8594F;font-weight:600">Our Mission</h3><br>
                   <img class="img-fluid" src="media/target.png" alt="img1"><br>
                   <p class="text-center">We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
     </section>
  
    <!-- card-end -->
    


   <!-- contact-start -->
   <section class="contact pt-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center pb-1">
              <h3>Contact Us</h3>
              <span></span>
         </div>
         <div class="col-md-12 text-center pb-3">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-youtube"></i>
         </div>
         <div class="col-md-12 text-center cont pb-5">
            <i class="fas fa-phone-alt"> +8801719369459</i>&#160;&#160;&#160;
            <i class="fas fa-envelope"> sobujmohiuddin@gmail.com</i>
         </div>
       </div>
     </div>
   </section>


   <!-- contact-end -->
	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
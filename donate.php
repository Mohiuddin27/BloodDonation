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
	<link rel="stylesheet" href="assets/css/donate.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php

if(isset($_POST['add'])){
     
     $name=$_POST['name'];
     $dob=$_POST['dob'];
     $city=$_POST['city'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $gender='';
		 if(isset($_POST['gender'])){
			 $gender=$_POST['gender'];
		 }
     $phone=$_POST['phone'];
     $blood=$_POST['blood'];
     $hash_pass=password_hash($pass,PASSWORD_DEFAULT);
     if(empty($name) || empty($dob) || empty($city) || empty($email)||empty($pass) || empty($gender)|| empty($phone)||empty($blood)){
      $msg=validate('All fields are required','danger');
    }else if (checkemail($email) == false) {
     $msg = validate('Invalid email address ','danger');
    } else if (ceilcheck($phone) == false) {
      $msg = validate('Invalid Cell number','danger');
    }else if(datacheck('donor','email',$email)==false){
      $msg=validate('Email already exist','warning');
    }else if(datacheck('donor','phone',$phone)==false){
      $msg=validate('Cell already exist','warning');
    }
    else{
      connect()->query("INSERT INTO donor(name,gender,email,password,dob,city,phone,blood_group)VALUES('$name','$gender','$email','$hash_pass','$dob','$city','$phone','$blood')");
      $msg=validate('Your registration is successful','success');
    }

}







?>
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
	<!-- sign-up-start -->
    <section class="sign-up mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                     <div class="card shadow">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Sign Up</h3><hr>
                             <?php
                                if(isset($msg)){
                                    echo $msg;
                                  }
                              ?>
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input name="name" class="form-control"  type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Date Of Birth</label>
                                  <input name="dob" class="form-control"  type="date">
                             </div>
                             <div class="form-group">
                                  <label for="city">City: </label><br>
                                  <select class="se1" name="city" id="city">
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
                                  <label for="">Contact Number</label>
                                  <input name="phone" class="form-control"  type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Gender</label><br>
                                  <input name="gender"id="Male" value="Male" type="radio"><label for="Male"> Male</label>
                                  <input name="gender"id="Female" value="Female"type="radio"><label for="Female"> Female</label>
                              </div>
                              <div class="form-group">
                                  <label for="blood">Blood Group: </label><br> 
                                  <select class="se2" name="blood" id="blood">
                                      <option value="AB+">AB+</option>
                                      <option value="AB-">AB-</option>
                                      <option value="O+">O+</option>
                                      <option value="O-">O-</option>
                                      <option value="A+">A+</option>
                                      <option value="A-">A-</option>
                                      <option value="B+">B+</option>
                                      <option value="B-">B-</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input name="email" class="form-control"  type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Password</label>
                                  <input name="pass" class="form-control"  type="password">
                             </div>
                             <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                </div>
                            </form> 
                         </div>
                     </div>
                </div>
            </div>
    </section>
    <!-- sign-up-end -->
    


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
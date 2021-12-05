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
	   if(isset($_POST['login'])){
		    $login= $_POST['email'];
		    $pass= $_POST['pass'];
		   if(empty($login) || empty($pass)){
			   $msg=validate('All fields are required','danger');
		   }else{
			   $login_user_data=authcheck('donor','email',$login);
               if($login_user_data !== false){
				   if(password_verify($pass,$login_user_data->password) == true){
					   $_SESSION['id']=$login_user_data->id;
					   $_SESSION['name']=$login_user_data->name;
					   $_SESSION['email']=$login_user_data->email;
					   $_SESSION['password']=$login_user_data->password;
					   $_SESSION['gender']=$login_user_data->gender;
					   $_SESSION['phone']=$login_user_data->phone;
             $_SESSION['city']=$login_user_data->city;
             $_SESSION['blood_group']=$login_user_data->blood_group;
             $_SESSION['save_life_date']=$login_user_data->save_life_date;

					   header('location:dashboard.php');
				   }else{
					   $msg=validate('Password is incorrect','warning');
				   }
			   }
			   else{
				   $msg=validate('Email is invalid','warning');
			   }
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
		<!-- donor-start -->
        <section class="donor pt-5 pb-5">
         <div class="container">
             <h2 class="text-center">Donor's Login Page</h2>
             <span></span>
         </div>
     </section>

    <!-- donor-end -->


    <!-- login-start -->
    <section class="sign-up mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                     <div class="card shadow">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Log In</h3><hr>
                             <?php
                                if(isset($msg)){
                                    echo $msg;
                                  }
                              ?>
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input name="email" class="form-control"  type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Password</label>
                                  <input name="pass" class="form-control"  type="password">
                             </div>
                             <div class="form-group d-flex justify-content-center">
                                    <input class="btn btn-primary" type="submit" name="login" value="Log In">
                            </div>

                            </form> 
                         </div>
                     </div>
                </div>
            </div>
    </section>


    <!-- login-end -->
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
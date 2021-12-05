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
<body class="body">


<?php

if(isset($_POST['submit'])){
  $savelife=$_POST['savelife'];

  if(empty($savelife)){
    $msg=validate("If you have donated blood, Please fill the box","warning");
  }else{
    connect()->query("UPDATE donor set save_life_date='$savelife' WHERE id={$_SESSION['id']}");
    $msg=validate("Thanks! Your donated date successfully add","success");
  }
}


?>
   <!-- header-start -->
  <section class="header shadow">
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
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item log" href="update.php">Update Info</a>
                    <a class="dropdown-item log" href="delete.php">Delete Account</a>
                    <a class="dropdown-item log" href="logout.php">Log Out</a>
                    
                    </div>
                </li>

                  
                  
                </ul>
              </div>
            </div>
          </nav>
      </div>
  </section>
   <!-- header-end -->
	<!-- welcome-start -->
       <section class="welcome">
           <div class="container">
               <div class="row">
                   <div class="col-md-7 offset-md-2 text-center  pt-5 pb-5">
                       <h4 style="color:#62696bfa">Welcome <span style="font-size:30px;margin-left:20px;color:#f04d4a"> <?php echo $_SESSION['name'];?><span><h4>
                        <p style="font-size:15px;color:#62696bfa">Here you can manage your account update your profile</p>
                        <div class="card shadow w-50 mt-5" style="margin-left:150px;">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Save The Life</h3><hr>
                             <?php
                              if(isset($msg)){
                                echo $msg;
                              }

                            ?>
                
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Last Blood Donate Date</label>
                                  <input name="savelife" class="form-control"  type="date">
                             </div>
                             <div class="form-group">
                                <input class="btn btn-info" type="submit" name="submit" value="Submit">
                              </div>
                            </form>
                        </div>
                     </div>
                     <p style="color:red;font-size:17px;"class="mt-5">*Note:If you donate blood, you will be able to donate blood again after three months from your previous blood donation date.</p>
                   </div>
               </div>
           </div>
       </section>

    <!-- welcome-end -->


    
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
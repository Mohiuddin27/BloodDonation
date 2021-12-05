<?php
   require_once "autoload.php";
  
   $user_data=loginuserdata('donor',$_SESSION['id']);



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
          if(isset($_POST['delete'])){
              $email=$_POST['email'];

              if(empty($email)){
                   $msg=validate('All fields are required','danger');
              }else if($email != $user_data->email){
                $msg=validate('Email is not valid','danger');
              }else{
                  connect()->query("DELETE FROM donor WHERE email='$user_data->email'");
                  header('location:index.php');
                  
                 
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
	<!-- update-start -->
   <section class="update">
     <div class="partone">
       <h5 class="h5o"><a href="#"><i class="fas fa-user-tie"></i>Dashboard</a></h5>
       <h5><a href="#"><i class="fas fa-edit"></i>Update Info</a></h5>
       <h5><a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a></h5>
     </div>
     <div class="parttwo">
      
     <div class="card shadow w-50 mt-5 mb-5 two-three">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Delete Account</h3><hr>
                             <?php
                                if(isset($msg)){
                                    echo $msg;
                                  }
                              ?>
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input name="email" class="form-control"type="text">
                             </div>
                             <div class="form-group">
                                    <input href="delete.php" class="btn btn-primary" type="submit" name="delete" value="Delete Account">
                                </div>
                              </form>
                            </div>
                          </div>
                     
     </div>
   </section>


  <!-- update-end -->

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
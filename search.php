<?php
   require_once "autoload.php";
   if(isset($_GET['location'])){
    $city=$_GET['location'];
   }
   if(isset($_GET['blood'])){
    $blood=$_GET['blood'];
   }
  
   

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


   <?php
   if(isset($_POST['look'])){
     $city=$_POST['location'];
     $blood=$_POST['blood'];
     $get=connect()->query("SELECT * FROM donor WHERE city LIKE '$city' AND blood_group LIKE '$blood'");
     $get_all=$get->fetch_object();
   }



  ?>
     <section class="donor pt-5 pb-5">
         <div class="container">
             <h2 class="text-center">Our Donor's</h2>
             <span></span>
             <div class="row">
               <div class="col-md-6 offset-md-3">
               <form class="form" action="" method="POST" entype="multipart/form-data">
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
					</div>
					
					<div class="form-group">
						<input class="btn btn-info" type="submit" name="look" value="Search">
					</div>
					
				</form>

               </div>
             </div>
         </div>
         
           </div>
         </div>
     </section>

    <!-- donor-end -->
   <!-- show-details-start -->
   <section class="tables pt-5 pb-5">
        <div class="container">
        <div class="card">
            <div class="card-body">
            <table class="table">
  <thead>
      <th>#</th>
      <th>Name</th>
      <th>Date-Of-Birth</th>
      <th>City</th>
      <th>Contact Number</th>
      <th>Blood-Group</th>
      <th>Save-life-date</th>
      <th>Email</th>
    </tr>
  </thead>




  
     <?php 

$i=1;
if(!empty($city) && !empty($blood)){
 $get=connect()->query("SELECT * FROM donor WHERE city LIKE '$city' AND blood_group LIKE '$blood'");
 while($get_all=$get->fetch_object())
{
?>
    <tr>
      <td><?php echo $i ;$i=$i+1;?></td>
      <td><?php echo $get_all->name; ?></td>
      <td><?php echo $get_all->dob; ?></td>
      <td><?php echo $get_all->city; ?></td>
      <td><?php echo $get_all->phone; ?></td>
      <td><?php echo $get_all->blood_group; ?></td>
      <td><?php echo $get_all->save_life_date; ?></td>
      <td><?php echo $get_all->email; ?></td>
      
    <?php 
    }
   }
   ?>
  </tbody>
</table>
  </div>
        </div>
        </div>
    </section>
   <!-- show-details-end -->
	
   
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
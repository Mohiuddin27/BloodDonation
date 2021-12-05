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
          if(isset($_POST['add'])){
            $name=$_POST['name'];
            $dob=$_POST['dob'];
            $city=$_POST['city'];
            $email=$_POST['email'];
            $gender='';
            if(isset($_POST['gender'])){
              $gender=$_POST['gender'];
            }
            $phone=$_POST['phone'];
            $blood=$_POST['blood'];

            if(empty($name) || empty($dob) || empty($city) || empty($email)|| empty($gender)|| empty($phone)||empty($blood)){
              $msg=validate('All fields are required','danger');
            }else{
                  connect()->query("UPDATE donor SET name='$name',dob='$dob',city='$city',email='$email',gender='$gender',phone='$phone',blood_group='$blood' WHERE id='$user_data->id'");
                  $msg=validate('Edit successful','success');
                  // setmsg('success','Data updated successfully');
                  // header('location:update.php');
                 
                  
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
      
     <div class="card shadow w-50 mt-5 mb-5 two-one">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Update Info</h3><hr>
                             <?php
                                if(isset($msg)){
                                    echo $msg;
                                  }else{
                                    getmsg('success');
                                }
                              ?>
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input name="name" class="form-control"  value="<?php echo $user_data->name; ?>" type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Date Of Birth</label>
                                  <input name="dob" class="form-control"  value="<?php echo $user_data->dob; ?>" type="date">
                             </div>
                             <div class="form-group">
                                  <label for="city">City: </label><br>
                                  <select class="se1" name="city"  id="city">
                                      <option ><?php echo $user_data->city; ?></option>
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
                                  <input name="phone" class="form-control"  value="<?php echo $user_data->phone; ?>" type="text">
                             </div>
                             <div class="form-group">
                                  <label for="">Gender</label><br>
                                  <input name="gender"id="Male" value="Male" type="radio"<?php echo($user_data->gender == 'Male') ?'checked':''; ?>><label for="Male"> Male</label>
                                  <input name="gender"id="Female" value="Female"type="radio"<?php echo($user_data->gender == 'Female') ?'checked':''; ?>><label for="Female"> Female</label>
                              </div>
                              <div class="form-group">
                                  <label for="blood">Blood Group: </label><br> 
                                  <select class="se2" name="blood"  id="blood">
                                      <option><?php echo $user_data->blood_group; ?></option>
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
                                  <input name="email" class="form-control"  value="<?php echo $user_data->email; ?>" type="text">
                             </div>
                        
                             <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                </div>
                            </form> 
                         </div>
                     </div>
                     <?php
          if(isset($_POST['change'])){
              $old=$_POST['old'];
              $new=$_POST['new'];
              $cnew=$_POST['cnew'];
              $hash_pass=gethash($new);

              if(empty($old) || empty($new) || empty($cnew)){
                   $msg=validate('All fields are required','danger');
              }else if($new!=$cnew){
                   $msg=validate('password confirmation faild','warning');
              }else if(password_verify($old ,$user_data->password)==false){
                   $msg=validate('Old pass is wrong','warning');
              }else{
                  connect()->query("UPDATE donor SET password='$hash_pass' WHERE id='$user_data->id'");
                  $msg=validate('Edit successful','success');
                  
                 
              }
          }



    ?>
                     <div class="card shadow w-50 mt-5 mb-5 two-two">
                         <div class="card-body">
                             <h3 class="text-center" style="color:#f04d4a;">Password Change</h3><hr>
                             <?php
                                if(isset($msg)){
                                    echo $msg;
                                  }
                              ?>
                             <form action="" method="POST" entype="multipart/form-data">
                                <div class="form-group">
                                  <label for="">Old Password</label>
                                  <input name="old" class="form-control"   type="password">
                             </div>
                             <div class="form-group">
                                  <label for="">New Password</label>
                                  <input name="new" class="form-control"  type="password">
                             </div>
                             <div class="form-group">
                                  <label for="">Confirm Password</label>
                                  <input name="cnew" class="form-control"  type="password">
                             </div>
                             <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="change" value="Change">
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
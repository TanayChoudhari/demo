<?php session_start();?>
<?php include('head.php');?>
<?php
	include('connect.php');
	if(isset($_POST['btn_login']))
	{
		$unm = $_POST['email'];
		$passw = hash('sha256', $_POST['password']);
		function createSalt()
		{
    	return '2123293dsj2hu2nikhiljdsd';
		}
		$salt = createSalt();
		$pass = hash('sha256', $salt . $passw);
 		$sql = "SELECT * FROM admin WHERE email='" .$unm . "' and password = '". $pass."'";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    $_SESSION["id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["lname"] = $row['lname'];
    $_SESSION["image"] = $row['image'];
    $count = mysqli_num_rows($result);
    if(count($result)==1 && isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    {       
        ?>
     <script>
     window.location="index.php";
     </script>
     <?php
    }
}
else {?>
        <script> 
        alert("Invalid email or Password!");
        window.location="login.php";
        </script>
        <?php
         $message = "Invalid email or Password!";
         }
    
    }
?>
  <div id="main-wrapper">
    <div class="unix-login">
    	<?php
        $sql_login = "SELECT * FROM manage_website"; 
        $result_login = $conn->query($sql_login);
        $row_login = mysqli_fetch_array($result_login);
      ?>
      <div class="container-fluid" style="background-image:url('uploadImage/Logo/<?php echo $row_login['background_login_image'];?>');
 			background-color: #cccccc;">
      	<div class="row justify-content-center">
          <div class="col-lg-4">
           	<div class="login-content card">
              <div class="login-form">
                <center><img src="uploadImage/Logo/<?php echo $row_login['login_logo'];?>" style="width:50%;"></center><br>
                <form method="POST">
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required="">
                 	</div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox">Remember Me</label>
										<label></label>
                    <label class="pull-right"><a href="forgot_password.php">Forgotten Password?</a></label>   
                  </div>
                  <button type="submit" name="btn_login" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                  <div class="register-link m-t-15 text-center">
                    <p>&copy;<?php echo date("Y");?>All Rights Reserved.System Design By <a href="">Tanay Choudhari</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
  <script src="js/lib/jquery/jquery.min.js"></script>
  <script src="js/lib/bootstrap/js/popper.min.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.slimscroll.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="js/custom.min.js"></script>
</body>
</html>
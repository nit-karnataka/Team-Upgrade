<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
 
</head>

<body class="bg-dark" background="admin.jpg">
<?php
 //login 
 
	if(isset($_REQUEST['login'])){
 		
		session_start();  
		 
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password']; 

		$query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
		 
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		 
			if ($count == 1){
				$_SESSION['username'] = $username;
			}
			else{
				
				echo $fmsg = "";
				echo "<script type='text/javascript'> 
					alert('Invalid Login Credentials.'); 
				</script>";
			}
	 
	 
		if (isset($_SESSION['username'])){
			
		$username = $_SESSION['username']; 
			header('Location: patient.php');
		}
		else{
		}
	}
 ?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Usaername" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div> 
          <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
		  <a href="patient_login.php">Patient Login</a>
        </form> 
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

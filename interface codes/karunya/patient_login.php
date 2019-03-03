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

  <title>Paitent Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style>
</style>
</head>

<body class="bg-dark" background="user.jpg">
<?php
 //login 
 
	if(isset($_REQUEST['login'])){
 		
		session_start();  
		 
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password']; 

		echo $query = "SELECT * FROM `patient` WHERE patient_id='$username' and dob='$password'";
		 
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		$counts = mysqli_fetch_array($result);
		echo $paid = $counts['pid'];
		 
			if ($count == 1){
				$_SESSION['pusername'] = $username;
				echo $_SESSION['ppid'] = $paid;
			}
			else{
				
				echo $fmsg = "";
				echo "<script type='text/javascript'> 
					alert('Invalid Login Credentials.'); 
				</script>";
			}
	 
	 
		if (isset($_SESSION['pusername'])){
			
		$pusername = $_SESSION['pusername']; 
		echo $paids = $_SESSION['ppid']; 
		 header('Location: patient_prescription.php');
		}
		else{
		}
	}
 ?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Paitent Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="" required="required" autofocus="autofocus">
              <label for="username">Paitent Id</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" id="inputPassword" class="form-control" placeholder="" name="password" required="required">
              <label for="inputPassword">Date of birth (yyyy-dd-mm)</label>
            </div>
          </div> 
          <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
		   <a href="index.php">Admin Login</a>
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

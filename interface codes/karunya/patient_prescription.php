<?php
	include 'connection.php';
	session_start();
	$pa = $_SESSION['ppid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Patient</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Karunya</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        <div class="input-group-append">
          
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0"> 
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> 
          <a class="dropdown-item" href="patient_logout.php">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav"> 
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user"></i>
          <span>Your Profile</span></a>
      </li> 
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
  <?php
  
  	$pids = mysqli_query($connect,"SELECT * FROM `patient` WHERE pid='$pa'");
 
	$pids_fet = mysqli_fetch_array($pids);
	
	?>
        <div class="mt-12">
      <div class="card-header">Add Profile Info</div>
	  <p><a href="https://www.dropbox.com/home?preview=<?php echo $pa?>.txt" target="_blank">Get Prescription</a></p>
      <div class="card-body">
         <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="sreg" name="sreg" class="form-control" value="<?php echo $pids_fet['patient_id'];?>" placeholder="Registration No" required="required" autofocus="autofocus" readonly>
                  <label for="sreg">Patient Id</label>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="rdate" name="rdate" class="form-control" value="<?php echo $pids_fet['rdate'];?>" placeholder="Student No" required="required" autofocus="autofocus" readonly>
                  <label for="rdate">Registration Date</label>
                </div>
              </div> 
            </div>
          </div> 
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" class="form-control" value="<?php echo $pids_fet['name'];?>" placeholder="Registration No" required="required" autofocus="autofocus" readonly>
                  <label for="name">Name</label>
                </div>
              </div>  
            </div>
          </div> 
		  
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="dob" name="dob" class="form-control" value="<?php echo $pids_fet['dob'];?>" placeholder="Mobile No" required="required" autofocus="autofocus" readonly>
                  <label for="dob">Date Of Birth</label>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="control-label"> 
				<label for="gender">Gender</label>
                  <input type="radio" id="gender" name="gender" required="required">&nbsp;&nbsp;Male&nbsp;&nbsp;
                  <input type="radio" id="gender" name="gender" required="required">&nbsp;&nbsp;Female&nbsp;&nbsp; 
                </div>
              </div> 
            </div>
          </div> 
		  
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="control-label"> 
				<label for="mob">Mobile No</label>
                  <input type="text" id="mob"  value="<?php echo $pids_fet['mobile'];?>" maxlength="10" name="mob" class="form-control" placeholder="Degree" required="required" autofocus="autofocus" readonly>
                 
                </div>
              </div> 
              <div class="col-md-6">
                <div class="control-label"><label for="address">Address</label>
                  <textarea name="address"  id="address" class="form-control" required readonly><?php echo $pids_fet['address'];?></textarea>
                  
                </div>
              </div> 
            </div>
          </div> 
		   <div class="form-group">
            <div class="form-row"> 
              <div class="col-md-12">
                <div class="control-label"><label for="desp">Description</label>
                  <textarea name="desp"  id="desp" class="form-control" required readonly><?php echo $pids_fet['description'];?></textarea>
                  
                </div>
              </div> 
            </div>
          </div> 
		  
		   <div class="form-group">
            <div class="form-row"> 
              <div class="col-md-12">
                 
				 
				<iframe width="560" height="315" src="https://www.dropbox.com/home?preview=1.txt" frameborder="0" allowfullscreen></iframe>
              </div> 
            </div>
          </div> 
		  
		  
             
        </form>
        
      </div>
    </div>
 
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Sign Language</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

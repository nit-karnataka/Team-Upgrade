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

  <title>Patient Details</title>

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
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
       <ul class="sidebar navbar-nav"> 
      <li class="nav-item">
        <a class="nav-link" href="patient.php">
          <i class="fas fa-user"></i>
          <span>Paient registration</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="patient_view.php">
          <i class="fas fa-eye"></i>
          <span>Patient Details</span></a>
      </li> 
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
 
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Patient Details</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S No</th>
                    <th>Registration Date</th>
                    <th>Patient Id</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>Gender</th> 
                    <th>Mobile</th>  
                    <th>Address</th>  
                    <th>Description</th>  
                    <th>Prescription Details</th>  
                  </tr>
                </thead> 
                <tbody> 
				<?php 
				 
				 
					$sel = mysqli_query($connect,"SELECT * FROM `patient`");
					$i=1;
					while($view = mysqli_fetch_array($sel)){
						$ppid = $view['pid'];
				?>
                  <tr> 
					<td><?php echo $i;?></td>
					<td><?php echo $view['rdate'];?></td> 
					<td><?php echo $view['patient_id'];?></td>   
					<td><?php echo $view['name'];?></td> 
					<td><?php echo $view['dob'];?></td> 
					<td><?php echo $view['gender'];?></td> 
					<td><?php echo $view['mobile'];?></td> 
					<td><?php echo $view['address'];?></td> 
					<td><?php echo $view['description'];?></td> 
					<td><a href="https://www.dropbox.com/home?preview=<?php echo $ppid?>.txt" target="_blank">Prescription</a></td>  
                  </tr>	 
				<?php
					$i++;
					}
				?>
                </tbody>
              </table>
            </div>
          </div> 
        </div>
 
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Karunya</span>
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

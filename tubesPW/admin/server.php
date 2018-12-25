<?php
session_start();
//apabila user yang mengakses tidak sah
if (empty($_SESSION['namauser']) and
	empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, anda harus login
terlebih dahulu <br>";
echo "<a href=index.php><b>LOGIN</b></a></center>";
}
//apabila user yang mengakses sah
else {
	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SB Admin - Dashboard</title>

		<!-- Bootstrap core CSS-->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Page level plugin CSS-->
		<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin.css" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

		<link rel="stylesheet" href="css/style.css">

		<style type="text/css">
		.sminputs .input.active .hide-password {
			background: #eee;
		}
		.sminputs .input.full {
			width: 100%;
		}
		.sminputs .input label {
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			display: block;
			width: 100%;
			text-transform: uppercase;
			letter-spacing: 1px;
			font-weight: 700;
			font-size: 12px;
			cursor: pointer;
			line-height: 24px;
		}
		.sminputs .input input {
			postion: relative;
			display: inline-block;
			height: 24px;
			font-size: 15px;
			line-height: 19.2px;
			color: #555;
			border-radius: 4px;
			vertical-align: middle;
			box-shadow: none;
			box-sizing: border-box;
			width: 100%;
			height: auto;
			border: none;
			padding: 0;
			cursor: pointer;
			background-color: transparent;
			color: rgba(75, 89, 102, 0.85);
		}
		.sminputs .hide-password {
			display: inline-block;
			position: absolute;
			right: 0;
			top: 0;
			padding: 0 15px;
			border-left: 1px solid #e4e4e4;
			font-size: 14px;
			background: #FFF;
			overflow: hidden;
			color: #444;
			cursor: pointer;
			margin-top: 12px;
			line-height: 48px;
		}
	</style>

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
			</div>
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="server.php?module=user&act=gantipwd&id=<?php echo"$_SESSION[namauser]";?>">Settings</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<div id="wrapper">
		<?php include "menu.php"; ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php include "konten.php"; ?>

				<footer class="sticky-footer">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright © Your Website 2018</span>
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

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Page level plugin JavaScript-->
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="vendor/datatables/jquery.dataTables.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin.min.js"></script>

		<!-- Demo scripts for this page-->
		<script src="js/demo/datatables-demo.js"></script>
		<script src="js/demo/chart-area-demo.js"></script>
	</body>

	</html>

	<?php
}
?>
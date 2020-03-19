<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Register</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

			<nav class="navbar navbar-light bg-info text-white mt-2">
						<a class="navbar-brand font-weight-bold"><i class="fas fa-fw fa-book">CV</i></a>
						<form action="includes/admin_login.php" method="post" class="form-inline">
								<input type="text" name="mail" class="form-control mr-sm-2" aria-label="Search">
								<input type="password" name="pswd" class="form-control mr-sm-2" aria-label="Search">

								<button class="btn btn-outline-success my-2 my-sm-0 text-white btn-outline-light" type="submit">Search</button>
						</form>
				</nav>

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-flex d-lg-block" >
					    <div class="p-3 mt-30px">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Existing User</h1>
							</div>

							<form action="includes/admin_exist.php" method="post" class="user">
								<!-- First -->
								<div class="form-group row">
									<div class="col-sm-12 mb-3 mb-sm-0">
										<input type="text" name="mail" class="form-control" id="exampleFirstName" placeholder="Email">
									</div>
								</div>

								<input type="submit" name="submit-reg" value="REGISTER" class="btn btn-success btn-user btn-block">
							</form>
						</div>
					</div>


					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Bio Data!</h1>
							</div>
							<form action="includes/admin_reg.php" method="post" class="user">
								<!-- First -->
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" name="fname" class="form-control" id="exampleFirstName" placeholder="First Name">
									</div>
									<div class="col-sm-6">
										<input type="text" name="surname" class="form-control" id="exampleLastName" placeholder="Surname">
									</div>
								</div>
								<!-- Second -->
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" name="mname" class="form-control" id="exampleFirstName" placeholder="Middle Name">
									</div>
									<div class="col-sm-6">
										<input type="tel" name="tel_no" class="form-control" id="exampleLastName" placeholder="Phone Number">
									</div>
								</div>

								<!-- Third -->
								<div class="form-group row">
									<div class="col-sm-4 mb-3 mb-sm-0">
										<input type="date" name="d_o_b" class="form-control " id="exampleFirstName" placeholder="Date Of Birth">
									</div>
									<div class="col-sm-8">
										<input type="text" name="mail" class="form-control" id="exampleLastName" placeholder="E-mail">
									</div>
								</div>

								<!-- Fourth -->
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<!-- <input type="text"  id="" placeholder="Sex"> -->
										<select name="gender" class="form-control" id="exampleFirstName">
											<option disabled selected="selected" value="-select-">Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
									<div class="col-sm-6 mb-3 mb-sm-0">
										<!-- <input type="text" name="status_marital"  id="" placeholder=""> -->
										<select name="marital_status" id="exampleFirstName" class="form-control">
											<option disabled selected="selected" value="Marital Status">Marital Status</option>
											<option value="married">Married</option>
											<option value="single">Single</option>
											<option value="divorced">Divorced</option>
											<option value="widow">Widower</option>
										</select>
									</div>
								</div>


								<!-- Sixth -->

								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" name="secret_phase" class="form-control" id="exampleInputPassword" placeholder="Password">
									</div>
									<div class="col-sm-6">
										<input type="password" name="c_password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
									</div>
								</div>
									<input type="submit" name="submit-reg" value="REGISTER" class="btn btn-success btn-user btn-block">
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="forgot-password.html">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="login.php">Already have an account? Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

</body>

</html>

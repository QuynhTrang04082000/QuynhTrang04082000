<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/admin/layout1/css/bootstrap.min.css">
</head>
<body style="background:#6699FF;">
<div class="container" style="margin-top:180px;">
	<div class="row"  >
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading"style="font-size: 30px;padding-left: 230px;">Login</div>
				<div class="panel-body">
					<form method="post" action="index.php?controller=login&action=login">
					<div class="row" style="margin-top:10px;">
						<div class="col-md-2">Email</div>
						<div class="col-md-9"><input type="email" name="email" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-9"><input type="password" name="password" required class="form-control"></div>
					</div>
					<div class="form-group" style="margin-top: 20px;">
                       <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                <label class="custom-control-label" for="rememberPasswordCheck" style="color:#3333FF;font-weight: normal;">Remember password</label>

                        </div>

                    </div>
                    <a class="small" href="../assets/admin/layout1/password.html" style="font-size: 14px;">Forgot Password?</a>
					<div class="row" style="margin-top:-5px;margin-left: 290px;">

						<div class="col-md-2"></div>
						<div class="col-md-9"><input type="submit" value="Login" class="btn btn-primary" > <input type="reset" value="Reset" class="btn btn-danger"></div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="../assets/admin/layout1/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    	<form method="post" action="index.php?controller=login&action=login">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/admin/layout1/js/scripts.js"></script>
    </body>
</html> -->

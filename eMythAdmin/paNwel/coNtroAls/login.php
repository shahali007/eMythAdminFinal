<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="author" content="eMythMakers.com">
<meta http-equiv="refresh" content="600">

<?php echo $sCSSBootStrap; ?>
<?php echo $sCSSFontAwesome; ?>
<?php echo $sCSSEMM; ?>
<!--[if lt IE 9]>
<?php echo $sJShtml5shiv; ?>
<?php echo $sJSrespond; ?>
<![endif]-->
</head>
<body>
<div id="login">
	<div class="container">
		 <div class="row">
			 <div class="col-sm-12 ">
				<div class="login-form">
					<form id="frmLogin" name="frmLogin" method="post" action="login.php">
						<h3 class='text-center'>eMythMakers.com</h3>
						<div class="form-group  has-feedback">
							<input type="text" class="form-control" id="txtUserName" name="txtUserName" placeholder="Username">
							<i class="fa fa-user form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
							<i class="fa fa-lock form-control-feedback"></i>
						</div>
						<button type="submit" name="btnSubmit" class="btn btn-block">LogIn</button>
					</form>
				</div>
				<a href="#" class="forgot">Forgot Password?</a>
			 </div>   
		 </div>   
	</div>
</div>
<?php echo $sJSjQuery; ?>
<?php echo $sJSBootStrap; ?>
</body>
</html>
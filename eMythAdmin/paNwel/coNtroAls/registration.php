<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
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

<?php include_once("common/header.php"); ?>
<div class="main">
<div class="container-fluid">
	<div class="row">
		<?php include_once("common/leftMenu.php"); ?>
		<div class="col-sm-10 col-xs-12 main-details">
			<div class="row">
			<div class="col-sm-4 col-sm-offset-1 ">
				<form action="" method="POST">
					<h3>User Registration</h3>


					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="U_name">Name<span style="color:red;">*</span></label>
								<input type="text" title="Username cannot be empty!" class="form-control" name="U_name" id="U_name" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="U_email">Email<span style="color:red;">*</span></label>
								<input type="email" class="form-control" name="U_email" id="U_email" required >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="password">Password<span style="color:red;">*</span></label>
								<input  type="password" title="Please enter the Password." class="form-control" name="password" id="password" onChange=" this.setCustomValidity(this.validity.patternMismatch ? this.title : ''); if(this.checkValidity())form.confirm_password.pattern = this.value;" required/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">								
								<label for="confirm_password">Confirm Password<span style="color:red;">*</span></label>
								&nbsp;<span id="message"></span>
								<input title="Please enter the same Password as above" type="password" class="form-control" name="confirm_password" id="confirm_password" onChange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="user-role">Select Role<span style="color:red;">*</span></label>
								<select class="form-control">
									<option value="">Admin</option>
									<option value="">Manager</option>
									<option value="">Operator</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-default registration-btn">Registration</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php echo $sJSjQuery; ?>
<?php echo $sJSBootStrap; ?>
<script type="text/javascript">
$('#confirm_password').on('keyup', function(){
if($(this).val() == $('#password').val()){
$('#message').html('<i class="fa fa-check"></i> Password matched!').css({"color": "green"});
}else $('#message').html('<i class="fa fa-close"></i> Password not matching').css({"color": "red"});
});
</script>
</body>
</html>
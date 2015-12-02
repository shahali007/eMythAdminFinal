<?php include_once("common/mysqli_conneCT.php");include_once("common/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $sAdmnTitle; ?></title>
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
					<div class="col-sm-12 text-center">
                    	<h3>Welcome to Dashbord</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $sJSjQuery; ?>
<?php echo $sJSBootStrap; ?>
</body>
</html>
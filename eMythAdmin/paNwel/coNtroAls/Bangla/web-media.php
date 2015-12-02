<?php include_once("../common/mysqli_conneCT.php");include_once("../common/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<title>Web TV</title>
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

<?php include_once("../common/header.php"); ?>
<div class="main">
<div class="container-fluid">
	<div class="row">
		<?php include_once("../common/leftMenu.php"); ?>
		<div class="col-sm-10 col-xs-12 main-details">
			<div class="row">
				<div class="col-sm-12 ">
					<h3 class="text-center">Web TV</h3>
				</div>
			</div>
			<hr>

			<div class="row ">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<form action="">
							<div class="col-sm-2">
								<label for="mediaType">Meida Type</label>
								<select name="" class="form-control" id="mediaType">
									<option value="">Youtube</option>
									<option value="">Vimeo</option>
								</select>
							</div>
							<div class="col-sm-6">
								<label for="webHead">Heading</label>
								<input type="text" class="form-control" id="webHead">
							</div>
							<div class="col-sm-2">
								<label for="videoID">Video ID</label>
								<input type="text" class="form-control" id="videoID">
							</div>
							<div class="col-sm-2">
								<label for="submit">Insert</label><br>
								<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Insert</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 webMediaTable">
					<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<tr class="active">
								<th>Web Media Heading</th>
								<th>Video Number & Preview</th>
								<th class="text-center action" style="width:100px!important;">Action</th>
							</tr>
							<tr>
								<td>Top 10 Funny horrible moments in the world.</td>
								<td>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZfckmv0avlByJT7FpsvXrGkAQH-qQeVgDShhWn_IVCy_K0gzmf2iQ5kle" alt="image">
								</td>
								<td class="text-center action" >
									<form action="">
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Update</button>
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
									</form>
								</td>
							</tr><!--/ end single news list -->
						</table>
					</div>
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
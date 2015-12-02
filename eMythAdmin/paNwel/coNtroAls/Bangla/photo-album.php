<?php include_once("../common/mysqli_conneCT.php");include_once("../common/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Photo Album (Bangla)</title>
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
			<div class="row photo-gallery">
				<div class="col-sm-12">


					<div clss="row">
						<div class="col-sm-4 col-sm-offset-4">
							<h3 class="text-center">Photo Album</h3>
						</div>
						<div class="col-sm-4 text-right">
							<a href="insert-single.php" class="btn btn-sm btn-info quick-list"><i class="fa fa-reply-all"></i> &nbsp; Quick insert</a>
							<a href="list.php" class="btn btn-sm btn-info  quick-list"><i class="fa fa-reply-all"></i> &nbsp; List-views</a>
						</div>
					</div>
					<hr/><hr><hr>
					<form action="">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumName">Album Name</label>
										<input type="text" class="form-control" id="AlbumName">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumTag">Album Tag</label>
										<input type="text" class="form-control" id="AlbumTag">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumDescription">Album Description</label>
										<input type="text" class="form-control" id="AlbumDescription">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="PhotographerName">Photographer Name</label>
										<input type="text" class="form-control" id="PhotographerName">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="SelectImage">Select Image</label>
										<input type="file"  id="SelectImage">
										<p><i><small>Dimention Home Page: 240px X 140px (image must be smaller than 150) Dimention Slide: 480px X 306px (image must be smaller than 150)</small></i></p>
										<label for="ImageCaption">Image Caption</label>
										<input type="text" class="form-control" id="ImageCaption" placeholder="Image caption">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<button type="submit" class="btn btn-primary "><i class="fa fa-check"></i> Insert</button>
									</div>
								</div>
							</div>
						</div>
					</form>


					<hr>

					<div class="row">
						<div class="col-sm-3">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-right">
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-pencil-square-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-close"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSUqEH_qCQEqM0e319tOb5tu8MfjNwsPXO5-li6fL157pa9L1Y5Ww" alt="image" class="img-responsive">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-right">
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-pencil-square-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-close"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTOjI43ppG5kPgRabPiTxYeEWlAYWS7SgCctcxUio-nzvLOPXENLg" alt="image" class="img-responsive">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-right">
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-pencil-square-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-close"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTyk1QS_PRoYMSuUwX2d4kftw8jHgv_FS-7GM892-SfQaKYeg3f" alt="image" class="img-responsive">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-right">
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-pencil-square-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"> <i class="fa fa-close"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiXrFeXSn4ZTBJEjx6osUleoW4e4xgI64Skw7jV3reJmnZhU3SZg" alt="image" class="img-responsive">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
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
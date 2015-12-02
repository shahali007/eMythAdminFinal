<?php include_once("../common/mysqli_conneCT.php");include_once("../common/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Content - Insert (Bangla) - Single Column</title>
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
<!-- start header -->
<?php include_once("../common/header.php"); ?>
<div class="main">
<div class="container-fluid">
	<div class="row">
		
		<?php include_once("../common/leftMenu.php"); ?>
		<div class="col-sm-10 col-xs-12 main-details">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-4">
					<h3>Content - Insert (Bangla) - Single Column</h3>
				</div>
				<div class="col-sm-2">
					<a href="list.php" class="btn btn-sm btn-info pull-right quick-list"><i class="fa fa-reply-all"></i> &nbsp; List views</a>
				</div>
			</div>
			<hr />

			<form action="">	
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<div class="col-sm-4 ">
								<label for="">Category</label>
								<select name="" id="" class="form-control ">
									<option class="" value="">National</option>
									<option value="">International</option>
									<option value="">Economics</option>
									<option value="">Entertainment</option>
									<option value="">Sports</option>
								</select>
							</div>
							<div class="col-sm-2 ">
								<label for="">Position(Home)</label>
								<select name="" id="" class="form-control posHome-color">
									<option value="">None</option>
									<option value="">Slide</option>
									<option value="">Top1</option>
									<option value="">Top2</option>
									<option value="">Top3</option>
									<option value="">Top4</option>
									<option value="">Top5</option>
									<option value="">Top6</option>
									<option value="">Top7</option>
									<option value="">Top8</option>
									<option value="">Top9</option>
									<option value="">Top10</option>
								</select>
							</div>
							<div class="col-sm-2 ">
								<label for="">Position(Inner)</label>
								<select name="" id="" class="form-control posInner-color">
									<option value="">None</option>
									<option value="">Top1</option>
									<option value="">Top2</option>
									<option value="">Top3</option>
									<option value="">Top4</option>
									<option value="">Top5</option>
									<option value="">Top6</option>
									<option value="">Top7</option>
									<option value="">Top8</option>
									<option value="">Top9</option>
									<option value="">Top10</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 ">
								<label for="">Sub Category</label>
								<select name="" id="" class="form-control ">
									<option value="">National</option>
									<option value="">International</option>
									<option value="">Economics</option>
									<option value="">Entertainment</option>
									<option value="">Sports</option>
								</select>
							</div>
							<div class="col-sm-2 ">
								<label for="">Position(Home)</label>
								<select name="" id="" class="form-control posHome-color">
									<option value="">None</option>
									<option value="">Top1</option>
									<option value="">Top2</option>
									<option value="">Top3</option>
									<option value="">Top4</option>
									<option value="">Top5</option>
									<option value="">Top6</option>
									<option value="">Top7</option>
									<option value="">Top8</option>
									<option value="">Top9</option>
									<option value="">Top10</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<label for="SpecialCategory">Special Category</label>
								<select name="" id="" class="form-control ">
									<option value="">National</option>
									<option value="">International</option>
									<option value="">Economics</option>
									<option value="">Entertainment</option>
									<option value="">Sports</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="">Position(Home)</label>
								<select name="" id="" class="form-control posHome-color">
									<option value="">None</option>
									<option value="">Top1</option>
									<option value="">Top2</option>
									<option value="">Top3</option>
									<option value="">Top4</option>
									<option value="">Top5</option>
									<option value="">Top6</option>
									<option value="">Top7</option>
									<option value="">Top8</option>
									<option value="">Top9</option>
									<option value="">Top10</option>
								</select>
							</div>

							<div class="col-sm-4">
								<label for="">Districts</label>
								<select name="" id="" class="form-control ">
									<option value="">Dhaka</option>
									<option value="">Chittagong</option>
									<option value="">Rajshahi</option>
									<option value="">Khullna</option>
									<option value="">Borishal</option>
									<option value="">Sylhet</option>
									<option value="">Rongpur</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="">Position(Home)</label>
								<select name="" id="" class="form-control posHome-color">
									<option value="">None</option>
									<option value="">Top1</option>
									<option value="">Top2</option>
									<option value="">Top3</option>
									<option value="">Top4</option>
									<option value="">Top5</option>
									<option value="">Top6</option>
									<option value="">Top7</option>
									<option value="">Top8</option>
									<option value="">Top9</option>
									<option value="">Top10</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="">Sub Heading</label>
								<input type="text" class="form-control" id="">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-12">
								<label for="Head">Heading</label>
								<input type="text" class="form-control" id="Head">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-12">
								<label for="Initial">Initial</label>
								<input type="text" class="form-control" id="Initial">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-12">
								<label for="Writer">Writer</label>
								<input type="text" class="form-control" id="Writer">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="BriefContent">Brief Content</label>
								<textarea class="form-control" name="briefEditor" rows="3"id="BriefContent"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="DetailsContent">Details Content</label>
								<textarea class="form-control" name="detailsEditor" rows="3"id="DetailsContent"></textarea>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
								<label for="ImageSmall">Image (Small):</label><br />
								<small>
									<i>Dimention Home Page: 240px X 140px
									(image must be smaller than 150)
									Dimention Slide: 480px X 306px
									(image must be smaller than 150)
									</i>
								</small>
								<input type="file" >
								<input type="text" class="form-control" id="ImageSmall" placeholder="Image (Small) caption">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="ImageBig">Image (Big):</label><br />
								<small>
									<i>Dimention Details Page: maximum width 700px
									(image must be smaller than 150)
									</i>
								</small>
								<input type="file" >
								<input type="text" class="form-control" id="ImageBig" placeholder="Image (Big) caption">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="Tags">Tags</label>
								<input type="text" class="form-control" id="Tags">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label for="MetaKeywords">Meta keywords</label>
								<input type="text" class="form-control" id="MetaKeywords">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="well well-sm">
									<label for="">Publish : </label><br>
									<label for="publish-yes"><input type="radio" name="publish" id="publish-yes" /> Yes</label>&nbsp;&nbsp;
									<label for="publish-no"><input type="radio" name="publish" id="publish-no" /> No</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="well well-sm">
									<label for="">Scroll : </label><br>
									<label for="scroll-yes"><input type="radio" name="scroll" id="scroll-yes" />Yes</label>&nbsp;&nbsp;
									<label for="scroll-no"><input type="radio" name="scroll" id="scroll-no" />No</label>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="Previous-ID">Previous content ID</label>
								<input type="text" class="form-control" id="Previous-ID">
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
		</div>
	</div>
</div>
</div>

<?php echo $sJSjQuery; ?>
<?php echo $sJSBootStrap; ?>
<?php echo $sJSCKEditor; ?>
<script type="text/javascript">
CKEDITOR.replace( 'briefEditor' );
CKEDITOR.replace( 'detailsEditor' );
</script>
</body>
</html>
<?php include_once("../common/mysqli_conneCT.php");include_once("../common/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Content Update List (Bangla)</title>
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
			<div clss="row">
				<div class="col-sm-6 col-sm-offset-4">
					<h3>Content Update List (Bangla)</h3>
				</div>
				<div class="col-sm-2">
					<a href="insert-single.php" class="btn btn-sm btn-info pull-right quick-list"><i class="fa fa-reply-all"></i> &nbsp; Quick insert</a>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form action="">
						<div class="row">
							<div class="col-sm-4">
								<select name="" id="" class="form-control">
									<option value="">ID</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
									<option value="">06</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" name="" class="form-control" id="" placeholder="ID/Name/Text"/>
							</div>
							<div class="col-sm-4">
								<input type="submit" value="Submit"  class="form-control btn-default"/>
							</div>
						</div>
					</form>
				</div>					
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<tr class="active">
								<th>ID</th>
								<th>Heading</th>
								<th>Brief</th>
								<th>Position</th>
								<th>Time/Date</th>
								<th class="text-center">Action</th>
							</tr>
							<tr>
								<th>01</th>
								<td>
									<h3>সিম নিবন্ধন কারা করবেন কখন করবেন?</h3>
								</td>
								<td>
									<p>মোবাইল ফোন সংযোগ নিবন্ধন প্রক্রিয়া শুরু হয়েছে। সিম নিবন্ধন কার্যক্রম নামেই এটি পরিচিত। ‘অবৈধ ও অনিবন্ধিত সিম দেশ ও জাতির জন্য বিপজ্জনক’ স্লোগান...</p>
								</td>
								<td>
									<span>Home:9</span> <br />
									<span>Inner:1</span><br />
									<span>Hit:55</span>
								</td>
								<td>
									০২ নভেম্বর ২০১৫, ১৮ কার্তিক ১৪২২, ১৯ মহররম ১৪৩৭
								</td>
								<td class="text-center">
									<form action="">

										
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Quick Update</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">সিম নিবন্ধন কারা করবেন কখন করবেন?</h4>
											  </div>
											  <div class="modal-body">
												<div class="row text-left">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-12">
																<label for="Writer"></label>
																<input type="text" class="form-control" id="Writer" placeholder="Writer">
															</div>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<label for="Category">Category</label>
																<select name="" id="Category" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Home)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Inner)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SubCategory">Sub Category</label>
																<select name="" id="SubCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="Position">Position(Sub)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SpecialCategory">Special Category</label>
																<select name="" id="SpecialCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="SpecialPosition">Position(Special Category)</label>
																<select name="" id="SpecialPosition" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update</button>
											  </div>
											</div>
										  </div>
										</div><!--/end Modal -->
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Update</button>
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
									</form>
								</td>
							</tr><!--/ end single news list -->
							<tr>
								<th>02</th>
								<td>
									<h3>সিম নিবন্ধন কারা করবেন কখন করবেন?</h3>
								</td>
								<td>
									<p>মোবাইল ফোন সংযোগ নিবন্ধন প্রক্রিয়া শুরু হয়েছে। সিম নিবন্ধন কার্যক্রম নামেই এটি পরিচিত। ‘অবৈধ ও অনিবন্ধিত সিম দেশ ও জাতির জন্য বিপজ্জনক’ স্লোগান...</p>
								</td>
								<td>
									<span>Home:7</span> <br />
									<span>Inner:21</span><br />
									<span>Hit:95</span>
								</td>
								<td>
									০২ নভেম্বর ২০১৫, ১৮ কার্তিক ১৪২২, ১৯ মহররম ১৪৩৭
								</td>
								<td class="text-center">
									<form action="">


										<!-- Button trigger modal -->
										<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Quick Update</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">সিম নিবন্ধন কারা করবেন কখন করবেন?</h4>
											  </div>
											  <div class="modal-body">
												<div class="row text-left">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-12">
																<label for="Writer"></label>
																<input type="text" class="form-control" id="Writer" placeholder="Writer">
															</div>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<label for="Category">Category</label>
																<select name="" id="Category" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Home)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Inner)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SubCategory">Sub Category</label>
																<select name="" id="SubCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="Position">Position(Sub)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SpecialCategory">Special Category</label>
																<select name="" id="SpecialCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="SpecialPosition">Position(Special Category)</label>
																<select name="" id="SpecialPosition" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update</button>
											  </div>
											</div>
										  </div>
										</div><!--/end Modal -->
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Update</button>
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
									</form>
								</td>
							</tr><!--/ end single news list -->
							<tr>
								<th>03</th>
								<td>
									<h3>সিম নিবন্ধন কারা করবেন কখন করবেন?</h3>
								</td>
								<td>
									<p>মোবাইল ফোন সংযোগ নিবন্ধন প্রক্রিয়া শুরু হয়েছে। সিম নিবন্ধন কার্যক্রম নামেই এটি পরিচিত। ‘অবৈধ ও অনিবন্ধিত সিম দেশ ও জাতির জন্য বিপজ্জনক’ স্লোগান...</p>
								</td>
								<td>
									<span>Home:19</span> <br />
									<span>Inner:21</span><br />
									<span>Hit:88</span>
								</td>
								<td>
									০২ নভেম্বর ২০১৫, ১৮ কার্তিক ১৪২২, ১৯ মহররম ১৪৩৭
								</td>
								<td class="text-center">
									<form action="">


										<!-- Button trigger modal -->
										<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Quick Update</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">সিম নিবন্ধন কারা করবেন কখন করবেন?</h4>
											  </div>
											  <div class="modal-body">
												<div class="row text-left">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-12">
																<label for="Writer"></label>
																<input type="text" class="form-control" id="Writer" placeholder="Writer">
															</div>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<label for="Category">Category</label>
																<select name="" id="Category" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Home)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Inner)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SubCategory">Sub Category</label>
																<select name="" id="SubCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="Position">Position(Sub)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SpecialCategory">Special Category</label>
																<select name="" id="SpecialCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="SpecialPosition">Position(Special Category)</label>
																<select name="" id="SpecialPosition" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update</button>
											  </div>
											</div>
										  </div>
										</div><!--/end Modal -->
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Update</button>
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
									</form>
								</td>
							</tr><!--/ end single news list -->
							<tr>
								<th>04</th>
								<td>
									<h3>সিম নিবন্ধন কারা করবেন কখন করবেন?</h3>
								</td>
								<td>
									<p>মোবাইল ফোন সংযোগ নিবন্ধন প্রক্রিয়া শুরু হয়েছে। সিম নিবন্ধন কার্যক্রম নামেই এটি পরিচিত। ‘অবৈধ ও অনিবন্ধিত সিম দেশ ও জাতির জন্য বিপজ্জনক’ স্লোগান...</p>
								</td>
								<td>
									<span>Home:59</span> <br />
									<span>Inner:18</span><br />
									<span>Hit:85</span>
								</td>
								<td>
									০২ নভেম্বর ২০১৫, ১৮ কার্তিক ১৪২২, ১৯ মহররম ১৪৩৭
								</td>
								<td class="text-center">
									<form action="">


										<!-- Button trigger modal -->
										<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Quick Update</button>
										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">সিম নিবন্ধন কারা করবেন কখন করবেন?</h4>
											  </div>
											  <div class="modal-body">
												<div class="row text-left">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-12">
																<label for="Writer"></label>
																<input type="text" class="form-control" id="Writer" placeholder="Writer">
															</div>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<label for="Category">Category</label>
																<select name="" id="Category" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Home)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
															<div class="col-sm-4">
																<label for="Position">Position(Inner)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SubCategory">Sub Category</label>
																<select name="" id="SubCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="Position">Position(Sub)</label>
																<select name="" id="Position" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<label for="SpecialCategory">Special Category</label>
																<select name="" id="SpecialCategory" class="form-control">
																	<option value="">National</option>
																	<option value="">International</option>
																	<option value="">Economics</option>
																	<option value="">Entertainment</option>
																	<option value="">Sports</option>
																</select>
															</div>
															<div class="col-sm-6">
																<label for="SpecialPosition">Position(Special Category)</label>
																<select name="" id="SpecialPosition" class="form-control">
																	<option value="">Home</option>
																	<option value="">Home Top</option>
																	<option value="">Home Body</option>
																	<option value="">Home bottom</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update</button>
											  </div>
											</div>
										  </div>
										</div><!--/end Modal -->
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Update</button>
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
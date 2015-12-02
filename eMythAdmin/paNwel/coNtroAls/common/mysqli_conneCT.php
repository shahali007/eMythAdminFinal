<?php define("DB_HOST","localhost");define("DB_USER","root");define("DB_PASSWORD","");define("DB_NAME","banglanews24.com"); //Local
//define("DB_HOST","localhost");define("DB_USER","natunsom_root");define("DB_PASSWORD","IAgwA4FKTA3xK");define("DB_NAME","banglanews24.com");
global $connEMM, $dtDateTime;

if(@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Please try after a while...")){
	$connEMM=@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Please try after a while...");
	if($connEMM){
		@mysqli_query($connEMM, "SET CHARACTER SET utf8");
		@mysqli_query($connEMM, "SET SESSION collation_connection='utf8_general_ci'");
	}else{
		trigger_error("Please try after a while...");
		exit();
	}
}else{
	trigger_error("Please try after a while...");
	exit();
}

/*//Collecting the last iamge folder name
$resultImgFolder=mysqli_query($connEMM, "SELECT * FROM com_monthlyimagefoldername ORDER BY FolderID DESC LIMIT 1") or die(mysqli_error($connEMM));
$rsImgFolder=mysqli_fetch_assoc($resultImgFolder);
$sImgDir=$rsImgFolder["FolderName"];
$sImgGallery=$rsImgFolder["ImageFolderName"];
mysqli_free_result($resultImgFolder);*/
?>
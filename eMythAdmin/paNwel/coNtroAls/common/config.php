<?php /*Basic Settings*/
$sInitialBN="বাংলানিউজটোয়েন্টিফোর.কম";
$sInitialEN="bangalnews24.com";
$sSiteName="bangalnews24.com";
$sSiteTitle="Bangla News 24 - News and Entertainment 24 X 7";
$sSiteURL="http://localhost:9000/eMythAdmin/";//Local
$sCurrURL="http://localhost:9000/eMythAdmin".$_SERVER["REQUEST_URI"];//Local
//$sSiteURL="http://www.banglanews24.com/";//Web
///$sCurrURL="http://www.banglanews24.com".$_SERVER["REQUEST_URI"];//EMM


$sPath=$_SERVER["DOCUMENT_ROOT"];
$sProjDir="/eMythAdmin/";
//$sProjDir="";//Web
$sProjFullDir=$sPath.$sProjDir;


$sAdmnTitle="Admin Control Panel 8.0";
$sAdmnDir="paNwel/coNtroAls/";
$sAdmnPath=$sPath.$sProjDir.$sAdmnDir;
$sAdmnURL=$sSiteURL.$sAdmnDir;


//Local
$sCSSBootStrap='<link rel="stylesheet" type="text/css" href="'.$sAdmnURL.'common/bootstrap-3.3.5-dist/css/bootstrap.min.css">';
$sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="'.$sAdmnURL.'common/font-awesome-4.4.0/css/font-awesome.min.css">';
$sJSjQuery='<script type="text/javascript" src="'.$sAdmnURL.'common/jQuery-2.1.4/jquery-2.1.4.min.js"></script>';
$sJSBootStrap='<script type="text/javascript" src="'.$sAdmnURL.'common/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>';
$sJSCKEditor='<script type="text/javascript" src="'.$sAdmnURL.'common/ckeditor/ckeditor/ckeditor.js"></script>';
$sJShtml5shiv='<script type="text/javascript" src="'.$sAdmnURL.'common/IE9/html5shiv.3.7.2.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="'.$sAdmnURL.'common/IE9/respond.1.4.2.min.js"></script>';


//Web
/*$sCSSBootStrap='<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
$sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">';
$sJSjQuery='<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
$sJSBootStrap='<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
$sJSCKEditor='<script type="text/javascript" src="http://cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>';
$sJShtml5shiv='<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';*/


//Common
$sCSSEMM='<link rel="stylesheet" type="text/css" href="'.$sAdmnURL.'common/css/eMythMakers.css">';
$sJSEMM='<script type="text/javascript" src="'.$sAdmnURL.'common/js/eMythMakers.js"></script>';


$iMaxImgSizeContentSM=100; //KiloByte
$iMaxImgSizeContentBG=150; //KiloByte
$iMaxImgSizeGallery=150; //KiloByte


//If the database and MonthlyImageFolder information is missing
// the following value will be initialize
if(!isset($sImgDir)){$sImgDir="";}
if(!isset($sImgGallery)){$sImgGallery="";}
//Local & Web
$UploadImageAll=$sPath.$sProjDir."media/imgAll/".$sImgDir."/";
$UploadImageAllSM=$sPath.$sProjDir."media/imgAll/".$sImgDir."/SM/";
$UploadCategory=$sPath.$sProjDir."media/category/";
//Image Gallery
$UploadPhotoAlbum=$sPath.$sProjDir."media/PhotoAlbum/".$sImgGallery."/";
$UploadPhotoGallery=$sPath.$sProjDir."media/PhotoGallery/".$sImgGallery."/";
//Web Radio
$UploadWebRadio=$sPath.$sProjDir."media/mp3/";
//HTML files
$UploadXHTML_BN=$sPath.$sProjDir."xhtml/";
$UploadXHTML_EN=$sPath.$sProjDir."xhtml/English/";
//RSS
$UploadHTML_RSS=$sPath.$sProjDir."rss/";
$UploadSitemap=$sPath.$sProjDir."sitemap/";



$dtTimeDifference=6*60*60;
$dtDateTime=gmdate("Y-m-d G:i:s", time()+$dtTimeDifference);
$dtDateFormat1=gmdate("d M/Y", time()+$dtTimeDifference);
$dtTimeFormat1=gmdate("h:i:s A", time()+$dtTimeDifference);
$dtDateTimeFormat1=$dtDateFormat1." &nbsp; ".$dtTimeFormat1;



function fFormatString($s){
	global $connEMM;
	//Ommits HTML Code from the texts
	if(function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));//Escapes special characters in a string for use in an SQL statement
		$sStr=strip_tags($sStr);//Strip HTML and PHP tags from a string
		$sStr=str_replace("'", "`", $sStr);
	}else{
		$sStr=mysqli_real_escape_string($connEMM, trim($s));//Escapes special characters in a string for use in an SQL statement
		$sStr=strip_tags($sStr);//Strip HTML and PHP tags from a string
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatStringHTML($s){
	global $connEMM;
	//Passes HTML Code in the texts
	if(function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));//Escapes special characters in a string for use in an SQL statement
		$sStr=str_replace("'", "`", $sStr);
	}else{
		$sStr=mysqli_real_escape_string($connEMM, trim($s));//Escapes special characters in a string for use in an SQL statement
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatURL($s){
	global $connEMM;
	//Excludes HTML tags from a text
	$sStr=trim($s);
	$arrWords=array(":","‘","’","/","'","`","?","&", "%", "“", ",", "  ", '"');
	$sStr=str_replace($arrWords, "", $sStr);
	$sStr=strip_tags($sStr);//Strip HTML and PHP tags from a string
	$sStr=html_entity_decode($sStr);
	$sStr=str_replace(" ", "-", $sStr);
	return $sStr;
}
function fAuTrail($s){
	//Converts a query into text
	$s=trim(str_replace(",", " -- ", $s));
	$s=trim(str_replace(")", " ", $s));
	$s=trim(str_replace("(", " ", $s));
	$s=trim(str_replace("INSERT", " ", $s));
	$s=trim(str_replace("UPDATE", " ", $s));
	$s=trim(str_replace("DELETE", " ", $s));
	$s=trim(str_replace("SET", " ", $s));
	$s=trim(str_replace("INTO", " ", $s));
	$changeQoute=trim(str_replace("'", " ", $s));
	return $changeQoute;
}

function fFormatHead($s){
	global $connEMM;
	//Excludes HTML tags from a text
	$arrWords=array("&ldquo;", "&rdquo;", "&acute;", "<br>", "<br />", "<p>", "</p>", "</font>", "<blink>", "</blink>", "<font size=5>", "<font size=+5>", "<font size=4>", "<font size=+4>", "<font size=3>", "<font size=+3>", "<font color=black size=2>", "<strong>", "</strong>", "\r", "\n", "\r\n", "&nbsp;", "&rsquo;", "&lsquo;", "<iframe src=", "http://www.youtube.com/embed/", "</iframe>", "frameborder=", "width=", "height=", "color: #ff0000;", "<ul>", "</ul>", "<li>", "</li>", "<a href=", "</a>", "<span style=", "</span>", "color: #888888;", "<em>", "</em>", '0', '429', '276', ">", '\">', '\"');
	$sStr=trim($s);
	$sStr=mysqli_real_escape_string($connEMM, trim($s));//Escapes special characters in a string for use in an SQL statement
	$sStr=strip_tags($sStr);//Strip HTML and PHP tags from a string
	$sStr=str_replace("'", "`", $sStr);
	$sStr=str_replace($arrWords, " ", $sStr);
	$sStr=html_entity_decode($sStr);
	return $sStr;
}

function fFormatDate($sDate){
	//Converts a date to MySQL data value
	//Workable for DatePicker or jQuery UI DatePicker
	$sDate=date("Y-m-d", strtotime($sDate));
	return $sDate;
}
function fFormatDateR($sDate){
	//Reverse function of fFormatDate($sDate)
	$sDate=date("m/d/Y", strtotime($sDate));
	return $sDate;
}
function fFormatDateEn2Bn($BDDate){
	//Convert a English date to Bangla date
	$en=array("AM","PM","am","pm","Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","January","February","March","April","May","June","July","August","September","October","November","December","0","1","2","3","4","5","6","7","8","9");
	$bn=array("এএম","পিএম","এএম","পিএম","শনিবার","রবিবার","সোমবার","মঙ্গলবার","বুধবার","বৃহস্পতিবার","শুক্রবার","জানুয়ারি","ফেব্রুয়ারি","মার্চ","এপ্রিল","মে","জুন","জুলাই","আগস্ট","সেপ্টেম্বর","অক্টোবর","নভেম্বর","ডিসেম্বর","০","১","২","৩","৪","৫","৬","৭","৮","৯");
	$BDDate=str_replace($en,$bn,$BDDate);
	return $BDDate;
}
function fFormatTime($sTime){
	//Converts a time to MySQL data value
	$sTime=date("H:i:00", strtotime($sTime));
	return $sTime;
}
function fFormatTimeR($sTime){
	//Converts a time to MySQL data value
	$sTime=date("h:i A", strtotime($sTime));
	return $sTime;
}

function fFormatMonth2Number($sMonth){
	//Converts a month to number
	$en=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$bn=array("01","02","03","04","05","06","07","08","09","10","11","12");
	$sMonth=str_replace($en,$bn,$sMonth);
	return $sMonth;
}

function fFormatNumber2Month($sMonth){
	//Converts a number to month
	$bn=array("01","02","03","04","05","06","07","08","09","10","11","12");
	$en=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$sMonth=str_replace($bn,$en,$sMonth);
	return $sMonth;
}

function fShowYearMonth($sYearMonth){
	//Converts com_monthlyimagefoldername table to Year - Month
	$sYearMonth=str_replace('/', '-', $sYearMonth);
	$sYearMonth=date("Y - F", strtotime($sYearMonth));
	return $sYearMonth;
}

function fShowYearMonthNo($sYearMonth){
	//Converts com_monthlyimagefoldername table to Year - Month in number
	$sYearMonth=str_replace('/', '-', $sYearMonth);
	$sYearMonth=date("Y-m", strtotime($sYearMonth));
	return $sYearMonth;
}

function fShowDateNo($sYearMonth){
	//Converts date to Date in number
	$sYearMonth=str_replace('/', '-', $sYearMonth);
	$sYearMonth=date("Y-m", strtotime($sYearMonth));
	return $sYearMonth;
}

function fShowMonthNo($sYearMonth){
	//Converts date to Month in number
	$sYearMonth=str_replace('/', '-', $sYearMonth);
	$sYearMonth=date("m", strtotime($sYearMonth));
	return $sYearMonth;
}

function fShowYearNo($sYearMonth){
	//Converts date to Year in number
	$sYearMonth=str_replace('/', '-', $sYearMonth);
	$sYearMonth=date("Y", strtotime($sYearMonth));
	return $sYearMonth;
}

function fGetWords($sBrief){
	//Get first 10 words from a lot of words
	$sBrief=implode(' ', array_slice(explode(' ', $sBrief), 0, 10));
	return $sBrief;
}
function fGetWordsCount($sBrief, $iWordsNo){
	//Get first 10 words from a lot of words
	$sBrief=implode(' ', array_slice(explode(' ', $sBrief), 0, $iWordsNo));
	return $sBrief;
}


$sMsgInsert="<div align='center' class='DMsgSuccess'>Inserted into the list successfully.</div>";
$sMsgInsertFail="<div align='center' class='DMsgFail'>Error :: Your information was not Inserted.<br />Please ask your web master for help.</div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);
$sMsgUpdate="<div align='center' class='DMsgSuccess'>Updated the list successfully.</div>";
$sMsgUpdateFail="<div align='center' class='DMsgFail'>Error :: Your information was not Updated.<br />Please ask your web master for help.</div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);
$sMsgDelete="<div align='center' class='DMsgSuccess'>Deleted from list successfully.</div>";
$sMsgDeleteFail="<div align='center' class='DMsgFail'>Error :: Your information was not Deleted from the list.<br />Please ask your web master for help.</div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);
$sMsgActivate="<div align='center' class='DMsgSuccess'>Information Activate successfully.</div>";
$sMsgActivateFail="<div align='center' class='DMsgFail'>Error :: Your information was not Activate from the list.<br />Please ask your web master for help.</div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);

$sMsgUpload="<div align='center' class='DMsgSuccess'>File Uploaded successfully.</div>";
$sMsgUploadFail="<div align='center' class='DMsgFail'>Error :: Your File was not Uploaded successfully.<br />Please ask your web master for help.</div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);
$sMsgAuTrailInsert="<div align='center' class='DMsgFail'>Insert AuditTrail Error: </div>".mysqli_errno($connEMM).": ".mysqli_error($connEMM);
$sMsgRequired="<span class='SpnRequired'>*</span>";
$sMsgNumber="<span class='SpnNumber'>(Type Number)</span>";

$sMsgImgUpldSizeMaxSM="<div class='DMsgFail'>You cannot upload image file more than $iMaxImgSizeContentSM KB. Please decrease the image file size and try again.</div>";
$sMsgImgUpldSizeMaxBG="<div class='DMsgFail'>You cannot upload image file more than $iMaxImgSizeContentBG KB. Please decrease the image file size and try again.</div>";
$sMsgImgUpldSizeMaxGal="<div class='DMsgFail'>You cannot upload image file more than $iMaxImgSizeGallery KB. Please decrease the image file size and try again.</div>";

$sMsgImgHm="<div class='DInfo'>Dimention Home Page: 240px X 160px<br />(image must be smaller than $iMaxImgSizeContentSM)</div>";
$sMsgImgSlide="<div class='DInfo'>Dimention Slide: 480px X 320px<br />(image must be smaller than $iMaxImgSizeContentSM)</div>";
$sMsgImgInner="<div class='DInfo'>Dimention Details Page: maximum width 720px<br />(image must be smaller than $iMaxImgSizeContentBG))</div>";
$sMsgImgAll="<div class='DInfo'>media/imgAll/".$sImgDir."/</div>";
$sMsgImgAlbum="<div class='DInfo'>Dimention 300px X 200px<br />(image must be smaller than $iMaxImgSizeGallery)</div>";
$sMsgImgGallery="<div class='DInfo'>width/height max 720px<br />(image must be smaller than $iMaxImgSizeGallery)</div>";
$sMsgImgCatIcon="<div class='DInfo'>Dimention: 0px X 0px<br />(image must be smaller than $iMaxImgSizeContentSM)</div>";
$sMsgImgCatMenu="<div class='DInfo'>Dimention: 56px X 28px<br />(image must be smaller than $iMaxImgSizeContentSM)</div>";
$sMsgImgCatCoverHome="<div class='DInfo'>Dimention: 230px X 28px<br />(image must be smaller than $iMaxImgSizeContentSM)</div>";
$sMsgImgCatCoverInner="<div class='DInfo'>Dimention: 980px X 80px<br />(image must be smaller than $iMaxImgSizeContentBG)</div>";
?>
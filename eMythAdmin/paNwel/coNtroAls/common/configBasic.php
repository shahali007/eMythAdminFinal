<?php
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

?>
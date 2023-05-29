<?php
include("../res/x5engine.php");
$nameList = array("jz2","vvj","asr","zmv","wvy","8nx","mfe","luj","dml","tzl");
$charList = array("8","G","N","M","R","U","7","W","W","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

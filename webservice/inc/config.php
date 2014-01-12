<?php include("mysql.class.php");
	$db = new MySQL();
	define("DB_HOST", "localhost");
	define("DB_NAME", "m3d14coz_webservice");
	define("DB_USER", "m3d14coz_service");
	define("DB_PASS", 'r3d3nc10n');
	if (! $db->Open(DB_NAME,DB_HOST, DB_USER, DB_PASS)) {
    	$db->Kill();
	}
	error_reporting(E_ALL);
?>
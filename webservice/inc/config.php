<?php include("mysql.class.php");
	$db = new MySQL();
	define("DB_HOST", "localhost");
	define("DB_NAME", "apialpha");
	define("DB_USER", "root");
	define("DB_PASS", 'r3d3nc10n');
	if (! $db->Open(DB_NAME,DB_HOST, DB_USER, DB_PASS)) {
    	$db->Kill();
	}
	error_reporting(E_ERROR);
?>
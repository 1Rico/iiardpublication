<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','gcpm1108_iiardpub');

try {

	//create PDO connection
$db = new PDO("mysql:host=localhost;dbname=iiardpub_1108;charset=utf8", "root", "root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

?>

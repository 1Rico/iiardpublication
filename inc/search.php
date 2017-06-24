<?php

if(isset($_GET['q'])){
	
	//if GET var, query db
$var = $_GET['q'];
	$stmt_search = $db->prepare("SELECT * FROM publications WHERE pub_name LIKE :q
	OR pub_issue LIKE :q
	OR pub_author LIKE :q
	OR pub_journal LIKE :q
	OR pub_volume LIKE :q");
	
	
$stmt_search-> bindValue(':q', '%'. $var. '%' );	
$stmt_search->execute();

$count=$stmt_search->rowCount();
}
?>
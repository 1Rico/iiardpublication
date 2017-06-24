<?php
 
try {

	//create PDO connection
$db = new PDO("mysql:host=localhost;dbname=gcpm1108_iiardPub;charset=utf8", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
?>

<?php
$id=1;
	$stmt = $db->prepare("SELECT * FROM publications WHERE id = '$id' LIMIT 1");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<a href="<?php echo ($row['path']); ?>
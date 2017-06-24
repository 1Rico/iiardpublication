<?php

	include_once("inc/config.php");
	
	$stmt = $db->prepare("SELECT * FROM editorials ORDER BY journal");
	$stmt->execute();

	
	if(isset($_FILES['UploadFileField'])){

			$name = $_POST['name'];
			$id = $_POST['id'];
			
			$path='images/editors/'.$name.'.jpg';
			
			move_uploaded_file( $_FILES['UploadFileField']['tmp_name'], "$path");
			
			//Resize Uploaded Image
include('inc/SimpleImage.php'); 
 $image = new SimpleImage(); 
 $image->load("$path");
 $image->resize(100,100); 
 $image->save("$path");
			
			
				
				try {
    $sql = $db->prepare("UPDATE editorials SET path = :path WHERE id = :id");

$sql->execute(array(
    "id" => $id,
    "path" => $path
));
	

    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
		
			
			echo "<p style='color: #1FA833; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'>".$name." has been uploaded</p>";
			}
	
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD | Submit Manuscript - International Institute of Academic Research and development | Special Offers </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="IIARD Publications is an independent institution in Africa. It focuses on the developmental issues of the continent, by providing a medium for interaction between researchers in the academic community. Its main purpose is to foster the relationship between researchers and to create an enabling environment for contributors and academicians to share ideas that relates to developmental issues."> 
<meta name="keyword" content="iiardpub, iiard, research, publication, 'publications', publications, journal, journals, institute, 'publication company', 'online publication', 'academic research and development', 'international institute',iiardpublication, 'academic research', 'international journals', 'international publications', 'international journal','international publication'">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<link href="css/liMarquee.css" rel="stylesheet">
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<?php include_once("inc/header.php"); ?>
	<!--//header-->
	<!--breadcrumbs-->
<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Editorial Board<span>  Members</span></h3>
				
			</div>
			<div class="bs-docs-example wow fadeInDown animated" data-wow-delay=".5s"></div>
            
            <div class="bs-docs-example wow fadeInDown animated" data-wow-delay=".5s"></div>
            <div class="bs-docs-example wow fadeInDown animated" data-wow-delay=".5s">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Editor Name</th>
                            <th>Journal</th>
                            <th>Path</th>
						  <th>Upload</th>
                          <th>#</th>
						</tr>
					</thead>
					<tbody>
				<?php
				 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                 <form name="editor" action="board/" method="post" enctype="multipart/form-data">
                            
			
                 <tr>
                            <td><?php echo $row['ID']; ?></td>
							<td><a href="#"></a><?php echo $row['name']; ?></td>
							
						  <td><?php echo $row['journal']; ?></td>
                          <td><span class="badge"><?php echo @$row['path']; ?></span></td>
                          <td><input type="file" name="UploadFileField"> </td>
                          <td> <input type="submit" name="Submit" value="Go">
                          <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                          <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                          </td> 
						</tr>
                        </form> 
                        <?php } ?>
						
						
                       
                        
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--//short-codes-->	
	<!--footer-->
	<?php include_once("inc/footer.php"); ?>
	<!--//footer-->			
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
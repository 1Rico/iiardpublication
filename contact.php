<?php 
require_once("inc/config.php");
require_once("inc/search.php");

date_default_timezone_set("Africa/Lagos");
if(isset($_POST['Name'])){
	
	$to = "editor@iiardpub.org";
	$from = $_POST['Email'];
	$name = $_POST['Name'];
	$phone = $_POST['Phone'];
	$words = "We have successfully received your mail. You will hear from us in less than 24 hours.";
	$subject = "New Contact for IIARD Publications";
	$subject2 = "IIARD Editorial Team";
	$message = "Name: " . $name . "\n\n".  "Email: "  . $from . "\n\n" . "Phone: " . $phone . "\n\n" ."Message:"  . "\n" . $_POST['Message'];
	$message2 = "Dear," . " " . $name . "\n\n" . $words . "\n\n" . "With Best Regards," ."\n\n" . "IIARD Publishing Team";
	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2);
	echo "<p style='color:#379348; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'> Message Sent. Thank you " . $name . ", we will contact you shortly.</p>";

}
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("inc/path.php"); ?>
<title>IIARD | Contact Us - International Institute of Academic Research and development | Contact </title>
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
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact Us</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--contact-->
	
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">CONTACT US </h4>
                        <p>editor@iiardpub.org</p>
						<form action="contact/" enctype="multipart/form-data" method="post">
							<input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Name" name="Name" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="Email" name="Email" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Phone (Optional)" name="Phone" required="">
							<textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Message" name="Message" required></textarea>
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" value="SEND">
						</form>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact-->	
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
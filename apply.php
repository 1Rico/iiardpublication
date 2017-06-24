<?php

require_once("inc/config.php");
require_once("inc/search.php");

date_default_timezone_set("Africa/Lagos");
if(isset($_POST['fname'])){
	$to = "editor@iiardpub.org";
	$from = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$profession = $_POST['profession'];
	$degree = $_POST['degree'];
	$words = "We have successfully received your mail. You will hear from us in less than 24 hours.";
	$subject = "Message for IIARD Partnership";
	$subject2 = "IIARD Editorial Team";
	$message = "Name: " . $fname . "\n\n". "Surname: " . $lname . "\n\n" . "Email: "  . $from . "\n\n" . "Address: " . $address . "\n\n" . "Phone: " . $phone . "\n\n" . "State: " . $state . "\n\n" . "Country: " . $country . "\n\n" . "Profession: " . $profession . "\n\n" . "Academic Degree: " . $degree ."\n\n" . "Message:"  . "\n" . $_POST['message'];
	$message2 = "Dear," . " " . $fname . " " . $lname ."\n\n" . $words . "\n\n" . "With Best Regards," ."\n\n" . "IIARD Publishing Team";
	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2);
	echo "<p style='color:#379348; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'> Message Sent. Thank you " . $fname . ", we will contact you shortly.</p>";

}
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD | Join Us - International Institute of Academic Research and development | Special Offers </title>
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
				<li class="active">Submit Manuscript</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		  <h3 class="title" style="margin-top:-40px;">Partner<span> With Us</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
				<p style="text-align:justify">We are open to Private / International bodies and Institutions who are interested in partnership. Please send your request or proposal to editor@iiardpub.org. Or use the form below and we would get back to you as soon as possible.</p>
			
            
            <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
            
		  <div class="row wow fadeInDown animated" data-wow-delay=".5s"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row wow fadeInDown animated" data-wow-delay=".5s">
				<form role="form" method="post" action="apply.php" enctype="multipart/form-data">
                <div class="col-lg-6 in-gp-tl">
               
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">First Name</span>
				<input type="text" class="form-control" required placeholder="First Name" aria-describedby="sizing-addon3" name="fname">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Last Name</span>
				<input type="text" class="form-control" required placeholder="Last Name" aria-describedby="sizing-addon3" name="lname">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Email</span>
				<input type="email" class="form-control" required placeholder="Email" aria-describedby="sizing-addon3" name="email">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Phone</span>
				<input type="text" class="form-control" required placeholder="Phone Number" aria-describedby="sizing-addon3" name="phone">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Address</span>
				<input type="text" class="form-control" required placeholder="Address" aria-describedby="sizing-addon3" name="address">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">State</span>
				<input type="text" class="form-control" required placeholder="State" aria-describedby="sizing-addon3" name="state">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Country</span>
				<input type="text" class="form-control" required placeholder="Country" aria-describedby="sizing-addon3" name="country">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Profession</span><!-- /btn-group -->
						<select class="form-control" id="profession" name="profession" required>
    <option><em>--Please Select--</em></option>
                            <option>Lecturer</option>
                            <option>Associate Professor</option>
                            <option>Head of Academic Department</option>
                            <option>Faculty Head</option>
                            <option>Laboratory Director</option>
                            <option>Information Scientist</option>
                            <option>Medical Professional</option>
                            <option>Doctor</option>
                            <option>PhD Student</option>
                            <option>Post-doctoral Fellow</option>
                            <option>Professor</option>
                            <option>Research Director</option>
                            <option>Research Scientist</option>
                            <option>Senior Scientist</option>
                            <option>Staff Scientist</option>
                            <option>Teacher</option>
                            <option>Research Assistant</option>
                            <option>Assistant Professor</option>
                            <option>Research Associate</option>
                            <option>Other</option>
   
  </select>
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Academic Degree</span>
				<select class="form-control" id="degree" name="degree" required>
			<option><em>--Plese Select--</em></option>
    <option> Bachelor</option>
    <option> Associate</option>
    <option> Certificate</option>
    <option> Diploma</option>
    <option> Masters</option>
    <option> Doctorate</option>
    <option> Professor</option>
  </select>
					</div>
                    
                     
                  <div class="input-group">
						
                    <label for="UploadFileField">How Best Do You Want To Partner With Us?</label>
                    <span class="input-group">
			<textarea class="form-control" rows="4" name="message" required></textarea>
			</span>
                    </div>
    <input class="btn btn-primary" type="submit" name="send" id="send" />                
	
	 
     </div></form>
                    
				</div>
                
			
			
			
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
			
			
			
			
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
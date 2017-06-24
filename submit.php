<?php

require_once("inc/config.php");
require_once("inc/search.php");

	if(isset($_FILES['UploadFileField'])){
		
$mimeTypes = array("application/msword",
					"application/vnd.openxmlformats-officedocument.wordprocessingml.document");
					
$fileExtensions = array("doc", "docx");
$filetype=  $_FILES['UploadFileField']['type'];


     if (in_array($filetype, $mimeTypes)) {
                   
		
		// Creates the Variables needed to upload the file
		require 'inc/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		

		$UploadName = $_FILES['UploadFileField']['name'];
		$UploadName = mt_rand(100000, 999999).$UploadName;
		$UploadTmp = $_FILES['UploadFileField']['tmp_name'];
		$UploadType = $_FILES['UploadFileField']['type'];
		$FileSize = $_FILES['UploadFileField']['size'];
		
		// to send back to the recipient
		$first_name = $_POST['fname'];
		
		// Removes Unwanted Spaces and characters from the files names of the files being uploaded
		
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		
		// Upload File Size Limit 
		
		if(($FileSize > 500000)){  // 125000 initial
			
			die("Error - File to Big");
			
		}
		
		// Checks a File has been Selected and uploads them into a Directory on your Server
		
		if(!$UploadTmp){
			die("No File Selected, Please Upload Again");
		}else{
			//move_uploaded_file($UploadTmp, "uploads_tmp_file");
			move_uploaded_file( $_FILES['UploadFileField']['tmp_name'], "uploads/$UploadName");
			
			
			// if file upload is successful include an alert to the mailbox
			$to = "editor@iiardpub.org"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			$first_name = $_POST['fname'];
			$last_name = $_POST['lname'];
			$address = $_POST['address'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$profession = $_POST['profession'];
			$degree = $_POST['degree'];
			$title = $_POST['filename'];
			$words = "We have successfully received your mail. You will hear from us in less than 24 hours.";
			$journal = $_POST['journal'];
			$subject = "Successful File Upload to Server";
			$subject2 = "IIARD Editorial Team";
			// collects all the required feilds together
			// store in message
			$message ="Name: "  .$first_name . "\n\n" . "Surname: " . $last_name . "\n\n" . "Email: " . $from . "\n\n" . "Address: " . $address . "\n\n" . "State: "  . $state . "\n\n" . "Country: " . $country . "\n\n" . "Profession: " . $profession . "\n\n" . "Academic Degree: "  . $degree . "\n\n". "Journal Type: " . $journal . "\n\n" . "File Title: " .$title . "\n\n" . "Message: " . "\n" . $_POST['message'];
			$message2 = "Dear Researcher," ."\n\n" . $words . "\n\n" . "With Best Regards," ."\n\n" . "IIARD Publishing Team";

			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			
			$mail->setFrom($from, $first_name);
			$mail->addAddress('editor@iiardpub.org');
			$mail->Subject  = 'New File Upload to Server';
			$mail->Body     = $message;
			$mail->AddAttachment("uploads/$UploadName"); // attachment
				
			if(!$mail->send()) {
			  echo 'Message was not sent.';
			  echo 'Mailer error: ' . $mail->ErrorInfo;
			} else {
			  echo 'Message has been sent.';
			}

			
			mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
			echo "<p style='color:#379348; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'> Upload Successful. Thank you " . $first_name . ", we will contact you shortly.</p>";
			}
		} else {
			echo "<p style='color:#f00; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'>Please Select file with extension .doc or .docx </p>";
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD | Submit Manuscript - International Institute of Academic Research and development </title>
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
		  <h3 class="title" style="margin-top:-40px;">Submit<span> Manuscript</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
				<p style="text-align:justify">Research Articles written in English are invited from scholars and researchers in the academic community and other establishment for publication. An Author who wished to submit a manuscript should note that the manuscript has not been submitted elsewhere nor is it for consideration in another journal. The manuscript should be the original work of the author. IIARD welcomes and acknowledges high quality theoretical and empirical original research papers, case studies, review papers, literature reviews, book reviews, conceptual framework, analytical and simulation models, technical note from researchers, academicians, professionals, practitioners and students all over the world for publication. Kindly complete the form below. All fields are necessary. Manuscript should be in Microsoft Word Format only.
Kindly complete the form below. All fields are necessary. Manuscript should be in Microsoft Word Format only.</p>
			
            
            <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
            
		  <div class="row wow fadeInDown animated" data-wow-delay=".5s"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row wow fadeInDown animated" data-wow-delay=".5s">
				<form role="form" method="post" action="submit/" enctype="multipart/form-data">
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
				<input type="text" class="form-control" required placeholder="Email" aria-describedby="sizing-addon3" name="email">
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
						<select class="form-control"  name="profession" required>
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
			<option><em>--Please Select--</em></option>
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
						<span class="input-group-addon" id="sizing-addon3">Name of File</span>
				<input type="text" class="form-control" required placeholder="File Title" aria-describedby="sizing-addon3" name="filename">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Journal</span>
				<select class="form-control" id="select" name="journal" required>
			<option><em>--Please Select--</em></option>
     <option>IIARD INTERNATIONAL JOURNAL OF ECONOMICS AND BUSINESS MANAGEMENT</option>
     <option>INTERNATIONAL JOURNAL OF ECONOMICS AND FINANCE MANAGEMENT</option>
     <option>INTERNATIONAL JOURNAL OF MARKETING AND COMMUNICATION STUDIES</option>
     <option>INTERNATIONAL JOURNAL OF SOCIAL SCIENCES AND MANAGEMENT RESEARCH</option>
     <option>JOURNAL OF ACCOUNTING AND FINANCE MANAGEMENT (JAFM)</option>
     <option>JOURNAL OF BUSINESS AND AFRICAN ECONOMY (JBAE)</option>
     <option>WORLD JOURNAL OF ENTREPRENEURIAL DEVELOPMENT STUDIES</option>
     <option>WORLD JOURNAL OF FINANCE AND INVESTMENT RESEARCH</option>
     <option>AFRICAN JOURNAL OF HISTORY AND ARCHAEOLOGY (AJHA)</option>
     <option>INTERNATIONAL JOURNAL OF ENGLISH LANGUAGE AND COMMUNICATION STUDIES</option>
     <option>INTERNATIONAL JOURNAL OF RELIGIOUS AND CULTURAL PRACTICE</option>
     <option>JOURNAL OF HUMANITIES AND SOCIAL POLICY (JHSP)</option>
     <option>JOURNAL OF LAW AND GLOBAL POLICY (JLGP)</option>
     <option>JOURNAL OF HOTEL MANAGEMENT AND TOURISM RESEARCH</option>
     <option>RESEARCH JOURNAL OF HUMANITIES AND CULTURAL STUDIES</option>
     <option>INTERNATIONAL JOURNAL OF EDUCATION AND EVALUATION (IJEE)</option>
     <option>INTERNATIONAL JOURNAL OF ENGINEERING AND MODERN TECHNOLOGY (IJEMT)</option>
     <option>RESEARCH JOURNAL OF MASS COMMUNICATION AND INFORMATION TECHNOLOGY</option>
     <option>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH</option>
     <option>JOURNAL OF PUBLIC ADMINISTRATION AND SOCIAL WELFARE RESEARCH</option>
     <option>INTERNATIONAL JOURNAL OF HEALTH AND PHARMACEUTICAL RESEARCH</option>
     <option>IIARD INTERNATIONAL JOURNAL OF GEOGRAPHY AND ENVIRONMENTAL MANAGEMENT.</option>
     <option>INTERNATIONAL JOURNAL OF AGRICULTURE AND EARTH SCIENCE (IJAES)</option>
     <option>INTERNATIONAL JOURNAL OF APPLIED SCIENCE AND MATHEMATICAL THEORY (IJASMT)</option>
     <option>INTERNATIONAL JOURNAL OF CHEMISTRY AND CHEMICAL PROCESSES (IJCCP)</option>
     <option>INTERNATIONAL JOURNAL OF COMPUTER SCIENCE AND MATHEMATICAL THEORY</option>
     <option>INTERNATIONAL JOURNAL OF MEDICAL EVALUATION AND PHYSICAL REPORT</option>
     <option>JOURNAL OF BIOLOGY AND GENETIC RESEARCH</option>
     <option>RESEARCH JOURNAL OF FOOD SCIENCE AND QUALITY CONTROL</option>
     <option>RESEARCH JOURNAL OF PURE SCIENCE AND TECHNOLOGY</option>
     <option>WORLD JOURNAL OF INNOVATION AND MODERN TECHNOLOGY</option>
     <option>IIARD INTERNATIONAL JOURNAL OF BANKING AND FINANCE RESEARCH (IJBFR)</option>
  <option> Other</option>
  </select>
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Comment</span>
                        <textarea class="form-control" rows="4" name="message" required></textarea>
                       
					</div>
                    
	<label for="UploadFileField">Select a file to Upload: <span><code> .doc , .docx</code></span></label>
	<input type="file" name="UploadFileField" required id="UploadFileField" /> <br />
	<input class="btn btn-primary" type="submit" name="UploadButton" />
	 </div></form>
                   
                   <div class="col-lg-6 in-gp-tl">
                   <input class="form-control">
				</div>
                    
				</div>
                
			
			
			
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
			<p><code>Manuscript Publication Date:</code>30th of Every Month.</p>
			<p>Acceptance Notification:<code>Within 5-7 days from the date of manuscript submission.</code> </p>
			
			<p>Manuscript can also be submitted online as an attachment to the editor at:<code>editor@iiardpub.org</code>or <code>iiardpub@yahoo.com</code>.</p>
			
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
<?php

require_once("inc/config.php");
require_once("inc/search.php");

	if(isset($_FILES['UploadFileField'])){
		
$mimeTypes = array("application/msword",
					"application/vnd.openxmlformats-officedocument.wordprocessingml.document");

$mimeTypespic = array("image/jpeg","image/pjpeg");
					
$fileExtensions = array("doc", "docx");
$fileExtensionspic = array("jpg", "jpeg");

$filetype=  $_FILES['UploadFileField']['type'];
$filetypepic=  $_FILES['UploadFileFieldpic']['type'];


     if (!in_array($filetype, $mimeTypes)) {
		 echo "<p style='color:#f00; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'>Please Select a file with extension .doc or .docx </p>";
     }
	 else if (!in_array($filetypepic, $mimeTypespic)) {
		 echo "<p style='color:#f00; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'>Please Select a file with extension .jpg or .jpeg </p>";
     }
	 else{
		// Creates the Variables needed to upload the file
		require 'inc/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		
//for document upload
		$UploadName = $_FILES['UploadFileField']['name'];
		$UploadName = mt_rand(100000, 999999).$UploadName;
		$UploadTmp = $_FILES['UploadFileField']['tmp_name'];
		$UploadType = $_FILES['UploadFileField']['type'];
		$FileSize = $_FILES['UploadFileField']['size'];

//for Picture
		$UploadNamepic = $_FILES['UploadFileFieldpic']['name'];
		$UploadNamepic = mt_rand(100000, 999999).$UploadNamepic;
		$UploadTmppic = $_FILES['UploadFileFieldpic']['tmp_name'];
		$UploadTypepic = $_FILES['UploadFileFieldpic']['type'];
		$FileSizepic = $_FILES['UploadFileFieldpic']['size'];

		
		// to send back to the recipient
		$first_name = $_POST['fname'];
		
		// Removes Unwanted Spaces and characters from the files names of the files being uploaded
		
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		$UploadNamepic = preg_replace("#[^a-z0-9.]#i", "", $UploadNamepic);
		
		// Upload File Size Limit 
		
		if( $FileSize > 500000 OR $FileSizepic > 1000000){  // 125000 initial
			
			die("Error - The File you have uploaded is too Large");
			
		}
		
		// Checks a File has been Selected and uploads them into a Directory on your Server
		
		if(!$UploadTmp){
			die("No File Selected, Please Upload Again");
	}else{
			//Create folder and move uploaded file to the editor directory witheditor name
		$dir = 'uploads/Editors/'.$first_name.'';
			if (!is_dir($dir)) 
// is_dir - tells whether the filename is a directory
			{
		//mkdir - tells that need to create a directory
			mkdir($dir, 0755, true);
			}
			move_uploaded_file( $_FILES['UploadFileField']['tmp_name'], "$dir/$UploadName");
			move_uploaded_file( $_FILES['UploadFileFieldpic']['tmp_name'], "$dir/$UploadNamepic");
			
			
			// if file upload is successful include an alert to the mailbox
			$to = "editor@iiardpub.org"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			
			$last_name = $_POST['lname'];
			$phone = $_POST['phone'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$univ = $_POST['univ'];
			$profession = $_POST['profession'];
			$degree = $_POST['degree'];
			
			$words = "We have successfully received your application. You will hear from us in less than 24 hours.";
			$journal = $_POST['journal'];
			$subject = "New Editorial Board Member Application/";
			$subject2 = "IIARD Editorial Team";
			// collects all the required feilds together
			// store in message
			$message ="Name: "  .$first_name . "\n\n" . "Surname: " . $last_name . "\n\n" . "Email: " . $from . "\n\n" . "Phone: " . $phone . "\n\n" . "State: "  . $state . "\n\n" . "Country: " . $country . "\n\n" . "Profession: " . $profession . "\n\n" . "Academic Degree: "  . $degree . "\n\n". "Journal To Review: " . $journal;
			$message2 = "Dear" . $first_name ."\n\n" . $words . "\n\n" . "With Best Regards," ."\n\n" . "IIARD Publishing Team";

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
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD |  Reviewers and Editors </title>
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
				<li class="active">Reviewers and Editors</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		  <h3 class="title" style="margin-top:-40px;">Reviewers<span> and Editors</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
				<p style="text-align:justify">The high quality and success of our journals is attributed to our eminent Editorial Board Members. IIARD welcomes renowned academicians to be part of our editorial team in over 30 journals. <br>Interested persons should complete the form below. All fields are required.</p>
			
            
            <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
            
		  <div class="row wow fadeInDown animated" data-wow-delay=".5s"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row wow fadeInDown animated" data-wow-delay=".5s">
				<form role="form" method="post" action="" enctype="multipart/form-data">
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
						<span class="input-group-addon" id="sizing-addon3">University Affiliation</span>
				<input type="text" class="form-control" required placeholder="Address" aria-describedby="sizing-addon3" name="univ">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">State/Province</span>
				<input type="text" class="form-control" required placeholder="State" aria-describedby="sizing-addon3" name="state">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Country</span>
				<input type="text" class="form-control" required placeholder="Country" aria-describedby="sizing-addon3" name="country">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Profession</span>
				<input type="text" class="form-control" required placeholder="Profession" aria-describedby="sizing-addon3" name="profession">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Academic Degree</span>
				<input type="text" class="form-control" required placeholder="Academic Degree" aria-describedby="sizing-addon3" name="degree">
					</div>
                 
	<label for="UploadFileField">Please Upload a Passport Photo<span><code> .jpeg or .jpg </code>(File should be less than 1mb)</span></label>
	<input type="file" name="UploadFileFieldpic" required id="UploadFileFieldpic" /> <br />
    
    <label for="UploadFileField">Please Upload Your CV/Resume<span><code> .doc or .docx</code></span></label>
	<input type="file" name="UploadFileField" required id="UploadFileField" /> <br />
    
    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Select Journal to Review</span>
				<select class="form-control" id="select" name="journal" required>
			<option><em>--Plese Select--</em></option>
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
                    
                    <hr>
                
                <!--<legend>Delivery Address </legend>-->
                <input type="checkbox" name="terms" value="" required />
                I accept the terms and conditions.<a data-toggle="modal" href="#myModal"> Click Here to View</a>.
                                
                <hr>
                    
    
	<input class="btn btn-primary" type="submit" name="UploadButton"  value="Submit Application"/>
	 </form>
                </div>    
		  </div>
                
			
			
			
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
			
            
			
		</div>
	
    
    <div id="myModal" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="title">Terms  and Conditions</h3>
                </div>
                <div class="modal-body">
                
                <p><strong>Apply  as an Associate Editor/Reviewer</strong></p>
                <p>The International Institute of Academic Research and Development (IIARD)  welcome renowned academicians and Researchers to be part of our reviewer&rsquo;s  team. IIARD follows a strict set of guidelines while accepting the applicant as  a reviewer. The International Institute of Academic Research and Development (IIARD)  utilize a swift and rigorous peer-review process.  This process is utilized in order to maintain  the integrity of the journal.</p>
                <p>&nbsp;</p>
                <p><strong>Academic  Qualification</strong><br>
The Applicant must be a doctorate degree holder from  any recognized university.<br>
The Applicant must be an author with a minimum of  4 publications in reputable journals.</p>
                <p>&nbsp;</p>
                <p><strong>Reviewer&rsquo;s  Responsibilities</strong><br>
                  The Reviewer  should avoid all conflicts of interest.<br>
                  The Reviewer must be ready to give a detailed  report on each article he/she is asked to review<br>
                  The Reviewer must review the article within the  specified time of the review process (7 days)<strong> </strong><br>
                  The Reviewer should note that manuscript is to be treated as  confidential document. It should not to be shared or discussed with colleagues,  students, etc. we encourage all intended reviewers to be guided by COPE Ethical  Guidelines for Peer Reviewers. IIARD is aligned with  COPE&rsquo;s best practice for dealing with ethical issues in journal publishing and  has adopted the COPE guidelines which the journal members (Editors, Advisory  Board, and the Journal Manager) have agreed, meet the purposes and objectives  of the Journal. The complete guidelines, developed by COPE can be downloaded <a href="http://publicationethics.org/files/Peer%20review%20guidelines_0.pdf">here</a>.<br>
                  Reviewers are to establish themselves as a  well-known expert in their respective fields by conducting the peer-review,  solicit and submit relevant papers for the Journal.<br>
                  They should provide ideas, input, oversight,  contacts and moral support, to ensure the Journal maintains and extends its  reputation as a source of high quality information. </p>
                <p>&nbsp;</p>
                <p><strong>Benefits for Reviewers:</strong></p>
Reviewers&rsquo; articles will be published free of  charge.<br>
Reviewer&rsquo;s name will be listed as an Associate  editor on the journal website and in-print copies.<br>
Reviewers will have access to the latest  developments in their respective fields of expertise by examining submitted  manuscripts from all over the world.
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <a href="http://publicationethics.org/files/Peer%20review%20guidelines_0.pdf" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span>Download Pdf</a>
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
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

<script>
$(document).ready(function(){
    $("#button").click(function(){
        $("#terms").toggle('slow');
    });
});
</script>



	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
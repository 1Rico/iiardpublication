	<?php
	require_once( "inc/config.php" );
	require_once( "inc/search.php" );
	?>
	
	<?php
	
	 if ($_POST['UploadButton']) {
		 
		 require 'inc/PHPMailerAutoload.php';
		$mail = new PHPMailer;
                   
		
			$to = "editor@iiardpub.org"; 
			$from = $_POST['email'];
			$name = $_POST['name']; 
			$title = $_POST['article_title']; 
			$phone = $_POST['phone']; 
			$address = $_POST['address'];
			$state = $_POST['state'];
			$subject = "HARD COPY DISPATCH";
		 	$landmark = $_POST['landmark'];
		 
		 	if($landmark == ""){
				$landmark = "None";
			}
			// collects all the required feilds together
			// store in message
			$message ="Article Title: " . $title . "\n\n" ."Receiver's Name: "  . name . "\n\n" . "Address: " . $address . "\n\n" . "State/Province: "  . $state . "\n\n" . "Phone Number: " . $phone . "\n\n"  . "Landmark: " . $landmark;
		 
		 	$headers = "From:" . $from;
			
			$mail->setFrom($from, $name);
			$mail->addAddress('editor@iiardpub.org');
			$mail->Subject  = $subject;
			$mail->Body     = $message;
				
			if(!$mail->send()) {
			  echo 'Message was not sent.';
			  echo 'Mailer error: ' . $mail->ErrorInfo;
			} else {
			  echo "<p style='color:#379348; font-weight: bold; font-size: 18px; margin:10px; padding: 10px; text-align: center;'> We have received your request " . $name . ", we will contact you shortly.</p>";
			}

		}
?>
<!DOCTYPE html>
<html>

<head>
	<?php require_once("inc/path.php"); ?>
	<title>IIARD | ANNOUNCEMENT- International Institute of Academic Research and development</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="Description" content="IIARD Publications is an independent institution in Africa. It focuses on the developmental issues of the continent, by providing a medium for interaction between researchers in the academic community. Its main purpose is to foster the relationship between researchers and to create an enabling environment for contributors and academicians to share ideas that relates to developmental issues.">
	<meta name="keyword" content="iiardpub, iiard, research, publication, 'publications', publications, journal, journals, institute, 'publication company', 'online publication', 'academic research and development', 'international institute',iiardpublication, 'academic research', 'international journals', 'international publications', 'international journal','international publication'">
	<script type="application/x-javascript">
		addEventListener( "load", function () {
			setTimeout( hideURLbar, 0 );
		}, false );

		function hideURLbar() {
			window.scrollTo( 0, 1 );
		}
	</script>
	<!--//for-mobile-apps -->
	<!--Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!--//Custom Theme files -->
	<!--js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--//js-->
	<!--cart-->
	<script src="js/simpleCart.min.js"></script>
	<!--cart-->
	<!--web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
		jQuery( document ).ready( function ( $ ) {
			$( ".scroll" ).click( function ( event ) {
				event.preventDefault();
				$( 'html,body' ).animate( {
					scrollTop: $( this.hash ).offset().top
				}, 1000 );
			} );
		} );
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
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
				</li>
				<li class="active">Hardcopy Request</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--faq-->
	<div class="faqq-info">
		<div class="container">

			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
			<h3 class="title" style="margin-top:-40px;"><span>All hard copies are now ready for</span> dispatch </h3>

			<p>Corresponding authors should fill the form below <!--<code></code>-->
			</p>
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
			<div class="row wow fadeInDown animated" data-wow-delay=".5s"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row wow fadeInDown animated" data-wow-delay=".5s">
				<form role="form" method="post" action="news/" enctype="multipart/form-data">
                <div class="col-lg-6 in-gp-tl">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Article Title</span>
				<input type="text" class="form-control" required placeholder="Title of Article" aria-describedby="sizing-addon3" name="article_title">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Receiver's Name</span>
				<input type="text" class="form-control" required placeholder="Receiver's Name" aria-describedby="sizing-addon3" name="name">
					</div>
                    
                   
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Phone</span>
				<input type="text" class="form-control" required placeholder="Phone Number" aria-describedby="sizing-addon3" name="phone">
					</div>
                   
                   <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Email Address</span>
				<input type="email" class="form-control" required placeholder="Email Address" aria-describedby="sizing-addon3" name="email">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3"> Address</span>
				<input type="text" class="form-control" required placeholder="Receiver's Address" aria-describedby="sizing-addon3" name="address">
					</div>
                    
                    <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">State/Province</span>
				<input type="text" class="form-control" required placeholder="State/Province" aria-describedby="sizing-addon3" name="state">
					</div>
                   
                   <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3">Landmark (if any)</span>
                        <textarea class="form-control" rows="4" name="landmark"></textarea>	
                   </div>
              
                  
	<input class="btn btn-primary" type="submit" name="UploadButton" />
	<br>
	<br>
	 </div>
         </form>
                   
				</div>



<!--			<ul class="faq">-->
				<!--
				<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Applied Science and Mathematical Theory (IJASMT)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 3</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

-->

				<!--
					<li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Geography and Environmental Management (IJGEM)</a>
						<ul>
							<li class="subitem1">
							  <p><em>VOL 2. NO. 2</em></p>
							  <p><em>VOL 2. NO. 1</em></p>
							  <p><em>VOL 1. NO. 8</em></p>
							</li>									
						</ul>
					</li>
					<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

-->
<!--
				<li class="item11 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Agriculture and Earth Science (IJAES)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 5</em>
							</p>
							<p><em>VOL 2. NO. 3</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">



				<li class="item12 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Education and Evaluation (IJEE)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 5</em>
							</p>
							<p><em>VOL 2. NO. 6</em>
							</p>
							<p><em>VOL 2. NO. 7</em>
							</p>
						</li>
					</ul>
				</li>


				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Economics and Business Management (IJEBM)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 8</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">


				<li class="item19 wow fadeInDown animated" data-wow-delay=".5s"><a>Journal of Accounting and Financial Management (JAFM)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 2</em>
							</p>
							<p><em>VOL 2. NO. 3</em>
							</p>
							<p><em>VOL 2. NO. 4</em>
							</p>
							<p><em>VOL 2. NO. 5</em>
							</p>
							<p><em>VOL 2. NO. 6</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item20 wow fadeInDown animated" data-wow-delay=".5s"><a>Journal of Biology and Genetic Research (JBGR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 1. NO. 8</em>
							</p>
							<p><em>VOL 2. NO. 1</em>
							</p>
							<p><em>VOL 2. NO. 2</em>
							</p>
							<p><em>VOL 2. NO. 5</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">



				<li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Banking and Finance Research (IJBFR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 3</em>
							</p>

						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item22 wow fadeInDown animated" data-wow-delay=".5s"><a>Journal of Political Science and Leadership Research (JPSLR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 1. NO. 8</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item14 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of English Language and Communication Studies (IJELCS)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
-->





				<!--<li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a>How do i submit my manuscript?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>Authors should submit their manuscript through our online submission system or 
				send as an email attachment in MS word format to editor@iiardpub.org 
				You will immediately get a reply within 24hours.</p></li>										
						</ul>
					</li>
					<li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a>How many pages are allowed in any submitted paper?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>There are no limit whatsoever as to the number of pages to send. 
				However all submitted manuscript should be properly arranged according to the format of the journal. 
				Any manuscript that is not well arranged will not be considered.</p></li>										
						</ul>
					</li> 
					<li class="item5 wow fadeInDown animated" data-wow-delay=".5s"><a>How long will the review process last?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>Each submission undergoes a detailed but rapid review by our esteemed international reviewers. 
				The review process will be completed expectedly within 5-7 days after submission. 
				The editorial board will decide the fate of the submitted article.</p></li>										
						</ul>
					</li>
					<li class="item6 wow fadeInDown animated" data-wow-delay=".5s"><a>Why do i need to sign a copyright form?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>It is a legal requirement that we cannot publish any article without receiving a signed copyright form from the author. <br>
	If we do not receive your signed copyright form, we cannot publish your article.</p></li>										
						</ul>
					</li>
					<li class="item7 wow fadeInDown animated" data-wow-delay=".5s"><a><span class="q7">I have not received any IIARD notification even after 7 days of submission, what should i do?</span><span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p><span class="a7">Depending on your personal spam filter settings it is possible that the notification email may be directed 
				to your spam folder rather than your inbox. If this is the case, we request you to escalate the issue to editor@iiardpub.org
				You shall be informed on the status within 24 hours</span>.</p></li>										
						</ul>
					</li>
					<li class="item8 wow fadeInDown animated" data-wow-delay=".5s"><a>What is the amount for publication fee?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p><span class="a10">Publication fee varies depending on the Journal.Click on the Publication Fee tab to view the amount of each Journal. Payment details shall be sent to authors alongside there acceptance letters.</span></p>
							</li>										
						</ul>
					</li>
					<li class="item9 wow fadeInDown animated" data-wow-delay=".5s"><a>Will IIARD provide any hard copy of the published journal?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>Yes authors shall receive one hard copy of the Journal after the online publication. An Author who needs an extra copy shall be asked to pay USD 20</p></li>										
						</ul>
					</li>
					<li class="item10 wow fadeInDown animated" data-wow-delay=".5s"><a>Are there any restrictions for online access?<span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><p>There are no restrictions whatsoever. Our journals are freely available to all readers around the world free of charge.</p></li>	
							<br>									
						</ul>
					</li> -->
<!--
			</ul>

			<h2 class="title">The following <span>hard</span> copies are in press </h2>
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".7s">


			<ul class="faq">
				<li class="item7 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Applied Science and Mathematical Theory (IJASMT)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 3</em>
							</p>
						</li>
					</ul>
				</li>
-->
				<!--
<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">


					<li class="item8 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Computer Science and MAthematical Theory (IJCSMT)</a>
						<ul>
							<li class="subitem1">
							  <p><em>VOL 2. NO. 1</em></p>
							  <p><em>VOL 2. NO. 2</em></p>
							</li>									
						</ul>
					</li>
-->

<!--
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item13 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Engineering and Modern Technology (IJEMT)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 1. NO. 8</em>
							</p>
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item14 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of English Language and Communication Studies (IJELCS)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 1. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">





				<li class="item15 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Health and Pharmaceutical Research (IJHPR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				<li class="item22 wow fadeInDown animated" data-wow-delay=".5s"><a>Journal of Political Science and Leadership Research (JPSLR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">


				<li class="item22 wow fadeInDown animated" data-wow-delay=".5s"><a>Research Journal of Mass Communication and Information Technology (RJMCIT)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 1. NO. 8</em>
							</p>
							<p><em>VOL 2. NO. 1</em>
							</p>
							<p><em>VOL 2. NO. 2</em>
							</p>
							<p><em>VOL 2. NO. 3</em>
							</p>
						</li>
					</ul>
				</li>
-->
<!--				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".7s">-->


				<!--


					<li class="item16 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Marketing and Communication Studies (IJMCS)</a>
						<ul>
							<li class="subitem1">
							  <p><em>VOL 1. NO. 1</em></p>
							</li>									
						</ul>
					</li>
<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
-->

<!--
				<li class="item17 wow fadeInDown animated" data-wow-delay=".5s"><a>International Journal of Social Sciences and Management Research (IJSSMR)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">



				<li class="item18 wow fadeInDown animated" data-wow-delay=".5s"><a>Journal of Humanity and Social Policy (JHSP)</a>
					<ul>
						<li class="subitem1">
							<p><em>VOL 2. NO. 1</em>
							</p>
						</li>
					</ul>
				</li>
				<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

			</ul>
-->
			<!-- script for tabs -->
			<!--<script type="text/javascript">
					$(function() {

						var menu_ul = $('.faq > li > ul'),
							   menu_a  = $('.faq > li > a');

						menu_ul.hide();

						menu_a.click(function(e) {
							e.preventDefault();
							if(!$(this).hasClass('active')) {
								menu_a.removeClass('active');
								menu_ul.filter(':visible').slideUp('normal');
								$(this).addClass('active').next().stop(true,true).slideDown('normal');
							} else {
								$(this).removeClass('active');
								$(this).next().stop(true,true).slideUp('normal');
							}
						});

					});
				</script>
-->
			<!-- script for tabs -->
		</div>
	</div>
	<!--//faq-->
	<!--footer-->
	<?php include_once("inc/footer.php"); ?>
	<!--//footer-->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$( document ).ready( function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop( {
				easingType: 'easeOutQuart'
			} );

		} );
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
		================================================== -->
	<!--Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>
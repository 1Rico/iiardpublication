<?php
require_once("inc/config.php");
require_once("inc/search.php");
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD | About Us - International Institute of Academic Research and development | All Journals </title>
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
				<li class="active">About IIARD</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
<!--
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left; text-align: center;"><h3 class="title" >Call For Papers <span>(March 2017)</span></h3></div>
		  
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
				<p class="wow fadeInDown animated" data-wow-delay=".7s" style="text-align:justify; font-size: 18px;">Research Articles written in English are invited from interested scholars and researchers in the academic community and other establishment for publication. Authors who wish to submit manuscripts should note that the manuscripts has not been submitted elsewhere nor is it for consideration in another journal. The article should be the original work of the author.  IIARD welcomes and acknowledges high quality theoretical and empirical original research papers, case studies, review papers, literature reviews, book reviews, conceptual framework, analytical and simulation models, technical note from researchers, academicians, professionals, practitioners and students from all over the world for publication in the following Journals: </p> <br> <br>
-->
		  <div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:center;"><h3 class="title" >Academic Journals</h3></div> 
				
            <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

				   
				   <ul class="faq">
				   <div class="col-lg-6 in-gp-tl">
				   
				   <li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
					<h3 class="title"><span>Management Sciences</span></h3>
						<ul>
							<li class="subitem1">
							  <p><a href="journal/?j=IJBFR"> IIARD International Journal of Banking and Finance Research</a></p>
			   			  	  <p><a href="journal/?j=IJEBM"> IIARD International Journal of Economics and Business Management</a></p>
				   			  <p><a href="journal/?j=IJEFM"> International Journal of Economics and Financial Management</a></p>
				   			  <p><a href="journal/?j=IJSSMR"> International Journal of Social Sciences and Management Research</a></p>
							  <p><a href="journal/?j=IJMCS"> International Journal of Marketing and Communication Studies</a></p>
								<p><a href="journal/?j=JAFM"> Journal of Accounting and Financial Management</a></p>
								<p><a href="journal/?j=JBAE"> Journal of Business and African Economy</a></p>
								<p><a href="journal/?j=WJEDS"> World Journal of Entrepreneurial Development Studies</a></p>
								<p><a href="journal/?j=WJFIR"> World Journal of Finance and Investment Research</a></p>
							</li>									
						</ul>
					</li>
					
					
					<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
					

					<li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
					<h3 class="title" ><span>Sciences</span></h3>
						<ul>
							<li class="subitem1">
							   <p><a href="journal/?j=IJGEM"> IIARD International Journal of Geography and Environmental Management </a></p>
								<p><a href="journal/?j=IJAES"> International Journal of Agriculture and Earth Science</a></p>
							   <p><a href="journal/?j=IJASMT"> International Journal of Applied Science and Mathematical Theory</a></p>
							   <p><a href="journal/?j=IJCCP"> International Journal of Chemistry and Chemical Processes</a></p>
							   <p><a href="journal/?j=IJCSMT"> International Journal of Computer Science and Mathematical Theory,</a>
							   <p><a href="journal/?j=IJHPR">  International Journal of Health and Pharmaceutical Research</a></p>
							   <p><a href="journal/?j=IJMEPR"> International Journal of Medical Evaluation and Physical Report</a></p>
								<p><a href="journal/?j=JBGR"> Journal of Biology and Genetic Research</a></p>
								   <p><a href="journal/?j=RJFSQC"> Research Journal of Food Science and Quality Control</a></p>
								<p><a href="journal/?j=RJPST"> Research Journal of Pure Science and Technology</a></p>
								<p><a href="journal/?j=WJIMT"> World Journal of Innovation and Modern Technology</a></p>
							</li>									
						</ul>
					</li>
					<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">



					
					   </div>


					<div class="col-lg-6 in-gp-tl">
					
					<li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
					<h3 class="title"><span>Humanities</span></h3>
						<ul>
							<li class="subitem1">
							  <p><a href="journal/?j=AJHA"> African Journal of History and Archaeology</a>
				  			  <p><a href="journal/?j=IJELCS"> International Journal of English Language and Communication Studies</a>
							  <p><a href="journal/?j=IJRCP"> International Journal of Religious and Cultural Practice</a>
							  <p><a href="journal/?j=JHSP"> Journal of Humanities and Social Policy</a>
							  <p><a href="journal/?j=JLGP"> Journal of Law and Global Policy</a>
							  <p><a href="journal/?j=JHMTR"> Journal of Hotel Management and Tourism Research</a>
							  <p><a href="journal/?j=RJHCS"> Research Journal of Humanities and Cultural Studies</a>
							</li>									
						</ul>
					</li><hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
					
					
					<li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
					<h3 class="title"><span>Engineering</span></h3>
						<ul>
							<li class="subitem1">
							<p><a href="journal/?j=IJEMT"> International Journal of Engineering and Modern Technology</a></p>
							</li>									
						</ul>
					</li>
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
				   
					   <li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
					   <h3 class="title" ><span>Social Sciences and Education</span></h3>
						<ul>
							<li class="subitem1">
							  <p><a href="journal/?j=JPSLR"> Journal of Political Science and Leadership Research</a></p>
							  <p><a href="journal/?j=IJEE"> International Journal of Education and Evaluation</a></p>
							  <p><a href="journal/?j=IJSSMR"> International Journal of Social Sciences and Management Research</a></p>
							  <p><a href="journal/?j=JPASWR"> Journal of Public Administration and Social Welfare Research</a></p>
							  <p><a href="journal/?j=RJMCIT"> Research Journal of Mass Communication and Information Technology</a></p>
							</li>
						</ul>
					   </li>
					   <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">


					
					</div>
				
				</ul>
   
		  <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
                  <input class="form-control" disabled>
                  <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
<!--
			<p class="wow fadeInDown animated" data-wow-delay=".7s" style="text-align:justify; font-size: 18px;"><code>Article Submission Deadline:</code>22<sup>nd</sup> of Every Month.</p>
			<p class="wow fadeInDown animated" data-wow-delay=".7s" style="text-align:justify; font-size: 18px;">Acceptance Notification:<code>Within 5-7 days from the date of article submission.</code> </p>
			<p class="wow fadeInDown animated" data-wow-delay=".7s" style="text-align:justify; font-size: 18px;">Journal Publication Dates:<code>The Journals are published at the end of every month. </code> </p>
			
			<p class="wow fadeInDown animated" data-wow-delay=".7s" style="text-align:justify; font-size: 18px;">All articles should be submitted online or as an email attachment to:<code>editor@iiardpub.org</code>or <code>iiardpub@yahoo.com</code>.</p>
-->

                   
                   
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
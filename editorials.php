<?php 
require_once("inc/config.php");
require_once("inc/search.php");

//if no GET VAR
if(!isset($_GET['j'])){
	header('Location: ../editors/?j=IJEMT');
}
//if GET var, query db
$j=$_GET['j'];
	$stmt = $db->prepare("SELECT * FROM journals WHERE journal_name = :j LIMIT 1");
$stmt -> bindParam(':j', $j);

$stmt->execute();
// if not empty result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(is_array($row)){
	$stmt1 = $db->prepare("SELECT * FROM editorials WHERE journal = '$j'");
$stmt1->execute();
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once("inc/path.php"); ?>
<title>IIARD | <?php echo $j; ?>- International Institute of Academic Research and development</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="IIARD Publications is an independent institution in Africa. It focuses on the developmental issues of the continent, by providing a medium for interaction between researchers in the academic community. Its main purpose is to foster the relationship between researchers and to create an enabling environment for contributors and academicians to share ideas that relates to developmental issues."> 
<meta name="keyword" content="iiardpub, iiard, research, publication, 'publications', publications, journal, journals, institute, 'publication company', 'online publication', 'academic research and development', 'international institute',iiardpublication, 'academic research', 'international journals', 'international publications', 'international journal','international publication'">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->


<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});


</script>

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
                <li><a href="journals/"><span class="glyphicon" aria-hidden="true"></span>Journals</a></li>
                <li><span class="glyphicon" aria-hidden="true"></span>Editorials</a></li>
				<li class="active"><?php echo $row['journal_name']; ?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
	<div class="products">	 
		<div class="container" style="background:#fff;">
          <div id="journal" style="display:block" class="col-md-9 product-model-sec">
          	<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		  <h3 class="title" style="margin-top:-70px;"> <?php echo $row['journal_name_full']; ?><span> <?php echo $row['ISSN']; ?> <br>International Editorial Board Members</span></h3>
           <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
              <ul class="faq">
   			 
               <?php while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){?>
                <li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">
                <?php
					if($row1['path'] <> ""){?>
                    <div class="col-xs-3 testimonials-grid-left">
						<img src="<?php echo $row1['path']; ?>" class="img-responsive" style=" border: 2.5px solid #3e2b14; padding: 3%;"  alt="Editor" />
                        </div>
                <?php } else {?>
                <div class="col-xs-3 testimonials-grid-left">
                <img src="images/editors/editor.jpg"" class="img-responsive" alt="Editor" />
              </div>
              <?php } ?>
      
                  <strong><?php echo $row1['name']; ?></strong><br><?php if($row1['dept'] != ""){ echo $row1['dept']. '<br>'; } ?><?php if($row1['univ'] != ""){ echo $row1['univ']. '<br>'; } ?><?php echo $row1['address']; ?><br><span class="icon"> </span></a>
					
				</li> <?php } ?> 
  		
			</ul>
                    

               <div class="clearfix"> </div>
		
		  </div>

		  <div class="col-md-3 rsidebar">
			<div class="rsidebar-top">
				  <div class="list-group list-group-alternate"> 
				    <h4>Editorial Board Members</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									
        <li class="subitem1"><a href="editors/?j=IJHPR"><span class="badge badge-primary">&bull;</span> International Journal of Health And Pharmaceutical Research</a></li>										
									<li class="subitem1"><a href="editors/?j=IJGEM"><span class="badge badge-primary">&bull;</span> IIARD international journal of geography and environmental management.</a></li>										
									<li class="subitem1"><a href="editors/?j=IJAES"><span class="badge badge-primary">&bull;</span>International Journal of Agriculture And Earth Science</a></li>
                                    <li class="subitem1"><a href="editors/?j=IJMEPR"><span class="badge badge-primary">&bull;</span>International Journal of Medical Evaluation and Physical Research</a></li>	
                                    <li class="subitem1"><a href="editors/?j=IJASMT"><span class="badge badge-primary">&bull;</span>International Journal of Applied Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="editors/?j=IJCCP"><span class="badge badge-primary">&bull;</span>International Journal of Chemistry And Chemical Processes</a></li>	
                                    <li class="subitem1"><a href="editors/?j=IJCSMT"><span class="badge badge-primary">&bull;</span>International Journal of Computer Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="editors/?j=JBGR"><span class="badge badge-primary">&bull;</span>Journal of Biology And Genetic Research</a></li>	
                                    <li class="subitem1"><a href="editors/?j=RJFSQC"><span class="badge badge-primary">&bull;</span>Research Journal of Food Science And Quality Control</a></li>
                                    <li class="subitem1"><a href="editors/?j=RJPST"><span class="badge badge-primary">&bull;</span>Research Journal of Pure Science And Technology</a></li>
                                    <li class="subitem1"><a href="editors/?j=WJIMT"><span class="badge badge-primary">&bull;</span>World Journal Of Innovation And Modern Technology</a></li>	
                       		  </ul>
							</li>
						  <li class="item2"><a href="#">Engineering<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="editors/?j=IJEMT"><span class="badge badge-primary">&bull;</span>International Journal of Engineering And Modern Technology</a></li>										
															
							</ul>
						  </li>
							<li class="item3"><a href="#">Management Sciences <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="editors/?j=IJEBM"><span class="badge badge-primary">&bull;</span>IIARD International Journal of Economics And Business Management</a></li>										
									<li class="subitem1"><a href="editors/?j=IJBFR"><span class="badge badge-primary">&bull;</span>International Journal of Banking and Finance Research</a></li>
                                    <li class="subitem1"><a href="editors/?j=IJEFM"><span class="badge badge-primary">&bull;</span>International Journal of Economics And Financial Management</a></li>										
									<li class="subitem1"><a href="editors/?j=IJMCS"><span class="badge badge-primary">&bull;</span>International Journal of Marketing And Communication Studies</a></li>	
                                    <li class="subitem1"><a href="editors/?j=IJSSMR"><span class="badge badge-primary">&bull;</span>International Journal of Social Sciences And Management Research</a></li>	
                                    <li class="subitem1"><a href="editors/?j=JAFM"><span class="badge badge-primary">&bull;</span>Journal of Accounting And Financial Management</a></li>	
                                    <li class="subitem1"><a href="editors/?j=JBAE"><span class="badge badge-primary">&bull;</span>Journal Of Business And African Economy</a></li>	
                                    <li class="subitem1"><a href="editors/?j=WJEDS"><span class="badge badge-primary">&bull;</span>World Journal of Entrepreneurial Development Studies</a></li>	
                                    <li class="subitem1"><a href="editors/?j=WJFIR"><span class="badge badge-primary">&bull;</span>World Journal Of Finance And Investment Research</a></li>										
								</ul>
							</li>
                            <li class="item4"><a href="#">Humanities<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="editors/?j=AJHA"><span class="badge badge-primary">&bull;</span>African Journal of History And Archaeology</a></li>										
									<li class="subitem1"><a href="editors/?j=IJELCS"><span class="badge badge-primary">&bull;</span>International Journal of English Language And Communication Studies</a></li>										
									<li class="subitem1"><a href="editors/?j=IJRCP"><span class="badge badge-primary">&bull;</span>International Journal of Religious And Cultural Practice</a></li>				
                                    <li class="subitem1"><a href="editors/?j=JHSP"><span class="badge badge-primary">&bull;</span>Journal of Humanities And Social Policy</a></li>										
									<li class="subitem1"><a href="editors/?j=JLGP"><span class="badge badge-primary">&bull;</span>Journal Of Law And Global Policy</a></li>				
                                    <li class="subitem1"><a href="editors/?j=JHMTR"><span class="badge badge-primary">&bull;</span>Journal Of Hotel Management And Tourism Research</a></li>										
									<li class="subitem1"><a href="editors/?j=RJHCS"><span class="badge badge-primary">&bull;</span>Research Journal Of Humanities And Cultural Studies</a></li>										
								</ul>
							</li>
                            <li class="item5"><a href="#">Social Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="editors/?j=RJMCIT"><span class="badge badge-primary">&bull;</span>Research Journal Of Mass Communication And Information Technology</a></li>										
									<li class="subitem1"><a href="editors/?j=JPSLR"><span class="badge badge-primary">&bull;</span>Journal Of Political Science And Leadership Research</a></li>
                                    										
									<li class="subitem1"><a href="editors/?j=JPASWR"><span class="badge badge-primary">&bull;</span>Journal of Public Administration And Social Welfare Research</a></li>										
								</ul>
							</li>
                            
                            <li class="item6"><a href="#">Education<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="editors/?j=IJEE"><span class="badge badge-primary">&bull;</span>International Journal Of Education And Evaluation</a></li>										
													
								</ul>
							</li>
						</ul>
                        
                        <br>
                        <h3>&nbsp;</h3>
                        <h3>QUICK LINKS</h3>
                        <p>&nbsp;</p>
                        <p></p>
                    <a href="home/" class="list-group-item"><span class="badge"></span> <i class="ti ti-email"></i>Home </a> 
					<a href="journals/" class="list-group-item"><span class="badge badge-primary"></span> <i class="ti ti-eye"></i>All Journals</a> 
                    <a href="faq/" class="list-group-item"><i class="ti ti-comments"></i>FAQ</a>
						<a href="submit/" class="list-group-item"><i class="ti ti-comments"></i>Submit Manuscript Online</a>
                        <a href="guide/" class="list-group-item"> <i class="ti ti-headphone-alt"></i>Manuscript Guidelines</a> 
					
                    <a href="pay/" class="list-group-item"><i class="ti ti-email"></i>Make Payment</a> 
						<a href="publicationfee/" class="list-group-item">Publication Fees</a> 
						
						<!-- script for tabs -->
					<script type="text/javascript">
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
						<!-- script for tabs -->
				  </div>
                        
			  


</div>
    

				  			 
 </div><!--RSIDEBAR-->
	  
			<div class="clearfix"> </div>
            
            
            
		</div>
	</div>
		
   

	<!--//single-page-->
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
<?php } else {
	header('Location: ../editors/?j=IJEMT');	
}
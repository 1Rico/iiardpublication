<?php

require_once("inc/config.php");
require_once("inc/search.php");

//get page number
if (isset($_GET['pg'])){
	$pg = $_GET['pg'];
} else {
	$pg = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("inc/path.php"); ?>
<title>IIARD | All Journals  - International Institute of Academic Research and development </title>
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
				<li class="active">All Journals</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			
            <!--PAGE ONE-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 1){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=AJHA"><img src="get/AJHA.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=AJHA">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=AJHA">AJHA</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<br><p style="font-size:14.4px;"><span cl>AFRICAN JOURNAL OF HISTORY AND ARCHAEOLOGY</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
				<div class="new-top">
						<a href="journal/?j=IJASMT"><img src="get/IJAM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJASMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJASMT">IJASMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2489-009X</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF APPLIED SCIENCE AND MATHEMATICAL THEORY</span></p>
						</div>
					</div>
                
                
                </div>
                
                
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=IJAES"><img src="get/IJAES.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJAES">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJAES">IJAES</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2489-0081</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF AGRICULTURE AND EARTH SCIENCE</span></p>
						</div>
					</div>
				
				</div>
				
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJHPR"><img src="get/IJHP.jpg"  class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJHPR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJHPR">IJHPR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5737</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF HEALTH AND PHARMACEUTICAL RESEARCH</span></p>
						</div>
					</div>
				</div>
				


				
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=ijebm"><img src="get/IJEB.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=ijebm">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEBM">IJEBM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2489-0065</span></p>
						</div>
						<div class="ofr">
							<p><span cl>IIARD INTERNATIONAL JOURNAL OF ECONOMICS AND BUSINESS MANAGEMENT</span></p>
						</div>
					</div>
				  </div>
                
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJGEM"><img src="get/IJGEM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJGEM">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJGEM">IJGEM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2505-8821</span></p>
						</div>
						<div class="ofr">
							<p style="font-size:14px;"><span cl>IIARD INTERNATIONAL JOURNAL OF GEOGRAPHY AND ENVIRONMENTAL MANAGEMENT</span></p>
						</div>
					</div>
				</div>
                
				
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="journals/?pg=2">2</a></li>
						<li><a href="journals/?pg=3">3</a></li>
						<li><a href="journals/?pg=4">4</a></li>
						<li><a href="journals/?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
                  
                    <!--Pagination-->
			</div>
            <!--PAGE ONE-->
            
            <!--PAGE TWO-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 2){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
                <div class="new-top">
						<a href="journal/?j=IJEFM"><img src="get/IJEFM.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEFM">View Details </a></li>
								
								
							</ul>
						</div>
				  </div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEFM">IJEFM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2504-8848</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF ECONOMICS AND FINANCIAL MANAGEMENT</span></p>
						</div>
					</div>
				</div>
				

<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
				<div class="new-top">
						<a href="journal/?j=IJCSMT"><img src="get/IJCM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJCSMT">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJCSMT">IJCSMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5699</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF COMPUTER SCIENCE AND MATHEMATICAL THEORY</span></p>
						</div>
					</div>
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					
					<div class="new-top">
						<a href="journal/?j=IJCCP"><img src="get/IJCC.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJCCP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJCCP">IJCCP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5265</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF CHEMISTRY AND CHEMICAL PROCESSES</span></p>
						</div>
					</div>
				</div>
				
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
					  <a href="journal/?j=IJRCP"><img src="get/IJRC.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJRCP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJRCP">IJRCP</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
						  <p style="font-size:13px;"><span cl>INTERNATIONAL JOURNAL OF RELIGIOUS AND CULTURAL PRACTICE</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=IJEMT"><img src="get/IJEMT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEMT">IJEMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2504-8848</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF ENGINEERING AND MODERN TECHNOLOGY</span></p>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=IJELCS"><img src="get/IJECS.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJELCS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJELCS">IJELCS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5702</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF ENGLISH LANGUAGE AND COMMUNICATION STUDIES</span></p>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJMCS"><img src="get/IJMC.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJMCS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJMCS">IJMCS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5273</span></p>
						</div>
                        
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF MARKETING AND COMMUNICATION STUDIES</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=IJMEPR"><img src="get/IJMP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJMEPR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJMEPR">IJMEPR</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF MEDICAL EVALUATION AND PHYSICAL REPORT</span></p>
						</div>
					</div>
			  </div>
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
                <div class="new-top">
						<a href="journal/?j=IJEE"><img src="get/IJEE.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEE">View Details </a></li>		
							</ul>
						</div>
				  </div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEE">IJEE</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2489-0073</span></p>
						</div>
						<div class="ofr">
							<p><span cl>INTERNATIONAL JOURNAL OF EDUCATION AND EVALUATION</span></p>
						</div>
					</div>
				</div>
                
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
				<li><a href="journals/?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="journals/?pg=1">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="journals/?pg=3">3</a></li>
						<li><a href="journals/?pg=4">4</a></li>
						<li><a href="journals/?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
              
                    <!--Pagination-->
			</div>
            <!--PAGE TWO-->
            
            <!--PAGE THREE-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 3){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJSSMR"><img src="get/IJSSMR.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJSSMR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJSSMR">IJSSMR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5303</span></p>
						</div>
						<div class="ofr">
						  <p style="font-size:10px;"><span cl>INTERNATIONAL JOURNAL OF SOCIAL SCIENCES AND MANAGEMENT RESEARCH</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
				<div class="new-top">
						<a href="journal/?j=JAFM"><img src="get/JAFM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JAFM">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JAFM">JAFM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2504-8856</span></p>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF ACCOUNTING AND FINANCIAL MANAGEMENT</span></p>
						</div>
					</div>
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JBGR"><img src="get/JBGR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JBGR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JBGR">JBGR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5710</span></p>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF BIOLOGY AND GENETIC RESEARCH</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JBAE"><img src="get/JBAE.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JBAE">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JBAE">JBAE</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2504-5281</span></p>
						</div> 
						<div class="ofr">
							<p><span cl>JOURNAL OF BUSINESS AND AFRICAN ECONOMY</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=JHSP"><img src="get/JHSP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JHSP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JHSP">JHSP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-5729</span></p>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF HUMANITIES AND SOCIAL POLICIES</span></p>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=JLGP"><img src="get/JLGP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JLGP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JLGP">JLGP</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF LAW AND GLOBAL POLICIES. &nbsp;</span></p>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JPSLR"><img src="get/JPLR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPSLR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPSLR">JPSLR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2504-883X</span></p>
						</div> 
						<div class="ofr">
							<p><span cl>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=JPASWR"><img src="get/JPSW.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPASWR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPASWR">JPASWR</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF PUBLIC ADMINISTRATION AND SOCIAL WELFARE RESEARCH</span></p>
						</div>
					</div>
			  </div>
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
					  <a href="journal/?j=RJFSQC"><img src="get/RJFQ.jpg" class="img-responsive" alt=""/></a>
                      <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJFSQC">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJFSQC">RJFSQC</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>RESEARCH JOURNAL OF FOOD SCIENCE AND QUALITY CONTROL</span></p>
						</div>
					</div>
				</div>
                
                
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
						<li><a href="journals/?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="journals/?pg=1">1</a></li>
						<li><a href="journals/?pg=2" >2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="journals/?pg=4">4</a></li>
						<li><a href="journals/?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
             
                    <!--Pagination-->
			</div>
            <!--PAGE THREE-->
            
            <!--PAGE FOUR-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 4){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
                    <span class="star"> </span>
						<a href="journal/?j=JHMTR"><img src="get/JHMT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JHMTR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JHMTR">JHMTR</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF HOTEL MANAGEMENT AND TOURISM RESEARCH</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
				<div class="new-top">
						<a href="journal/?j=RJHCS"><img src="get/RJHC.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJHCS">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJHCS">RJHCS</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>RESEARCH JOURNAL OF HUMANITIES AND CULTURAL STUDIES</span></p>
						</div>
					</div>
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=RJMCIT"><img src="get/RJMI.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJMCIT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJMCIT">RJMCIT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2545-529X</span></p>
						</div>
						<div class="ofr">
							<p><span cl>RESEARCH JOURNAL OF MASS COMMUNICATION AND INFORMATION TECHNOLOGY</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=RJPST"><img src="get/RJPT.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJPST">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJPST">RJPST</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p style=" font-size:13px;"><span cl>RESEARCH JOURNAL OF PURE SCIENCE AND TECHNOLOGY</span></p>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=WJEDS"><img src="get/WJED.jpg" class="img-responsive" alt=""/></a>
                        
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJEDS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJEDS">WJEDS</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p style=" font-size:11.76px;"><span cl>WORLD JOURNAL OF ENTREPRENEURAL DEVELOPMENT STUDIES</span></p>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=WJFIR"><img src="get/WJFI.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJFIR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJFIR">WJFIR</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>WORLD JOURNAL OF FINANCE AND INVESTMENT RESEARCH</span></p>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=WJIMT"><img src="get/WJIM.jpg" class="img-responsive" alt=""/></a>
                        <span class="star"> </span>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJIMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJIMT">WJIMT</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>WORLD JOURNAL OF INOVATION AND MODERN TECHNOLOGY</span></p>
						</div>
					</div>
                </div>
                
                <div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
					  <a href="journal/?j=IJBFR"><img src="get/IJBFR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJBFR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJBFR">IJBFR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F">ISSN 2406-8934</span></p>
						</div>
						<div class="ofr">
							<p><span cl>IIARD INTERNATIONAL JOURNAL OF BANKING AND FINANCE RESEARCH</span></p>
						</div>
					</div>
				</div>
                
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JPSLR"><img src="get/JPLR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPSLR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPSLR">JPSLR</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p><span cl>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH</span></p>
						</div>
					</div>
				</div>
                
                <!--Pagination-->
                
                
                
					<ul class="pagination pagination-lg">
						<li><a href="journals/?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="journals/?pg=1">1</a></li>
						<li><a href="journals/?pg=2">2</a></li>
						<li><a href="journals/?pg=3">3</a></li>
                        <li class="active"><a href="#">4</a></li>
						<li class="disabled"><a href="journals/?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
            
                    <!--Pagination-->
               
			</div>
            <!--PAGE FOUR-->
            
            
			<!--End of all conditions-->
            <div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
				  <div class="sidebar-row">
				    <h4>ALL JOURNALS</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									
        <li class="subitem1"><a href="journal/?j=IJHPR"><span class="badge badge-primary">&bull;</span> International Journal of Health And Pharmaceutical Research</a></li>										
									<li class="subitem1"><a href="journal/?j=IJGEM"><span class="badge badge-primary">&bull;</span> IIARD international journal of geography and environmental management.</a></li>
									<li class="subitem1"><a href="journal/?j=IJMEPR"><span class="badge badge-primary">&bull;</span> International Journal of Medical Evaluation and Physical Report </a></li>										
									<li class="subitem1"><a href="journal/?j=IJAES"><span class="badge badge-primary">&bull;</span>International Journal of Agriculture And Earth Science</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJASMT"><span class="badge badge-primary">&bull;</span>International Journal of Applied Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJCCP"><span class="badge badge-primary">&bull;</span>International Journal of Chemistry And Chemical Processes</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJCSMT"><span class="badge badge-primary">&bull;</span>International Journal of Computer Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JBGR"><span class="badge badge-primary">&bull;</span>Journal of Biology And Genetic Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=RJFSQC"><span class="badge badge-primary">&bull;</span>Research Journal of Food Science And Quality Control</a></li>
                                    <li class="subitem1"><a href="journal/?j=RJPST"><span class="badge badge-primary">&bull;</span>Research Journal of Pure Science And Technology</a></li>
                                    <li class="subitem1"><a href="journal/?j=WJIMT"><span class="badge badge-primary">&bull;</span>World Journal Of Innovation And Modern Technology</a></li>	
                       		  </ul>
							</li>
						  <li class="item2"><a href="#">Engineering<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEMT"><span class="badge badge-primary">&bull;</span>International Journal of Engineering And Modern Technology</a></li>										
															
							</ul>
							</li>
							<li class="item3"><a href="#">Management Sciences <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEBM"><span class="badge badge-primary">&bull;</span>IIARD International Journal of Economics And Business Management</a></li>										
									<li class="subitem1"><a href="journal/?j=IJBFR"><span class="badge badge-primary">&bull;</span>International Journal of Banking and Finance Research</a></li>
                                    <li class="subitem1"><a href="journal/?j=IJEFM"><span class="badge badge-primary">&bull;</span>International Journal of Economics And Financial Management</a></li>										
									<li class="subitem1"><a href="journal/?j=IJMCS"><span class="badge badge-primary">&bull;</span>International Journal of Marketing And Communication Studies</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJSSMR"><span class="badge badge-primary">&bull;</span>International Journal of Social Sciences And Management Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JAFM"><span class="badge badge-primary">&bull;</span>Journal of Accounting And Financial Management</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JBAE"><span class="badge badge-primary">&bull;</span>Journal Of Business And African Economy</a></li>
                                     <li class="subitem1"><a href="journal/?j=IJBFR"><span class="badge badge-primary">&bull;</span>International Journal Of Banking And Finance Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=WJEDS"><span class="badge badge-primary">&bull;</span>World Journal of Entrepreneurial Development Studies</a></li>	
                                    <li class="subitem1"><a href="journal/?j=WJFIR"><span class="badge badge-primary">&bull;</span>World Journal Of Finance And Investment Research</a></li>										
								</ul>
							</li>
                            <li class="item4"><a href="#">Humanities<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=AJHA"><span class="badge badge-primary">&bull;</span>African Journal of History And Archaeology</a></li>										
									<li class="subitem1"><a href="journal/?j=IJELCS"><span class="badge badge-primary">&bull;</span>International Journal of English Language And Communication Studies</a></li>										
									<li class="subitem1"><a href="journal/?j=IJRCP"><span class="badge badge-primary">&bull;</span>International Journal of Religious And Cultural Practice</a></li>				
                                    <li class="subitem1"><a href="journal/?j=JHSP"><span class="badge badge-primary">&bull;</span>Journal of Humanities And Social Policy</a></li>										
									<li class="subitem1"><a href="journal/?j=JLGP"><span class="badge badge-primary">&bull;</span>Journal Of Law And Global Policy</a></li>				
                                    <li class="subitem1"><a href="journal/?j=JHMTR"><span class="badge badge-primary">&bull;</span>Journal Of Hotel Management And Tourism Research</a></li>										
									<li class="subitem1"><a href="journal/?j=RJHCS"><span class="badge badge-primary">&bull;</span>Research Journal Of Humanities And Cultural Studies</a></li>										
								</ul>
							</li>
                            <li class="item5"><a href="#">Social Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=RJMCIT"><span class="badge badge-primary">&bull;</span>Research Journal Of Mass Communication And Information Technology</a></li>										
									<li class="subitem1"><a href="journal/?j=JPSLR"><span class="badge badge-primary">&bull;</span>Journal Of Political Science And Leadership Research</a></li>
                                    										
									<li class="subitem1"><a href="journal/?j=JPASWR"><span class="badge badge-primary">&bull;</span>Journal of Public Administration And Social Welfare Research</a></li>										
								</ul>
							</li>
                            
                            <li class="item6"><a href="#">Education<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEE"><span class="badge badge-primary">&bull;</span>International Journal Of Education And Evaluation</a></li>										
													
								</ul>
							</li>
						</ul>
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
				  <div class="sidebar-row">
                  
                  
                  <h4> QUICK LINKS</h4>
				  <div class="list-group list-group-alternate"> 
						<a href="home/" class="list-group-item"><i class="ti ti-email"></i>Home </a> 
						<a href="faq/" class="list-group-item"><i class="ti ti-eye"></i>FAQ</a> 
                        <a href="editors/?j=IJEMT" class="list-group-item"><i class="ti ti-comments"></i>Editorial Board</a>
						<a href="submit/" class="list-group-item"><i class="ti ti-comments"></i>Submit Manuscript Online</a>
                        <a href="guide/" class="list-group-item"> <i class="ti ti-headphone-alt"></i>Manuscript Guidelines</a> 
					
                    <a href="pay/" class="list-group-item"><i class="ti ti-email"></i>Make Payment</a> 
						<a href="publicationfee/" class="list-group-item"><i class="ti ti-eye"></i>Publication Fees</a> 
						
					</div>
            
                  
                  
				    
						
				  </div>			 
				</div>
				<div class="gallery-grid ">
					<h6></h6>
					<a href="journals/"><img src="images/b1.png" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="index.php">IIARD PUBLICATIONS</a></h5>
						<p><span class="item_price"></span></p>
						
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
            
            
            
		</div>
	</div>
<!--//products-->
	<!--footer-->
	
    <?php include "inc/footer.php"; ?>
    
	<!--//footer-->			
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<!-- the mousewheel plugin -->
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
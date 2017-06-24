<?php
require_once("inc/config.php");

//if no GET VAR
if(!isset($_GET['q'])){
	header('Location: journals/');
} else {
//if GET var, query db
$q=$_GET['q'];
	$stmt = $db->prepare("SELECT * FROM publications WHERE pub_name LIKE '%$q%'
	OR pub_issue LIKE '%$q%'
	OR pub_author LIKE '%$q%'
	OR pub_journal LIKE '%$q%'
	OR pub_volume LIKE '%$q%'");
$stmt->execute();

}
?>
<!DOCTYPE html>
<html>
<head>
	
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
				<li class="active">Search Results</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			
            <!--PAGE ONE-->
            <div class="col-md-9 product-model-sec">

<!--modal1_CURRENT-->
<div id="myModal" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                 
                 
                  <h3 class="title">Search<span>Results</span></h3>
                </div>
                 
                <div class="modal-body">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                
                                <ul class="list-group">
                                
                                 <?php
										
									while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $row['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $row['pub_name']; ?></a> <br> <p style="color:#FF590F;"> Author(s): <?php echo $row['pub_author']; ?></p> </li>
                                  <?php 
								  }?>
                                </ul>
                                    </div>
                </div>
                
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>
<!-- /.modal -->
    
			</div>
       
   
            
			<!--End of all conditions-->
            <div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
				  <div class="sidebar-row">
	
				  </div>
				  <div class="sidebar-row">
                  
                  
                  <h4> QUICK LINKS</h4>
				  <div class="list-group list-group-alternate"> 
						<a href="index.php" class="list-group-item"><i class="ti ti-email"></i>Home </a> 
						<a href="#" class="list-group-item"><i class="ti ti-eye"></i>FAQ</a> 
                        <a href="#" class="list-group-item"><i class="ti ti-comments"></i>Editorial Board</a>
						<a href="submit.php" class="list-group-item"><i class="ti ti-comments"></i>Submit Manuscript Online</a>
                        <a href="guide.php" class="list-group-item"> <i class="ti ti-headphone-alt"></i>Manuscript Guidelines</a> 
					
                    <a href="payment.php" class="list-group-item"><i class="ti ti-email"></i>Make Payment</a> 
						<a href="publicationfee.php" class="list-group-item"><i class="ti ti-eye"></i>Publication Fees</a> 
						
					</div>
            
                  
                  
				    
						
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
	<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->

	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->

	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
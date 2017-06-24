<?php 
require_once("inc/config.php");
require_once("inc/search.php");

//if no GET VAR
if(!isset($_GET['j'])){
	header('Location: ../journals/');
}
//if GET var, query db
$j=$_GET['j'];
$stmt = $db->prepare("SELECT * FROM journals WHERE journal_name = :j LIMIT 1");
$stmt ->bindParam(':j', $j);
	$stmt->execute();
// if not empty result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (is_array($row))  {
	
$category= $row['journal_category'];
$issn= $row['ISSN'];

//editorial board
$stmt_edit = $db->prepare("SELECT * FROM editorials WHERE journal = '$j'");
$stmt_edit->execute();


//current issues
$stmt1 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'CURRENT'");
$stmt1->execute();
$row_curr=$stmt1->rowCount();

$stmtv = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'CURRENT'");
$stmtv->execute();



/*//get number of items in current
$count1 = $stmt1->fetchAll();
$count1 = count($count1);
*/
//back issues... v11: vol 1 NO.1, v23: VOL. 2 no 3
$stmtv1 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 1%'");
$stmtv1->execute();
$pathv1="get/".$j."/VOL 1/";
$row_v1=$stmtv1->rowCount();

$stmtv21 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 1 2016'");
$stmtv21->execute();
$pathv21 = "get/".$j."/VOL. 2 NO. 1 2016/";
$row_v21=$stmtv21->rowCount();

$stmtv22 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 2 2016'");
$stmtv22->execute();
$pathv22 = "get/".$j."/VOL. 2 NO. 2 2016/";
$row_v22=$stmtv22->rowCount();

$stmtv23 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 3 2016'");
$stmtv23->execute();
$pathv23 = "get/".$j."/VOL. 2 NO. 3 2016/";
$row_v23=$stmtv23->rowCount();

$stmtv24 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 4 2016'");
$stmtv24->execute();
$pathv24 = "get/".$j."/VOL. 2 NO. 4 2016/";
$row_v24=$stmtv24->rowCount();

$stmtv25 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 5 2016'");
$stmtv25->execute();
$pathv25 = "get/".$j."/VOL. 2 NO. 5 2016/";
$row_v25=$stmtv25->rowCount();

$stmtv26 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 6 2016'");
$stmtv26->execute();
$pathv26 = "get/".$j."/VOL. 2 NO. 6 2016/";
$row_v26=$stmtv26->rowCount();

$stmtv27 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 7 2016'");
$stmtv27->execute();
$pathv27 = "get/".$j."/VOL. 2 NO. 7 2016/";
$row_v27=$stmtv27->rowCount();

$stmtv28 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 8 2016'");
$stmtv28->execute();
$pathv28 = "get/".$j."/VOL. 2 NO. 8 2016/";
$row_v28=$stmtv28->rowCount();

$stmtv29 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 2 NO. 9 2016'");
$stmtv29->execute();
$pathv29 = "get/".$j."/VOL. 2 NO. 9 2016/";
$row_v29=$stmtv29->rowCount();

$stmtv31 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 1 2017'");
$stmtv31->execute();
$pathv31 = "get/".$j."/VOL. 3 NO. 1 2017/";
$row_v31=$stmtv31->rowCount();
	
$stmtv32 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 2 2017'");
$stmtv32->execute();
$pathv32 = "get/".$j."/VOL. 3 NO. 2 2017/";
$row_v32=$stmtv32->rowCount();
	
$stmtv33 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 3 2017'");
$stmtv33->execute();
$pathv33 = "get/".$j."/VOL. 3 NO. 3 2017/";
$row_v33=$stmtv33->rowCount();
	
$stmtv34 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 4 2017'");
$stmtv34->execute();
$pathv34 = "get/".$j."/VOL. 3 NO. 4 2017/";
$row_v34=$stmtv34->rowCount();
	
$stmtv35 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 5 2017'");
$stmtv35->execute();
$pathv35 = "get/".$j."/VOL. 3 NO. 5 2017/";
$row_v35=$stmtv35->rowCount();
	
$stmtv36 = $db->prepare("SELECT * FROM publications WHERE pub_journal = '$j' AND pub_issue = 'BACK' AND pub_volume LIKE 'VOL. 3 NO. 6 2017'");
$stmtv36->execute();
$pathv36 = "get/".$j."/VOL. 3 NO. 6 2017/";
$row_v36=$stmtv36->rowCount();

/*//get number of items in BACK
$count2 = $stmt2->fetchAll();
$count2 = count($count2);
*/


//related journals
$stmt3 = $db->prepare("SELECT * FROM journals WHERE journal_category = '$category' LIMIT 4");
$stmt3->execute();

?>
<!DOCTYPE html>
<html>
<head>
<?php include_once("inc/path.php"); ?>
	
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
<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon">
<link rel="icon" href="css/favicon.ico" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->


<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->

<!--flex slider-->
<!--<script defer src="/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});-->


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
		  <h3 class="title" style="margin-top:-70px;"> <?php echo $row['journal_name_full']; ?><span>(<?php echo $row['journal_name']; ?>) <br><?php echo $row['ISSN']; ?></span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
          			
					<p style="text-align:justify;"><?php echo $row['journal_description']; ?> </p>
                    <br>
                  
                    
                    <div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">
                    
					
						<!--<ul class="slides">
							<li data-thumb="<?php//echo $row['path']; ?>">
								<div class="thumb-image"> <img src="<?php// echo $row['path']; ?>"  class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="<?php//echo $row['path']; ?>">
								 <div class="thumb-image"> <img src="<?php// echo $row['path']; ?>"  class="img-responsive" alt=""> </div>
							</li> 
						</ul>-->
                        <img src="<?php echo $row['path']; ?>"  class="img-responsive" alt="<?php echo $row['journal_name']; ?>">
                       <?php if($row['journal'] != "OLD"){?>
                        <span class="star"> </span>	
                        <?php } ?>
					
				</div>
                
                
            <div class="col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">
					
					<table class="table table-bordered">
						<tbody>
							
							<tr>
							  <td><img src="images/archive.jpg" width="150" height="134">
                              <img src="images/openaccess.jpg" width="150" height="134">
                              <img src="images/COPE (2).jpg" width="150" height="134">
                              <img src="images/googlescholar.jpg" width="150" height="134"></td>
                                
							</tr>
						</tbody>
					</table>                    
			</div>
					
			   <div class="clearfix"> </div>
               
			
		  </div>
          
        <!--Curent Issues-->
        <div id="current" style="display:none" class="col-md-9 product-model-sec">
          <div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		 <h3 class="title" style="margin-top:-70px;"> <?php echo $row['journal_name_full']; ?><span>(<?php echo $row['ISSN']; ?>) <br>Current Issue</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
                <?php $rowv = $stmtv->fetch(PDO::FETCH_ASSOC); echo $rowv['pub_volume']; ?>
          			<!--
					<p> <a id="homec" href="#"><span class="label label-primary">Journal Home</span></a>
                    </p>-->
                    
                    <ul class="list-group">
                                
                                 <?php
								 if(!($row_curr > 0)){?>
									 
								  <li class="list-group-item">THERE IS NO ISSUE AT THIS TIME </li> 
                                 <?php } else {
										
									while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $row1['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $row1['pub_name']; ?></a> <br> <p style="color:#FF590F;">Author(s): <?php echo $row1['pub_author']; ?></p> </li>
                                  <?php  
								  }}?>
                                  
                                </ul>
                    
                    
                    <br>
               <div class="clearfix"> </div>
               
			
		  </div>
          <!--Current Issue-->
          
          <!--back issues-->
        <div id="back" style="display:none" class="col-md-9 product-model-sec">
          <div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		  <h3 class="title" style="margin-top:-70px;"> <?php echo $row['journal_name_full']; ?><span>(<?php echo $row['ISSN']; ?>) <br>Back Issue</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
          			
					<p> <a id="home" href="#"><span class="label label-primary">Journal Home</span></a>
                    </p>
                    
                    <ul class="faq">
                    
                    
				<?php
                if($row_v1 >0 ){
				if(file_exists($pathv1)){//vol1?>
                <li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL 1<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv1 = $stmtv1->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv1['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv1['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv1['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } else {?>
<!--				<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">NO BACK ISSUES FOR NOW<span class="icon"> </span></a></li>-->
				<?php } ?>
                
             <?php 
			 if($row_v21 >0 ){
				 if(file_exists($pathv21)){//vol2n1?>
                <li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 1<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv21 = $stmtv21->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv21['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv21['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv21['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php 
				if($row_v22 >0 ){
					if(file_exists($pathv22)){//vol2n2?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 2<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv22 = $stmtv22->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv22['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv22['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv22['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php
				 if($row_v23 >0 ){
					if(file_exists($pathv23)){//vol2n3?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 3<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv23 = $stmtv23->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv23['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv23['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv23['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php 
				if($row_v24 >0 ){
					if(file_exists($pathv24)){//vol2n4?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 4<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv24 = $stmtv24->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv24['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv24['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv24['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php 
				if($row_v25 >0 ){
					if(file_exists($pathv25)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 5<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv25 = $stmtv25->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv25['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv25['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv25['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php 
				if($row_v26 >0 ){
					if(file_exists($pathv26)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 6<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv26 = $stmtv26->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv26['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv26['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv26['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                <?php 
				if($row_v27 >0 ){
					if(file_exists($pathv27)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 7<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv27 = $stmtv27->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv27['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv27['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv27['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
               
                <?php 
				if($row_v28 >0 ){
					if(file_exists($pathv28)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 8<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv28 = $stmtv28->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv28['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv28['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv28['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
               
               <?php 
				if($row_v29 >0 ){
					if(file_exists($pathv29)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 2 N0. 9<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv29 = $stmtv29->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv29['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv29['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv29['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
               
               <?php 
				if($row_v31 >0 ){
					if(file_exists($pathv31)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 1<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv31 = $stmtv31->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv31['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv31['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv31['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>

                
                <?php 
				if($row_v32 >0 ){
					if(file_exists($pathv32)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 2<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv32 = $stmtv32->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv32['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv32['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv32['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>

                <?php 
				if($row_v33 >0 ){
					if(file_exists($pathv33)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 3<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv33 = $stmtv33->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv33['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv33['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv33['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>

                <?php 
				if($row_v34 >0 ){
					if(file_exists($pathv34)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 4<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv34 = $stmtv34->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv34['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv34['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv34['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
               
               <?php 
				if($row_v35 >0 ){
					if(file_exists($pathv35)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 5<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv35 = $stmtv35->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv35['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv35['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv35['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>
                
                 <?php 
				if($row_v36 >0 ){
					if(file_exists($pathv36)){//vol2n5?>
                <li class="item wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item">VOL. 3 N0. 6<span class="icon"> </span></a>
					<ul>
                 <?php
				 while($rowv36 = $stmtv36->fetch(PDO::FETCH_ASSOC)){
					?>
						<li class="list-group-item"><a class="items" style="color:#337ab7;"  href="<?php echo $rowv36['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $rowv36['pub_name']; ?></a> <p style="color:#FF590F;"> Author(s): <?php echo $rowv36['pub_author']; ?></p> </li>
                                  <?php } ?>
                        										
					</ul>
				</li><?php } } ?>

                
                
                
				<!--<li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices ?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod  consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p></li>										
					</ul>
				</li>-->			
			</ul>
                    
                    
                    <br>
               <div class="clearfix"> </div>
               
			
		  </div>
        
        <!--back issues-->
        
          <!--edit board-->
        <div id="editorial" style="display:none" class="col-md-9 product-model-sec">
          <div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
		  <h3 class="title" style="margin-top:-70px;"> <?php echo $row['journal_name_full']; ?><span>(<?php echo $row['journal_name']; ?>) <br>International Editorial Board Members</span></h3>
                <hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
          			
					<p> <a id="home2" href="#"><span class="label label-primary">Journal Home</span></a>
                    </p>
                    
                    <ul class="faq">
                    
				 <?php while($row_edit = $stmt_edit->fetch(PDO::FETCH_ASSOC)){
					?>
                <li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#" class="list-group-item"><strong><?php echo $row_edit['name']; ?></strong><br><?php if($row_edit['dept'] != ""){ echo $row_edit['dept']. '<br>'; } ?><?php echo $row_edit['univ'] ?><br><?php echo $row_edit['address'] ?><br><span class="icon"> </span></a>
					
				</li> <?php } ?>
  		
			</ul>
                    

               <div class="clearfix"> </div>
               
			
		  </div>
        
        <!--edit board-->
          
		  <div class="col-md-3 rsidebar">
			<div class="rsidebar-top">
				  <div class="list-group list-group-alternate"> 
						<a id="buttonc" class="list-group-item"><span class="badge"><?php //echo $count1; ?></span> <i class="ti ti-email"></i>Current Issue </a> 
						<a id="button"  class="list-group-item"><span class="badge badge-primary"><?php //echo $count2; ?></span> <i class="ti ti-eye"></i>Back issues</a> 
                        <a id="button2" class="list-group-item"><i class="ti ti-comments"></i>Editorial Board</a>
						<a href="submit/" class="list-group-item"><i class="ti ti-comments"></i>Submit Manuscript Online</a>
                        <a href="guide/" class="list-group-item"> <i class="ti ti-headphone-alt"></i>Manuscript Guidelines</a> 
					
                    <a href="pay" class="list-group-item"><i class="ti ti-email"></i>Make Payment</a> 
						<a href="pub" class="list-group-item">Publication Fees</a> 
						<a data-toggle="modal" href="#myModal" class="list-group-item"> <i class="ti ti-headphone-alt"></i>Call For Papers</a>
                        
                        
				    <br>
                    <h4> ALL JOURNALS</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJHPR"><span class="badge badge-primary">&bull;</span> International Journal of Health And Pharmaceutical Research</a></li>										
									<li class="subitem1"><a href="journal/?j=IJGEM"><span class="badge badge-primary">&bull;</span> IIARD international journal of geography and environmental management.</a></li>										
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
                        
			  

<!--modal-->
<div id="myModal" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="title"><?php echo $row['journal_name_full']; ?></h3>
                </div>
                <div class="modal-body">
                    <h3 class="title"><span>Call For Papers</span></h3>
                    <p style="text-align:justify">Research Articles written in English are invited from interested scholars and researchers in the academic community and other establishment for publication in the <?php echo $row['journal_name_full']; ?>. An author who wish to submit an article for publication, should note that the article has not been submitted elsewhere nor is it for consideration in another journal. The article should be the original work of the author. IIARD welcomes and acknowledges high quality theoretical and empirical original research papers, case studies, review papers, literature reviews, book reviews, conceptual framework, analytical and simulation models, technical note; from researchers, academicians, professionals, practitioners and students all over the world for publication.</p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <a href="journals/CFP/<?php echo $row['journal_name']; ?>.pdf" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span>Download Pdf</a>
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
</div>
    

				  			 
 </div><!--RSIDEBAR-->
	  
			<div class="clearfix"> </div>
            
            
            <div class="related-products">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">Related<span> Journals</span></h3>
					<p>Other Journals in the same Category</p>
				</div>
				<div class="related-products-info">
					
                    <?php $i=1;//counter for new-mdl divs
					while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
						
                        if($i == 2){
							$idiv= "new-mdl";
						}
						else if($i == 3){
							$idiv= "new-mdl1";
						}
						else {
							$idiv= "";
						}?>
                    <div class="col-md-3 new-grid <?php echo $idiv; ?>  simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="journal/?j=<?php echo $row3['journal_name']; ?>"><img src="<?php echo $row3['path']; ?>" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									
									<li><a href="journal/?j=<?php echo $row3['journal_name']; ?>">View Details</a></li>
									
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="journal/?j=<?php echo $row3['journal_name']; ?>"><?php echo $row3['journal_name']; ?></a></h5>
								
							<div class="ofr">
								
								<p><span class="item_price"><?php echo $issn ?></span></p>
							</div>
						</div>
					</div>
					<?php $i=$i+1; } ?>
                    
					
                    
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer-->
    
	<?php include "inc/footer.php"; ?>
	
    <!--//footer-->			
	
    <!--search jQuery-->
    
<script>
$( "#button" ).click(function() {
  $('#journal, #button').fadeOut('fast', function(){
        $('#back, #button').fadeIn('fast');
    });
	$('#editorial, #button').fadeOut('fast', function(){
        $('#back, #button').fadeIn('fast');
    });
	$('#current, #button').fadeOut('fast', function(){
        $('#back, #button').fadeIn('fast');
    });
	});
	
$( "#button2" ).click(function() {
  $('#journal, #button2').fadeOut('fast', function(){
        $('#editorial, #button2').fadeIn('fast');
    });
	$('#back, #button2').fadeOut('fast', function(){
        $('#editorial, #button2').fadeIn('fast');
    });
	$('#current, #button2').fadeOut('fast', function(){
        $('#editorial, #button2').fadeIn('fast');
    });
	});
	
$( "#buttonc" ).click(function() {
  $('#journal, #buttonc').fadeOut('fast', function(){
        $('#current, #buttonc').fadeIn('fast');
    });
	$('#back, #buttonc').fadeOut('fast', function(){
        $('#current, #buttonc').fadeIn('fast');
    });
	$('#editorial, #buttonc').fadeOut('fast', function(){
        $('#current, #buttonc').fadeIn('fast');
    });
	});
	
$( "#home" ).click(function() {
  $('#back, #home').fadeOut('slow', function(){
        $('#journal, #home').fadeIn('fast');
    });
	});
	
$( "#home2" ).click(function() {
  $('#editorial, #home2').fadeOut('slow', function(){
        $('#journal, #home2').fadeIn('fast');
    });
	});

$( "#homec" ).click(function() {
  $('#current, #homec').fadeOut('fast', function(){
        $('#journal, #homec').fadeIn('fast');
    });
	});	

</script>
    
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
	header('Location: ../journals/');
}
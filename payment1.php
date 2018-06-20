<?php
require_once( "inc/config.php" );
require_once( "inc/search.php" );
?>
<!DOCTYPE html>
<html>

<head>
	<?php require_once("inc/path.php"); ?>
	<title>IIARD | Make Payment - International Institute of Academic Research and development </title>
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

	<?php include_once("inc/marquee.php"); ?>

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
				<li class="active">Make Payment</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s" style="text-align:left;"></div>
			<h3 class="title" style="margin-top:-40px;">Payment<span> Process</span></h3>
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
			<p style="text-align:justify">IIARD charges a minimal amount as publication fee to cover operational cost. Such as: peer-review, hard copy production and distribution, website maintenance, Staffing and editorial expenses. It is unethical not to pay for publication fee after an article has being reviewed by our team of experts and accepted for publication. This will be considered as a waste of time to the reviewers who worked tirelessly in reviewing the manuscript. </p>

			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

			<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">

				<div class="row wow fadeInDown animated" data-wow-delay=".5s">
					<form role="form" method="post" action="" enctype="multipart/form-data" name="submit" id="submit">

						<p>
							<h4>1.   THROUGH BANK WIRE TRANSFER:</h4>
						</p>
						<p style="text-align:justify">All payments should be made into the Company's registered account name IIARD Publication Company. We will never ask you to pay into a personal account or through a third party’saccount.Payment for publication can be made into the Company’s account as stated below:</p>
						<p style="text-align:justify">&nbsp;</p>

						<h3 style="font-size:15px">United State Dollar (USD)</h3>
						<p>Correspondent Bank Name: CITIBANK,NEW YORK</p>
						<p>SwiftCode: CITIUS33</p>
						<p>ABA No: 021000089</p>
						<p>Correspondent Bank Address: GUARANTY TRUST BANK PLC,LAGOS NIGERIA</p>
						<p>SwiftCode: GTBINGLA</p>
						<p>Beneficiary Name: IIARD PUBLICATION CO</p>
						<p>Beneficiary Account Number: 0170796308</p>
						<p>Amount/CurrencyType: United State Dollar(USD)</p>
						<p>&nbsp;</p>
						<h4> 2.   THROUGH OUR SECURE ONLINE PAYMENT GATEWAY </h4>
						<p>Our online payment is secure and convenient. We accept Visa Card only.</p>
						<p>Steps to make online payment:</p>
						<p>&nbsp;</p>

						<p>&bull; Click on the payment tab </p>
						<p>&bull; Choose the number of articles you want to submit and amount</p>
						<p> &bull; Click on make payment and page proceed to Payza secure payment page </p>
						<p> &bull; Login or Signup to proceed with payment</p>
						<p>&nbsp;</p>
						<h4> 3.   THROUGH WESTERN UNION OR MONEY GRAM</h4>
						<p style="text-align:justify">Kindly contact the editorial office to get receiver&rsquo;s payment details. Please Note: After successful payment, send a copy of the bank teller, receipt or payment code to editor@iiardpub.org for payment Confirmation. </p>

						<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">
						<h4>REFUND POLICY</h4>
						<p style="text-align:justify">If payment was mistakenly paid twice, we shall refund you through bank transfer. Bank charges shall be made by the author. Please discuss this issue to <code>editor@iiardpub.org</code>.<br> However, we will not make any refund if an article has already been publish online. </p>
						<p>&nbsp;</p>
						<p style="text-align:justify"><code>Please Note:</code> All payments should be made into the company's registered account name <strong>IIARD Publication Company</strong>. We will never ask you to pay into a personal account or through a third party’s account.</p>


					</form>
				</div>
			</div>

			<!-- payment div-->
			<div class="col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">

				<table class="table table-bordered">
					<tbody>

						<tr>
							<td><p style="color: #FF590F">For Foreign Authors</p>
								<h1>Secure Online Payment</h1>
								<p>We accept only Visa Cards at the moment</p>
								<p>&nbsp;</p>
								<img src="images/secure (2).png" width="118" height="134"><img src="images/visa.png" width="127" height="134">


								<script language="javascript">
									function SetValues() { //this code needs to be edited to meet your needs 
										var selObj = document.getElementById( 'sel' ); //referencing the drop down list from the page    
										var selIndex = selObj.selectedIndex; //The index of the item selected in the list     
										var item = selObj.options[ selIndex ].value; //the value of the item in order to apply cost accordingly                              


										if ( item == "One Article Online Only" ) {
											document.form1.ap_itemcode.value = "i1";
											document.form1.ap_amount.value = "50";
											document.form1.ap_description.value = "Payment for Online Publication of Article Only";

										} else if ( item == "One Hard Copy Only" ) {
											document.form1.ap_itemcode.value = "i2";
											document.form1.ap_amount.value = "20";
											document.form1.ap_description.value = "Payment for Hard Copy Publication of Article Only";
										} else if ( item == "Online and Print Article" ) {
											document.form1.ap_itemcode.value = "i3";
											document.form1.ap_amount.value = "70";
											document.form1.ap_description.value = "Payment for Online and Print Article";
										} else if ( item == "Payment For Article" ) {
											document.form1.ap_itemcode.value = "i4";
											document.form1.ap_amount.value = "40";
											document.form1.ap_description.value = "Payment For Article";
										}
									}
								</script>

								<form action="https://secure.payza.com/checkout" method="post" name="form1">
									<label>Please Select Your payment Option</label>
									<select id="sel" name="ap_itemname" class="form-control">
										<option id="3" value="Online and Print Article">USD 70.00 - Online and Print Article</option>
										<option id="1" value="One Article Online Only">USD 50.00 - One Article Online Only</option>
										<option id="4" value="Payment For Article">USD 40.00 - Payment For Article</option>
										<option id="2" value="One Hard Copy Only">USD 20.00 - One Hard Copy Only</option>

									</select>
									<br>

									<input name="ap_amount" type="hidden"/>
									<input name="ap_description" type="hidden"/>
									<input name="ap_itemcode" type="hidden"/>
									<input name="ap_purchasetype" type="hidden" value="item-goods"/>
									<input name="ap_merchant" type="hidden" value="billing@iiardpub.org"/>
									<input type="hidden" name="ap_additionalcharges" value="5.50"/>
									<input name="ap_cancelurl" type="hidden" value="https://iiardpub.org/payment/"/>
									<input name="ap_returnurl" type="hidden" value="https://iiardpub.org/payment/"/>
									<input name="ap_quantity" type="hidden" value="1"/>
									<input name="ap_currency" type="hidden" value="USD"/>
									<input onclick="SetValues()" name="ap_image" src="images/payza-buy-now.png" type="image"/>
								</form>



							</td>

						</tr>

					</tbody>
				</table>
			</div>
			
			<div class="col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">

				<table class="table table-bordered">
					<tbody>

						<tr>
							<td>
							
<!--								<p style="color: #FF590F">For Local Authors</p>-->
								<h3>For Local Authors</h2>
								<p>Good news to  Nigerian authors! We are pleased to inform you that our publication fee has been reduced from <code>NGN 22,000</code> to</p>
								<br>
								<ul style="list-style: none"> 
							  <li><code>NGN 18,000</code> (online and print 2 hard copies) or </li> 
								<li><code>NGN 15, 000</code> for online only.</li>
                               <br>
                                <h3 style="font-size:15px; color: #FF590F">Guaranty Trust Bank PLC(GTB)</h3>
								<p>Account Name: IIARD Publishing Company</p>
								<p>Account Number: 0170792719</p>
								<br>
								<h3 style="font-size:15px; color: #FF590F">First City Monument Bank (FCMB)</h3>
								<p>Account Name: IIARD Publishing Company</p>
								<p>Account Number: 311646601</p>
								
							</td>

						</tr>

					</tbody>
				</table>
			</div>
			<div class="col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">

				<table class="table table-bordered">
					<tbody>

						<tr>
							<td>
								<!--
                               <h1>Bitcoin Accepted</h1>
                                <p>Please select the plan and pay</p>
                                <p>&nbsp;</p>
-->
								<img src="images/bitcoin.png" class="img-responsive">
								<br>

								
									<label>Please Select Your payment Option</label>
									<select id="btc_sel" class="form-control" onchange="getPrice(this)">
									<option disabled selected value="0">--Select--</option>
										<option data-desc="Online and Print Article" value="70">USD 70.00 - Online and Print Article</option>
										<option data-desc="One Online Article Only" value="50">USD 50.00 - One Article Online Only</option>
										<option data-desc="Payment For Article" value="40">USD 40.00 - Payment For Article</option>
										<option data-desc="One Hard Copy Only" value="20">USD 20.00 - One Hard Copy Only</option>

									</select>
									<hr>
									<img class="img-responsive" id="loader" src="images/loader.gif" width="100" height="100" style="margin-left: auto; margin-right: auto">
									<div id="BTC">
									
										<h4>Please make a transfer of <code id="amount"></code>BTC to <code>1PwvpTqMY83FCnbt4tVkHvjcofE4YR9YYe</code> to complete this transaction.</h4>
                          				<br>
                           				<p>Payment for <span id="desc"></span></p>
                           		</div>
									
							</td>

						</tr>

					</tbody>
				</table>
			</div>

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
<script>

function getPrice(selectObject) {
	$("#loader").show();
  $("#BTC").fadeOut(500);
  var price = selectObject.value; 
	var desc = $("#btc_sel").find('option:selected').data('desc');
	
  var url= 'https://blockchain.info/tobtc?currency=USD&value='+ price;
	
	$.ajax({
    method: "GET",
    url: url,
    success: function(result) {
		$("#amount").text(result);
    	$("#desc").text(desc);
		$("#BTC").fadeIn(500);
		$("#loader").hide();
   },
   error: function(result) {
     alert('Oops!, Please try again later!');
   }
 });
}
</script>
	<script type="text/javascript">
		$( document ).ready( function () {
			$("#loader").hide();
			$("#BTC").hide();
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
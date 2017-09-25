<div class="footer">
		<div class="container">
        <div class="col-md-12 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					
                    <hr>
					
				</div>
                
                
			
			<ul class="main-nav wow fadeInUp animated" data-wow-delay=".5s">
            
						  <li><a href="index.php">Home</a><i>|</i></li>
                          <li><a href="career/">Career</a><i>|</i></li>
                          <li><a href="faq/">FAQs</a><i>|</i></li>
                          
                          
                          <li><a href="journals/">Academic Journals</a><i>|</i></li>
                          <li><a href="editors/">Editorial Board Members</a><i>|</i></li>
                          <li><a href="publicationfee/">Publication Fees</a><i>|</i></li>

                          <li><a href="news/">Hardcopy Request</a><i>|</i></li>
				          <li> <a href="submit/">Submit An Article Online</a><i>|</i></li>
                          <li><a href="pay/">Make Payment</a></li>

                      </ul>
                      <div class="col-md-12 footer-grids wow fadeInDown animated" data-wow-delay=".5s">
					
                    <hr>
					
				</div>
				
			<div class="copy-right wow fadeInUp animated" data-wow-delay=".7s">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style=" width:120px;" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br><br /><p>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a></p>
				<p>© 2017 IIARD Publishing. All rights reserved </p>
			</div>
		</div>
        <?php if(isset($_GET['q'])){?>
<div id="search" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                 
                 
                  <h3 class="title">Search<span> Results</span></h3>
                </div>
                 
               <?php if ($count > 0){ ?>
                <div class="modal-body">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                
                                <ul class="list-group">
                                
                                 <?php
										
									while($row_search = $stmt_search->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item" style="text-align:justify"><a class="items" style="color:#337ab7;"  href="<?php echo $row_search['path']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><?php echo $row_search['pub_name']; ?></a> <br> <p style="color:#FF590F;"> Author(s): <?php echo $row_search['pub_author']; ?>&nbsp; &para;<?php echo $row_search['pub_volume']; ?>&nbsp; &para; Journal: <a href="journal/?j=<?php echo $row_search['pub_journal']; ?>"><?php echo $row_search['pub_journal']; ?></a></p> </li>
                                  <?php 
								  }?>
                                </ul>
                                    </div>
                </div> <?php } else {?>
                
                <div class="modal-body">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                
                                <ul class="list-group">
                            
								  <li class="list-group-item">
                                  <h3 class="title">No Results<span>Found</span></h3>
                                   </li>
                                </ul>
                                    </div>
                </div>
                
				<?php } ?>
                
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>

<script type="text/javascript">
    $(window).load(function(){
        $('#search').modal('show');
    });
</script>
<?php } ?>
	</div>
	
<!-- marquee notification
<script src="js/jquery.liMarquee.js"></script>
	<script>
		$(window).load(function() { 
	$('.demo').liMarquee({
		scrolldelay: 50000,	
				
			circular: true
	});

		})
</script>-->

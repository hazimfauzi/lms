<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>
     <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>		
			
            	    <div class="span3">
					<?php include('report.php'); ?>
				    </div>   
                    <div class="span9">
                    <?php include('leaderboard.php'); ?>
                    </div>   
                    <div class="span12">
                    <?php include('banned.php'); ?>
                    </div>
                    
	                  
                        	
			</div>		
			</div>
		</div>
    </div>
    
<?php include('footer.php') ?>
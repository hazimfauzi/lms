<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
		        <div class="span3">
                </div>
				<div class="span6">
                <div class="alert alert-success">
	            <center>
				<h3>Your Transaction have been Success</h3>
				<h3>Thank You</h3>
                <p><a href="borrow.php" class="btn btn-info"><i class="icon-book icon-large"></i>&nbsp;Borrow Again</a>
                <a href="admin_view_borrow.php" class="btn btn-info"><i class="icon-search icon-large"></i>&nbsp;View borrow page</a></p>
				</center>
				</div>
                </div>
			
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>

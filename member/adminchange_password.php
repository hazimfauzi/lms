<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
<?php
$query=mysql_query("select * from member where member_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
			<div class="span3">
             <p><a href="admin_dashboard.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
			</div>
			
				<div class="span7">
						<form class="form-horizontal" method="post">
                       <div class="control-group">
								<label class="control-label" for="inputEmail">Old Password</label>
								<div class="controls">
								<input type="password" name="op" id="inputEmail" placeholder="New Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputEmail">New Password</label>
								<div class="controls">
								<input type="password" name="np" id="inputEmail" placeholder="New Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Re-type Password</label>
								<div class="controls">
								<input type="password" name="rp" id="inputPassword" placeholder="Re-type Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
								<button type="submit" name="update" class="btn btn-success">Update</button>
								</div>
								<br>
								<br>
			<?php
			
						if (isset($_POST['update'])){
						$op = $_POST['op'];
						$np = $_POST['np'];
						$rp = $_POST['rp'];
						$query=mysql_query("select password from member where member_id='$session_id'")or die(mysql_error());
                        $row=mysql_fetch_array($query);	
						$password = $row[0];	
						if($password != $op){
						?>
						<div class="alert alert-danger">Old Password Dont Match</div>
						<?php
						}	
						else if($np!=$rp){
						?>
						<div class="alert alert-danger">Password Dont Match</div>
						<?php
						}else{
						mysql_query("update member set password = '$np' where member_id = '$session_id' ")or die(mysql_error); ?>
						<div class="alert alert-success">Password Change</div>
						<?php }}?>
							</div>
						</form>
				</div>
				

	
			
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
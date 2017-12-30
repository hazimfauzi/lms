
<?php include('header.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="lms.png" class="img-rounded">
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Please Enter the Details Below..</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Matric Number:</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Matric/Staf Number" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                                    <center><a href="recovery_password.php" class="list-inline">&nbsp;Forgotten password?</a>	</center>
								</div>
                                </div>
                              
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM member WHERE matric_no='$username' AND password='$password'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $row['status'] == 'Banned' ){ ?>
								<div class="alert alert-danger">You have been banned!!!</div>		
								<?php }
									else if( $num_row > 0 ) 
									{
										$query = "SELECT level FROM member WHERE matric_no='$username' AND level='admin'";
								        $result = mysql_query($query)or die(mysql_error());
								        $num_row = mysql_num_rows($result);
										if( $num_row > 0 )
										header('location:admin_dashboard.php');
										else
										header('location:student_dashboard.php');
								        $_SESSION['id']=$row['member_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
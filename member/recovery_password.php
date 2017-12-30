
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
									<label class="control-label" for="inputEmail">Matric Number</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Matric/Staf Number" required>
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label" for="inputEmail">Ic Number</label>
									<div class="controls">
									<input type="text" name="ic_number" id="ic_number" placeholder="Ic Number" required>
									</div>
								</div>
								 <div class="control-group">
									<label class="control-label" for="inputEmail">Phone Number</label>
									<div class="controls">
									<input type="text" name="contact" id="contact" placeholder="Phone Number" required>
									</div>
								</div>
                               
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                                  
								</div>
                                </div>
                              
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$ic_number = $_POST['ic_number'];
								$contact = $_POST['contact'];
								$query = "SELECT * FROM member WHERE matric_no='$username' AND ic_number='$ic_number' AND contact='$contact'";
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
										header('location:admin_change_password.php');
										else
										header('location:student_change_password.php');
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
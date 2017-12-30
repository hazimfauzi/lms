<form method="POST" >
								<div class="control-group">
									<label class="control-label" for="inputEmail">Matric Number</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Matric Number" required>
									</div>
								</div>
								
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-search icon-large"></i>&nbsp;Check</button>
								</div>
								</div>
								
								<?php
								if (isset($_POST['submit'])){
								$username = $_POST['username'];
								$query = "SELECT * FROM member WHERE matric_no='$username' ";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									
									$member_id=$row['member_id'];
									?>
                                    
                                    <ul class="nav nav-tabs nav-stacked ">
		<li class="">
		<div class="alert alert-success"><strong><h4>Student Profile</h4></strong></div>
		</li>
									<strong>Name:</strong>
                                    <div class="alert alert-danger"><?php echo $row['name']; ?></div>
                                    <strong>Matric Number:</strong>
                                    <div class="alert alert-danger"><?php echo $row['matric_no']; ?></div>
                                    <strong>Gender:<br /></strong>
                                    <div class="alert alert-danger"><?php echo $row['gender']; ?></div>
                                    <strong>Contact:</strong>
                                    <div class="alert alert-danger"><?php echo $row['contact']; ?></div>
                                    <strong>Level:</strong>
                                    <div class="alert alert-danger"><?php echo $row['level']; ?></div>
                                   
								    <?php $member_id=$row['member_id']; 
								$query = "select COUNT(book_id) from borrow
                                          LEFT JOIN borrowdetails on borrowdetails.borrow_id =  borrow.borrow_id
                                          WHERE borrow_status != 'returned'
                                          AND member_id = '$member_id'";
                                          $result = mysql_query($query)or die(mysql_error());
                                          $row=mysql_fetch_array($result);
										  $no_book =$row[0]; ?>
                                          
                                     <?php if($no_book==3){?>
                                     <strong>Total Book Borrow:</strong>
                                    <div class="alert alert-info"><?php echo $row[0]; ?></div><?php }
                                    
                                    else{?>
                                    <strong>Total Book Borrow:</strong>
                                    <div class="alert alert-danger"><?php echo $row[0]; ?></div>
                                    <?php }}?>
                               </ul>
						</form>
                      

			
	
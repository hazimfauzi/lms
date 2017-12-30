<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>	
			<div class="span12">
            <p><a href="admin_add.php" class="btn btn-success"><i class="icon-plus icon-large"></i>&nbsp;Add Admin</a></p>	
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                       
                                        <th>Staff Number</th>                                 
                                        <th>Name</th>
                                        <th>Ic Number</th>
										<th>Gender</th>
										<th>Address</th>
										<th>Contact</th>
                                        <th>Action</th>
                                      </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from member where level='Admin' and member_id !='$session_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['matric_no']; ?></td>
                                    <td><?php echo $row['name']; ?> </td> 
                                    <td><?php echo $row['ic_number']; ?> </td> 
                                    <td><?php echo $row['gender']; ?> </td>
                                    <td><?php echo $row['address']; ?></td>
									<td><?php echo $row['contact']; ?></td> 
                                    <td width="100">
                                    
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('admin_edit_modal.php'); ?>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('admin_delete_modal.php'); ?>
									</td>
								    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
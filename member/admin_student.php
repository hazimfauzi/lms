<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>	
			<div class="span12">	
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                       
                                        <th>Matric Number</th>                                 
                                        <th>Name</th>
										<th>Gender</th>
										<th>Address</th>
										<th>Contact</th>
										<th>Year level</th>
                                        <th>Action</th>
                                        <th>Num Book Borrow</th>
                                      </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from member where level='User'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['matric_no']; ?></td>
                                    <td><?php echo $row['name']; ?> </td> 
                                    <td><?php echo $row['gender']; ?> </td>
                                    <td><?php echo $row['address']; ?></td>
									<td><?php echo $row['contact']; ?></td> 
									<td><?php echo $row['year_level']; ?></td> 
                                    <td width="100">
                                    <?php if($row['status'] == 'Banned'){ ?>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-lock icon-large">&nbsp;Banned</i></a>
                                        <?php include('admin_unbanned.php'); }
										else{?>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-success"><i class="icon-unlock icon-large">&nbsp;Active</i></a>
                                        <?php include('admin_banned.php'); }?>
									</td>
                                    <td><?php $query = "select COUNT(book_id) from borrow
                                          LEFT JOIN borrowdetails on borrowdetails.borrow_id =  borrow.borrow_id
                                          WHERE borrow_status != 'returned'
                                          AND member_id = '$id'";
                                          $result = mysql_query($query)or die(mysql_error());
                                          $row=mysql_fetch_array($result);
										  echo $row[0];?>
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
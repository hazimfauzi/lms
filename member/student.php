<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
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
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
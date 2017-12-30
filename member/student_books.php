<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('student_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>	
			<div class="span12">	
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                       
                                        <th>Book Id</th>                                 
                                        <th>Title</th>
										<th>Category</th>
										<th>Author</th>
										<th>Copies</th>
										<th>Publisher</th>
                                        <th>Publisher Name</th>
                                        <th>Copyright Year</th>
                                      </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $book_query=mysql_query("select * from book")or die(mysql_error());
									while($row=mysql_fetch_array($book_query)){
									$id=$row['book_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?> </td> 
                                    <td><?php echo $row['category_id']; ?> </td>
                                    <td><?php echo $row['author']; ?></td>
									<td><?php echo $row['book_copies']; ?></td> 
									<td><?php echo $row['book_pub']; ?></td> 
                                    <td><?php echo $row['publisher_name']; ?></td>
                                    <td><?php echo $row['copyright_year']; ?></td>
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
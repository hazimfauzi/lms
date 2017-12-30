<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>	
            <div class="span12">	
            <div class="pull-right">
					<a href="books_add.php" class="btn btn-success"><i class="icon-plus icon-large"></i>&nbsp;ADD BOOK</a>
			</div>
            <p> 
            <a href="borrow.php" class="btn btn-success"><i class="icon-folder-open icon-large"></i>&nbsp;BORROW</a>
            <a href="admin_view_borrow.php" class="btn btn-success"><i class="icon-book icon-large"></i>&nbsp;VIEW BORROWED BOOKS</a>
            <a href="return.php" class="btn btn-success"><i class="icon-shopping-cart icon-large"></i>&nbsp;VIEW RETURNED BOOKS</a></p>
            
            
            
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                       
                                        <th>Book Id</th>                                 
                                        <th>Title</th>
										<th>Category</th>
										<th>Author</th>
										<th>Copies</th>
										<th>Book Publication</th>
                                        <th>Publisher Name</th>
                                        <th>Copyright Year</th>
                                        <th>Action</th>
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
                                    <td class="action">
                                         <a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										 <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										
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
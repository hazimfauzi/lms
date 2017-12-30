<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
            <?php include('head.php'); ?>	
				
                    <div class="span1">
                        <p><a href="admin_books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>	</div>
                    <div class="span11">	
						<div class="alert alert-success"><strong>Borrowed Books</strong></div></div>
                        <div class="span12">
                           <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

                                <thead>
                                    <tr>
                                        <th>Book title</th>                                 
                                        <th>Borrower</th>                                 
                                        <th>Year Level</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Due Date</th>
										<th>Borrow Status</th>
                                        <th>Action</th>
                                        <th>Debt</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								WHERE borrow_status != 'returned'
								ORDER BY due_date
								  ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
				                    $borrow_status =$row['borrow_status'];
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?> </td>  
									<td><?php echo $row['borrow_status'];?></td> 
                                    <td> <a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn btn-success"><i class="icon-minus icon-large"></i> <strong>Return</strong></a>
                                    <?php include('modal_return.php'); ?> </td> 
									 <td><?php $Today = date('d/m/Y');
									          if($row['due_date'] < $Today)
											  {
												  echo 'RM1.00';}
											  else 
											  echo 'RM0.00'?></td>  
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							

			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
            <?php include('head.php');
			$username='Check First'; ?>
								
         <div class="span1">
         <p><a href="admin_books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p></div>
         <div class="span11">
		                        <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Borrow Table</strong>
                                </div></div>	
       	
        <div class="span12">
        </div>
        
		


          <div class="span3">

				
         <?php include('borrow_profile .php'); ?>
			</div>
            
				<form method="post" action="borrow_save.php">
                
          <div class="span3">
          	<div class="control-group">
			<label class="control-label" for="inputEmail">Matric Number:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="matric_no"  value="<?php echo $username; ?>" placeholder="Matric Number" required>
               

			</div>
		</div>
       </div>
             
			<div class="span2">
           <div class="control-group"> 
					<label class="control-label" for="inputEmail">Borrow Date</label>
                    <div class="alert alert-warning"><strong>	<?php
								$Today = date('y:m:d');
								$new = date('d/m/y', strtotime($Today));
								echo $new;
								?></strong>
                     </div>
					
				
                                
					
			</div>
            </div>
            <div class="span3">
            <div class="control-group"> 
					<label class="control-label" for="inputEmail">Due Date</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #000000;" required/>
					</div>
				</div>
                </div>
                <div class="span1">
                <div class="control-group">
                    
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Borrow</button>
					</div>
                   
				</div>
                </div>
                <div class="span9">
						<div class="alert alert-success"><strong>Please select a book</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                       
                                        <th>Acc No.</th>                                 
                                        <th>Book title</th>                                 
                                        <th>Category</th>
										<th>Author</th>
										<th>Publisher name</th>
										<th>Select</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from book")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id']; ?>
                                    
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $row['category_id']; ?> </td> 
                                    <td><?php echo $row['author']; ?> </td> 
									<td><?php echo $row['publisher_name']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
												
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
					</div>			
			    </form>



 
      
<script>	

$(".uniform_on").change(function(){
	
	if( <?php echo $no_book ?>  == 3 )
        {
				 $(".uniform_on").attr('disabled', 'disabled');
		        alert('3 Books are allowed per borrow');
        $(".uniform_on:unchecked").removeAttr('disabled');
       
		
  
		}	
    else if( <?php echo $no_book ?>  == 2 )
        var max= 1; 
    else if( <?php echo $no_book ?>  == 1 )
        var max= 2; 
    else
	    var max= 3;
    if( $(".uniform_on:checked").length == max )
	{
	
       $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }
	else
	{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>
		</div>
    </div>
</div>
</div>

<?php include('footer.php') ?>
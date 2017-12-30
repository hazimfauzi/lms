<div class="life-side-bar">
		
        
        <table cellpadding="2" cellspacing="2" border="2" class="table " >
                                <thead>
                                    <tr>
                                    <th><center><h3><div class="alert alert-danger">Name who are late to return book</div></h3></center></th>                                 
                                    </tr>
                                </thead>
	                            <tbody>
                                <td>
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
                                <thead>
                                    <tr>
                                        <th>Name</th>   
                                        <th>Matric Number</th>                              
                                        <th>Book Not Return</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
								  $Today = date('d/m/Y');
								  $user_query=mysql_query("select name,matric_no,	book_title from borrow
                                                            LEFT JOIN member ON borrow.member_id = member.member_id
                                                            LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
                                                            LEFT JOIN book on borrowdetails.book_id =  book.book_id
                                                            WHERE borrow_status != 'returned'
															AND due_date < '$Today'
								  ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){ ?>
									<tr>                              
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['matric_no']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    
									      
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
                            </td>
                            </tbody>
                            </table>
								   
								  


                           
								
                              
                                
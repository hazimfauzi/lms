
								 
                                  <?php   $no_book1='0';
										  $no_book2='0'; 
                                          $no_book3='0';
										  $name1='none';
										  $name2='none';
										  $name3='none';
										  $matric_no1='none';
										  $matric_no2='none';
										  $matric_no3='none';
									$user_query=mysql_query("select * from member where level='User'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
                                    <?php $query = "select count(book_id),name,matric_no from member
														join borrow using (member_id)
														join borrowdetails using (borrow_id)
														join book using (book_id)
														where borrow_status = 'returned'
														AND member_id = '$id' AND month(date_return) = month(now())
														AND status != 'Banned'									
														group by name";
                                          $result = mysql_query($query)or die(mysql_error());
                                          $row=mysql_fetch_array($result);
										  
										
										  if($row[0]>$no_book1)
										  {
										   $name3=$name2;
										   $name2=$name1;
										   $matric_no3=$matric_no2;
										   $matric_no2=$matric_no1; 
										   $matric_no1=$row[2];
										   $name1=$row[1]; 
										   $no_book3=$no_book2;
										   $no_book2=$no_book1;
										   $no_book1=$row[0];}
										  else if($row[0]>$no_book2)
										  {
											  $name3=$name2;
											  $matric_no3=$matric_no2;
										   $no_book3 = $no_book2;
										   $name2=$row[1];
										   $matric_no2=$row[2];
										  $no_book2=$row[0];
										  }
										  else if($row[0]>$no_book3){
											  $matric_no3=$row[2];
										  $name3=$row[1];
										  $no_book3=$row[0];}
										  else
										  ?>
                                          
                                         
                                      
                                   
                                    
									<?php  }  ?> 
									
							
                            
                            
                            <table cellpadding="2" cellspacing="2" border="2" class="table " >
                                <thead>
                                    <tr>
                       
                                        <th><center><h3><div class="alert alert-success">LEADERBOARD</div></h3></center></th>
								
                                      </tr>
                                </thead>
                                <tbody> 
                            <td>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                       
                                        <th>No</th>                                 
                                        <th>Name</th>
                                        <th>Matric Number</th>
										<th>Total Book Borrow</th>
								
                                      </tr>
                                </thead>
                                <tbody>
								 <?php $name[1]=$name1;   
                                    $name[2]=$name2;  
                                    $name[3]= $name3; 
                                    $no_book[1]=$no_book1;
                                  $no_book[2]=$no_book2;
								  $no_book[3]=$no_book3;
								  $matric_no[1]=$matric_no1;
                                  $matric_no[2]=$matric_no2;
								  $matric_no[3]=$matric_no3;
								  
									for($i=1;$i<4;$i++){  ?>
									<tr class="del<?php echo $i ?>">
									
									                              
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $name[$i]; ?> </td>
                                    <td><?php echo $matric_no[$i]; ?> </td> 
                                    <td><?php echo $no_book[$i]; ?> </td>
                                   
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
								</td></tbody></table>	
									
                              
								  


                           
								
                              
                                
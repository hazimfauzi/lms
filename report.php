
        
        <table cellpadding="2" cellspacing="2" border="2" class="table " >
                                <thead>
                                    <tr>
                                    <th><center><h3><div class="alert alert-success">REPORT</div></h3></center></th>                                 
                                    </tr>
                                </thead>
	                            <tbody>
                                <td>
         
                            <table cellpadding="0" cellspacing="0" border="0" class="table " >
                                <thead>
                                    <tr>
                                    <th><center>Total User</center></th>                                 
                                    </tr>
                                </thead>
                                <tbody>
								    <td>    <?php $query=mysql_query("select count(member_id) from member")or die(mysql_error());
		                                          $row=mysql_fetch_array($query); ?>
                                              <center><strong><?php echo $row[0];?></strong></center>
                              <table cellpadding="0" cellspacing="0" border="0" class="table " >
                                <thead>
                                    <tr>
                                    <th><center>Admin</center></th>    
                                    <th><center>Student</center></th>                               
                                    </tr>
                                </thead>
                                <tbody>
								    <td>    <?php $query=mysql_query("select count(member_id) from member where level='Admin'")or die(mysql_error());
		                                          $row=mysql_fetch_array($query); ?>
                                              <center><strong><?php echo $row[0];?></strong></center>
                                    </td>
                                    <td>    <?php $query=mysql_query("select count(member_id) from member where level='User'")or die(mysql_error());
		                                          $row=mysql_fetch_array($query); ?>
                                              <center><strong><?php echo $row[0];?></strong></center>
                                               <table cellpadding="0" cellspacing="0" border="0" class="table " >
                                <thead>
                                    <tr>
                                    <th><center>Active</center></th>    
                                    <th><center>Banned</center></th>                               
                                    </tr>
                                </thead>
                                <tbody>
								    <td>    <?php $query=mysql_query("select count(member_id) from member where level='User' AND status='active'")or die(mysql_error());
		                                          $row=mysql_fetch_array($query); ?>
                                              <center><strong><?php echo $row[0];?></strong></center>
                                    </td>
                                    <td>    <?php $query=mysql_query("select count(member_id) from member where level='User' AND status='banned'")or die(mysql_error());
		                                          $row=mysql_fetch_array($query); ?>
                                              <center><strong><?php echo $row[0];?></strong></center>
                                    </td>
                                    
                                   
								
                           
                                </tbody>
                            </table>
                                    </td>
                                  </tbody>
                            </table> 
                                    </td>
                                  
                                   
								
                           
                                </tbody>
                            </table>
                            </td>
                            </tbody>
                             
</table>


			
			
	
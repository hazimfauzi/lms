



<?php $query = "select due_date from borrow
               LEFT JOIN borrowdetails on borrowdetails.borrow_id =  borrow.borrow_id
               WHERE borrow_status != 'returned'
               AND member_id = '$id'";
               $result = mysql_query($query)or die(mysql_error());
               $row=mysql_fetch_array($result);
			   
			   echo $row[0];
										 
										  
?>
	<?php
 	include('dbcon.php');
	
	$id=$_POST['selector'];
	$matric_no  = $_POST['matric_no'];
	$due_date  = $_POST['due_date'];
    
				
				$result =  mysql_query("select member_id from member where matric_no='$matric_no'")or die(mysql_error()); 
				$row=mysql_fetch_array($result);
				$member_id=$row[0];
				
	if ($id == '' ){ 
	header("location: borrow.php");
	?>
	

	<?php }else{
	


	mysql_query("insert into borrow (member_id,date_borrow,due_date) values ('$member_id',NOW(),'$due_date')")or die(mysql_error());
	$query = mysql_query("select * from borrow order by borrow_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysql_query("insert borrowdetails (book_id,borrow_id,borrow_status) values('$id[$i]','$borrow_id','borrowing')")or die(mysql_error());
	 $query = mysql_query("select book_copies from book where book_id = '$id[$i]' ")or die(mysql_error());
	 $row = mysql_fetch_array($query);
	 $book_copies  = $row['book_copies'] - 1;
	 mysql_query("update book set book_copies='$book_copies' where book_id=$id[$i]")or die(mysql_error());

}
header("location: books_success.php");
}  
?>
	
	

	
	
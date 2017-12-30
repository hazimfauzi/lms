<?php 
include('dbcon.php');

$id=$_GET['id'];
$book_id = $_GET['book_id'];

mysql_query("update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysql_error());	
 
	 $query = mysql_query("select book_copies from book where book_id = $book_id ")or die(mysql_error());
	 $row = mysql_fetch_array($query);
	 $book_copies  = $row['book_copies'] + 1;
	 mysql_query("update book set book_copies='$book_copies' where book_id=$book_id")or die(mysql_error());
	 					
 header('location:admin_view_borrow.php');

?>	
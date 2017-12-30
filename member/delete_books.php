<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from book where book_id='$id'")or die(mysql_error());
header('location:admin_books.php');
?>
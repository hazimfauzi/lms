<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$book_copies=$_POST['book_copies'];
$book_pub=$_POST['book_pub'];
$publisher_name=$_POST['publisher_name'];
$copyright_year=$_POST['copyright_year'];

								
mysql_query("insert into book (book_title,category_id,author,book_copies,book_pub,publisher_name,copyright_year)
 values('$book_title','$category_id','$author','$book_copies','$book_pub','$publisher_name','$copyright_year')")or die(mysql_error());

 
header('location:admin_books.php');
}
?>	
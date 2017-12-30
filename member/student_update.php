<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];



mysql_query("update member set name='$firstname',ic_number='$lastname',gender='$gender',address = '$address',contact = '$contact' where member_id='$id'")or die(mysql_error());
								
								
header('location:student_dashboard.php');
}
?>	
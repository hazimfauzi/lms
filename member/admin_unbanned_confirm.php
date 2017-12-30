<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("update member set status = 'Active' where member_id='$id'") or die(mysql_error());

header('location:admin_student.php');
?>
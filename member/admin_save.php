<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$matric_no=$_POST['matric_no'];
$name=$_POST['name'];
$ic_number=$_POST['ic_number'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];




								
mysql_query("insert into member(matric_no,name,ic_number,password,gender,address,contact,year_level,level) values('$matric_no','$name','$ic_number','$password','$gender','$address','$contact','None','Admin')")or die(mysql_error());
 
 
header('location:admin.php');
}
?>	
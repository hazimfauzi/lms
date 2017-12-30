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
$year_level=$_POST['year_level'];

$query=mysql_query("select matric_no from member where matric_no='$matric_no'")or die(mysql_error());
$row=mysql_fetch_array($query);
	if($row['matric_no'] == $matric_no)
	header('location:fail.php');
	else{
	
	
								
mysql_query("insert into member(matric_no,name,ic_number,password,gender,address,contact,year_level,level,status) values('$matric_no','$name','$ic_number','$password','$gender','$address','$contact','$year_level','User','Active')")or die(mysql_error());
 
 
header('location:success.php');}
	}
?>	
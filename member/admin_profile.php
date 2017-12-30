<div class="life-side-bar">
    <ul class="nav nav-tabs nav-stacked ">
		<li class="">
		<div class="alert alert-danger">PROFILE</strong></div>
		</li>
	
           <?php 
		     $query=mysql_query("select * from member where member_id='$session_id'")or die(mysql_error());
		     $row=mysql_fetch_array($query); ?>
             
             <strong>Matric Number:<br /></strong>
             <?php echo $row['matric_no']; ?>
             <strong><br />Name:<br /></strong>
             <?php echo $row['name']; ?>
             <strong><br />Ic Number:<br /></strong>
             <?php echo $row['ic_number']; ?>
             <strong><br />Gender:<br /></strong>
             <?php echo $row['gender']; ?>
             <strong><br />Address:<br /></strong>
             <?php echo $row['address']; ?>
             <strong><br />Contact:<br /></strong>
             <?php echo $row['contact']; ?>
             <strong><br />Level:<br /></strong>
             <?php echo $row['level']; ?>
             <strong><br /><br /></strong>
              <p><a href="admin_edit.php" class="btn btn-success"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>
              <a href="adminchange_password.php" class="btn btn-success">&nbsp;Change Password</a></p>
   
    



</ul>			
</div>
			
	
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
<?php $get_id = $session_id; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Member</div>
			<p><a class="btn btn-info" href="admin_dashboard.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="admin_update.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['name']; ?>" placeholder="Firstname" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">IC Number:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['ic_number']; ?>" placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
			<select name="gender" required>
			
			
        <?php 
		$query=mysql_query("select gender from member where member_id='$get_id'")or die(mysql_error());
		$row1=mysql_fetch_array($query);
		
		?>					
									
									<option><?php echo $row['gender']; ?> </option>
									<option>Male</option>
									<option>Female</option>
									
				</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddress:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{10,10}" class="search" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Phone Number"  autocomplete="off"  maxlength="10" >
			</div>
		</div>
		
	
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
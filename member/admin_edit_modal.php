	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Staff Number</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['user_id']; ?>" required>
				<input type="text" id="inputEmail" name="username" value="<?php echo $row['matric_no']; ?>" required>
				</div>
			</div>
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
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
            <?php
	if (isset($_POST['edit'])){
	
	$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];



mysql_query("update member set name='$firstname',ic_number='$lastname',gender='$gender',address = '$address',contact = '$contact' where member_id='$id'")or die(mysql_error());
?><script>
	window.location="admin.php";
	</script>
	<?php
	}
	?>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
									

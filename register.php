<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
            <?php include('head.php'); ?>
			<div class="span12">	
            
		
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Matric Number:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="matric_no"  placeholder="Matric Number" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Name:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="name"  placeholder="Full Name" required>
			</div>
		</div>
         <div class="control-group">
			<label class="control-label" for="inputPassword">Ic Number:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="ic_number"  placeholder="Ic Number" required>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="password" id="inputPassword" name="password"  placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddress:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Kolej Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Cellphone Number:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
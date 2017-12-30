<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from book where book_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Books</div>
			<p><a class="btn btn-info" href="admin_books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
			
            
         <div class="control-group">
			<label class="control-label" for="inputEmail">Book_title:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="Book Title" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
            </div>
		</div>   
		<div class="control-group">
			<label class="control-label" for="inputPassword">Category</label>
			<div class="controls">
			<select name="category_id">
            
			<option><?php echo $row['category_id']; ?></option>
			<option>Periodical</option>
            <option>English</option>
            <option>Math</option>
            <option>Science</option>
            <option>Encyclopedia</option>
            <option>Newspaper</option>
            <option>General</option>
            <option>References</option>
            
			</select>
		</div>
		</div>
		
        <div class="control-group">
			<label class="control-label" for="inputEmail">Author:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>"  placeholder="Author" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Book_copies:</label>
			<div class="controls">
			<input class="span1" type="text" id="inputPassword" name="book_copies" value="<?php echo $row['book_copies']; ?>" placeholder="book_copies" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Book_publication:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="book_pub" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Publisher_name:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="publisher_name" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Copyright_year:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="copyright_year" required>
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
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Books</div>
			<p><a href="admin_books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Book_title:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="Book Title" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Category</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
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
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Author" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">Book Copies:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="book_copies"  placeholder="" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Book Publication:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="book_pub" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Publisher Name:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Publisher Name" required>
			</div>
		</div>
         <div class="control-group">
			<label class="control-label" for="inputPassword">Copyright Year:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="Copyright Year" required>
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
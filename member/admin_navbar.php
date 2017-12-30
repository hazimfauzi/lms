      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li><a href="admin_dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                    <li><a href="admin_books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
                    <li><a href="admin.php"><i class="icon-user icon-large"></i>&nbsp;Admin</a></li>
                    <li><a href="admin_student.php"><i class="icon-group icon-large"></i>&nbsp;Student</a></li>
				    <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: 
                        <?php 
						$query = mysql_query("select name from member where member_id = '$session_id'")or die(mysql_error());
						$row=mysql_fetch_array($query);
						echo $row[0];
						?>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
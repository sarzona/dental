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
					<?php
					$query=mysqli_query($conn,"select * from members where member_id='$session_id'")or die(mysqli_error($conn));
					$row=mysqli_fetch_array($query);
					?>
					<li><a href="dasboard.php" class=""><i class="icon-home icon-large"></i></a></li>			
					<li class="active" ><a href="dasboard.php" class="">Welcome:&nbsp;<i class="icon-user icon-large"></i>&nbsp;<?php echo $row['firstname']." ".$row['lastname']; ?></a></li>			
					<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="icon-cog icon-large"></i>&nbsp;Account
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a href="edit_info.php"><i class="icon-pencil icon-large"></i>&nbsp;Edit Info</a></li>
<li><a href="myschedule.php"><i class="icon-file-alt icon-large"></i>&nbsp;My Schedule</a></li>
<li><a href="logout.php"><i class="icon-signout icon-large"></i>Logout</a></li>
</ul>
</li>
					</ul>
					     
                 
                    </div>
                </div>
            </div>
        </div>

	     
    
   
<div class="alert alert-info">Please Enter The Details Below</div>
<div class="lgoin_terry">
<form method="post" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username</label>
			<div class="controls">
			<input type="text" name="username"  placeholder="Username" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
			<input type="password" name="password" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			
			<div class="controls">
			<div class="please">Please fill in the fields</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit1" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
			</div>
		</div>

			<?php
if (isset($_POST['submit1'])){

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM members WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row > 0 ) {		
	$_SESSION['id']=$row['member_id']; ?>
	<script>
	window.location="dasboard.php";
	</script>
	<?php	}
		else{ ?>
		<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Please check your Username and Password</div>
	<?php	
	}	
		}
?>		
	</form>
	</div>
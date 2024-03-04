<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$middlename=$_POST['middlename'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact_no=$_POST['contact_no'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
			if($cpassword!=$password){
		$a="Password do not Match";
		}else{
		$a = "";
		}
	}
	?>
<form method="post">	
	<div class="span5">
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Name</label>
			<div class="controls">
			<input type="text" name="firstname" value="<?php if (isset($_POST['submit'])){echo $firstname;} ?>" placeholder="Firtname" required> 
			<input type="text" name="lastname"  value="<?php if (isset($_POST['submit'])){echo $lastname;} ?>" placeholder="Lastname" required> 
			<input type="text" name="middlename" value="<?php if (isset($_POST['submit'])){echo $middlename;} ?>" placeholder="Middlename" required> 
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			<div class="controls">
			<select name="gender" required>
			<option><?php if (isset($_POST['submit'])){echo $gender;} ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Age</label>
			<div class="controls">
			<input name="age" class="span1" type="number"  value="<?php if (isset($_POST['submit'])){echo $age;} ?>" placeholder="Age" required>
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username</label>
			<div class="controls">
			<input type="text" name="username" value="<?php if (isset($_POST['submit'])){echo $username;} ?>" placeholder="Username" required>
			</div>
		</div>
		<div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
        <input type="password" name="password" id="password" value="<?php if (isset($_POST['submit'])) { echo htmlspecialchars($password); } ?>" placeholder="Password" required>
        <button type="button" onclick="togglePasswordVisibility('password')">Show Password</button>
    </div>
</div>

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
			</div>
		</div>
    </div>
</div>
	
	
	<div class="span6">
	
	
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address</label>
			<div class="controls">
			<input type="text" name="address" value="<?php if (isset($_POST['submit'])){echo $address;} ?>" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact No</label>
			<div class="controls">
			<input type="text" name="contact_no" value="<?php if (isset($_POST['submit'])){echo $contact_no;} ?>"placeholder="Contact No" required>
			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Email Address</label>
			<div class="controls">
			<input name="email" type="text" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" placeholder="Email Address" required> 
			</div>
		</div>
		
	
	
		    <div class="control-group">
    
    <div class="controls">
   
	
	<?php 

if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];	
	
	{
	

	mysqli_query($conn,"insert into members (firstname,lastname,age,gender,address,email,contact_no,username,password)
	values ('$firstname','$lastname','$age','$gender','$address','$email','$contact_no','$username','$password')
	")or die(mysqli_error($conn));?>


<?php

echo " ";
}}
?>
    </div>
    </div>
	
	

	



<div class="control-group">
    <label class="control-label" for="inputPassword">Confirm Password</label>
    <div class="controls">
        <input type="password" name="cpassword" id="cpassword" value="<?php if (isset($_POST['submit'])) { echo htmlspecialchars($cpassword); } ?>" placeholder="Confirm Password" required>
        <button type="button" onclick="togglePasswordVisibility('cpassword')">Show Password</button>
        <?php if (isset($_POST['submit'])) { ?>
            <?php if ($cpassword != $_POST['password']) { ?>
                <span class="label label-important">Passwords do not match</span>
            <?php } ?>
        <?php } ?>
		<script type="text/javascript">
    // Only redirect if the passwords match
    <?php if (isset($_POST['submit']) && $cpassword == $_POST['password']) { ?>
        window.location = 'success.php';
    <?php } ?>
</script>
    </div>
</div>

<script type="text/javascript">
    function togglePasswordVisibility(fieldId) {
        var passwordField = document.getElementById(fieldId);
        var button = passwordField.nextElementSibling;

        if (passwordField.type === "password") {
            passwordField.type = "text";
            setTimeout(function () {
                passwordField.type = "password";
            }, 4000);
        } else {
            passwordField.type = "password";
        }
    }
</script>


		
		
	</div>
		
		</div>	

	
</form>
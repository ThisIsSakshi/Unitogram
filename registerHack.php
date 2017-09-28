<?php session_start(); 
include("connectionHack.php");
$conn = connect(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<div class="RegistForm">
<form method="post" enctype="multipart/form-data" action="confirmHack.php">
		<div class="label" ><label>First Name</label></div>
		<div class="input" >
		<input type="text" placeholder="First name" name="Fname" />
		</div>
		
		<div class="label" ><label>Last Name</label></div>
		<div class="input" >
		<input type="text" placeholder="Last name" name="Lname" />
		</div>
		
		<div class="label" ><label>Age</label></div>
		<div class="input" >
		<input type="number" name="Age" min="1" max="100" />
		</div>
		
		<div class="label" ><label>Date of birth</label></div>
		<div class="input" >
		<input type="date" name="dob" />
		</div>
		
		<div class="label" ><label>Gender</label></div>
		<div class="input" >
		<input type="radio" name="gender" value="male" checked> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other<br><br>
		</div>
		
		<div class="label" ><label>Address</label></div>
		<div class="input" >
		<select name="address">
			<?php
			$query = "select * from addr order by place;";
			$result = mysqli_query($conn,$query);
			while($data=mysqli_fetch_assoc($result)) {?>
			<option value="<?php print_r($data['place']); ?>"><?php print_r($data['place']); ?></option>
			<?php } ?>
		</select>
		</div>
		
		<div class="label" ><label>Phone Number</label></div>
		<div class="input" >
		<input type="tel" name="phno" />
		</div>
		
		<div class="label" ><label>Aadhaar Number</label></div>
		<div class="input" >
		<input type="text" name="aadhaar" tabindex="1" maxlength="12" size="12"/>
		</div>
		
		<div class="label" ><label>Email</label></div>
		<div class="input" >
		<input type="email" name="email" />
		</div>
		<div class="label" ><label>Username</label></div>
		<div class="input" >
		<input type="text" name="username" />
		</div>
		
		<div class="label" ><label>Password</label></div>
		<div class="input" >
		<input type="text" name="pass" />
		</div>
		
		<div class="label"><label>Picture</label></div>
		<div class="input" >
		<input type="file" name="pic" />
		</div>
		
		<div class="label">&nbsp;</div>
		<div class="input" >
		<input type="submit" name="submit" value="Add"/>
		</div>
		
</form>
</div>
</body>
</html>
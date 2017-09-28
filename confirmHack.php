<?php 
session_start();
/*if(!isset($_SESSION['username'])){
	header("location:loginHack.php");
}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
	include("connectionHack.php");
	$conn = connect(); 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";*/
	
	$imageName = "";
	if($_FILES['pic']['error'] == 0){                  //adding image
		$temp=explode(".",$_FILES[	'pic']['name']);
		$ext = end($temp);
		$filename = strtotime(date('Y-m-d H:i:s')).".".$ext;
		if(move_uploaded_file($_FILES['pic']['tmp_name'],"uploadedFiles/".$filename)){
			$imageName = $filename;
		}
	}
	
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
    $Age = $_POST['Age'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$aadhaar = $_POST['aadhaar'];
    $email = $_POST['email'];
	$username = $_POST['username'];
    $pass = $_POST['pass'];
	 $query = "INSERT INTO user(Fname,Lname,Age,dob,gender,address,phno,aadhaar,email,username,pass,pic) VALUES('$Fname','$Lname','$Age','$dob','$gender','$address','$phno','$aadhaar','$email','$username','$pass','$imageName');";
	if(mysqli_query($conn,$query)){
		$_SESSION['successMsg'] = "<h3>Wecome ".$Fname." you have registered successfully </h3>";
		echo $_SESSION['successMsg']; ?> 
		
		<h3>Continue to login</h3>
		<button onclick="location.href='loginHack.php'">Login</button>
		<?php
	}else{
		$_SESSION['errorMsg'] = "<br> Sorry Operation failed please try again.";
		echo $_SESSION['errorMsg'];
	}
	} 
	?>
</body>
</html>
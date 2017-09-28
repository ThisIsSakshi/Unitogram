<?php
	session_start();
	echo "hello";
	//print_r($_POST);
	if(!empty($_POST['uid']) && !empty($_POST['pass'])){
		include("connectionHack.php");
		$conn = connect();
		//echo "OK";
		$uname = $_POST['uid'];
		$password = $_POST['pass'];
		$query = "select pass from user where username ='$uname';";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		if($data['pass'] == $_POST['pass']){
			$_SESSION['successMsg'] = "Login Successful";
			$_SESSION['username'] = $uname;
			header("location:mainpageHack.php");
		}else{
			$_SESSION['errorMsg'] = "Invalid username / password";
			echo $_SESSION['errorMsg'];
			header("location:loginHack.php");
		}
	
	}else{
		$_SESSION['errorMsg'] = "Please fill username and password";
		echo $_SESSION['errorMsg'];
		header("location:loginHack.php");
	}

?>
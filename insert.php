<?php
if(isset($_POST['Heading']))
{
	print_r($_POST);
	include_once("connectionHack.php");
		$conn=connect();
$quer="insert into post (Head,time,user,descript,toshow) values ('".$_POST['Heading']."',sysdate(),'".$_POST['User']."','".$_POST['Desc']."',0);";
		$res = mysqli_query($conn,$quer);
		unset($_POST['Heading']);	
	
		}
		header("location:mainpageHack.php");
?>
<?php
session_start();
if(session_destroy()){
	header("location:loginHack.php");
}else{
	header("location:mainpageHack.php");
}

?>
<?php session_start(); 

if(!isset($_SESSION['username'])){
	header("location:loginHack.php");
}
if(isset($_POST['Head']))
	include("connectionHack.php");
		$conn = connect();
			$query = "select * from user where username='".$_SESSION['username']."';";
			$result = mysqli_query($conn,$query);
			$data=mysqli_fetch_assoc($result); 
 ?>
 <form action="form.php" method="post">
	<div class="label" ><label>Heading</label></div>
	<div class="input" >
	<input type="text" name="Head"/>
	</div>
	
	<div class="input" >
	<input type="text" hidden name="user" value="<?php echo $_SESSION['username']; ?>"/>
	</div>
	
	<div class="label" ><label>Description</label></div>
	<div class="input" >
	<textarea name="decript" />
	</div>
	
	<div class="label" ><label>Description</label></div>
	<div class="input" >
	<input type="checkbox" name="toshow" />
	</div>
	
	<input type="submit" />
 </form>
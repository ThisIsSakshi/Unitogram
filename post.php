<?php 
if(!isset($_SESSION['username'])){
	header("location:loginHack.php");
}
	include_once("connectionHack.php");
		$conn = connect();
			$query = "select * from post order by time desc;";
			$result = mysqli_query($conn,$query);
			
			while($d=mysqli_fetch_assoc($result))
			{ ?>
		<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
		
		<?php
		$start_date = new DateTime($d['time']);
$since_start = $start_date->diff(new DateTime(date("Y-m-d H:i:s")) );
$curTime= $since_start->days.' days '.$since_start->h.' hour '.$since_start->i.' min ';
		?>
		
        <span class="w3-right w3-opacity"><?php echo $curTime; ?></span>
        <h4><?php echo $d['Head']; ?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $d['descript']; ?></p>
        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
		
		<?php
		
		include("modal2.php");
		?>
		
        <p data-toggle="modal" data-target="#myModal" ><?php echo $some['Fname']." ".$some['Lname']; ?></p>
		<?php unset($some); ?>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div> 
		<?php	}				
 ?>
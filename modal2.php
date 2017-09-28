<?php
//$page = $_SERVER['PHP_SELF'];
//$sec = "10";
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>ModalEg1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<?php
		$abtuser="select * from user where username='".$d['user']."';";
		$res = mysqli_query($conn,$abtuser);
		$some=mysqli_fetch_assoc($res);
		?>
<div class="container">
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click Here to Post</button>-->

  <!-- Modal -->
  <div class="modal fade bottom-sheet" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your Area</h4>
		   <div class="modal-body">
		  <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $some['Fname']." ".$some['Lname']; ?></h4>
         <p class="w3-center"><img src="uploadedFiles/<?php echo $some['pic']; ?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?php echo $some['address']; ?> Jabalpur, Madhya Pradesh</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $some['dob']; ?></p>
        </div>
      </div>
        </div>
       

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
        </div>
      </div>
	  
    </div>
  </div>
  
</div>

</body>
</html>

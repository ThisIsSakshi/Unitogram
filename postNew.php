<!DOCTYPE html>
<html lang="en">
<head>
  <title>ModalEg1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myPost" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Issue</h4>
        </div>
        <div class="modal-body">
		
		
		
		<form method="post" action="insert.php">
  <div class="form-group">
    <label for="text">Heading</label>
    <input type="text" class="form-control" placeholder="Enter Heading" name="Heading">
	<label for="text">Description</label>
    <textarea rows="3" cols="20" class="form-control" placeholder="Enter Description" name="Desc"></textarea>
	<input type="hidden" name="User" value="<?php echo $_SESSION['username']; ?>" />
	<!--<input type="submit" name="submit" value="submit" /> -->
	 
  </div>
		
      </div>
        <div class="modal-footer">
		<input type="submit" class="btn btn-primary" />
          <Button  class="btn btn-default" data-dismiss="modal">Cancel</Button>
        </div>
      </div>
	  </form>
	  
    </div>
  </div>
  
</div>


</body>
</html>

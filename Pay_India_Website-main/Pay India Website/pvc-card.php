<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PVC Card</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	

    <div class="container mb-5">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center mt-3 mb-3">PVC Card</h1>
    		</div>
    	</div>
    	<div class="row">

    		

    		<div class="col-12">
    			
    			
    			<div class="mt-4 mb-0 d-md-none">
					<h3><?php if (!empty($_GET['message'])) {
						?>
							<script>
								alert("<?php echo $_GET['message']; ?>")
							</script>
						<?php
						} ?></h3>

				</div>
				<form class="form-container mt-4" action="backend/pvc_b.php" method="post" enctype="multipart/form-data">

		   			<div class="form-group">
					    <label class="required" for="cname">Client Name</label>
					    <input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="fpass">File Password</label>
					    <input type="text" class="form-control" id="fpass" placeholder="File Password" name="fpass" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="dispatchaddress">Dispach Address</label>
					    <input type="text" class="form-control" id="dispatchaddress" placeholder="Dispach Address" name="dispatchaddress" required>
					  </div>
					  <div class="form-group">
						<label class="required" for="myFile">Upload PAN/Adhaar Card Copy</label>
						 <input class="form-control" type="file" id="myFile" name="filename">
				</div>

					  <button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
				</form>
    			
    		</div>
    		
    	</div>
			
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

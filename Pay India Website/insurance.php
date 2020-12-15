<?php include("./backend/head_check_retailer.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pay India</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>
<body>
<?php include("sidenav.php"); ?>
    		<div class="col-12 padding-sidenav px-0 pr-md-0">
    			<div class="topnav">
    				<h2 class="formheader">MSME Registration</h2>
					<?php include("retailer_wallet.php"); ?>

    		<div class="col-12 padding-sidenav pr-md-0 main-index">
    			
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">Insurance</h2>
    			</div>
				<div class="mt-4 mb-0 d-md-none">
					<h3><?php if (!empty($_GET['message'])) {
						?>
							<script>
								alert("<?php echo $_GET['message']; ?>")
							</script>
						<?php
						} ?></h3>

				</div>
		   		<form class="form-container mt-4 form-padding-internal" action="backend/insurance_b.php" method = "post" enctype="multipart/form-data">
                    <div class="form-group">
					    <label class="required" for="regnumber">Registration Number</label>
					    <input type="text" class="form-control" id="regnumber" placeholder="Number" name="regnumber" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="policy">Is your policy previously expired?</label>

					    <select name="policy" id="policy" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">Not Yet Expired</option>
						  <option value="option2">Expired after 23rd July,2020</option>
						  <option value="option3">Expired before 24th July,2020</option>
						</select>
					   <!--  <input type="text" class="form-control" id="category" placeholder="Choose Category" name="category"> -->
                      </div>
                      <div class="form-group">
					    <label class="required" for="claim">When did you last take a claim?</label>

					    <select name="claim" id="claim" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">Never</option>
						  <option value="option2">Less than 1 year ago</option>
                          <option value="option3">Oct 2018 to Sept 2019</option>
                          <option value="option4">Oct 2017 to Sept 2018</option>
                          <option value="option5">Oct 2016 to Sept 2017</option>
                          <option value="option6">Oct 2015 to Sept 2016</option>



						</select>
					   <!--  <input type="text" class="form-control" id="category" placeholder="Choose Category" name="category"> -->
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

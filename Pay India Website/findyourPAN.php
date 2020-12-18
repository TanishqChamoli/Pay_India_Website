<?php include("./backend/head_check_retailer.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find Your PAN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>
<body>
<?php include("sidenav.php"); ?>
    		
    		<div class="col-12 padding-sidenav px-0 pr-md-0">
    			<div class="topnav">
    				<h2 class="formheader">Find Your PAN</h2>
					<?php include("retailer_wallet.php"); ?>

    		<div class="col-12 padding-sidenav pr-md-0 main-index">
    			
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">Find Your PAN</h2>
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
		   		<form class="form-container mt-4 form-padding-internal" action="backend/findyourpan_b.php" method="post" enctype="multipart/form-data">

		   			<div class="form-group">
					    <label class="required" for="afname">Applicant Full Name</label>
					    <input type="text" class="form-control" id="afname" placeholder="Applicant Full Name" name="afname" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="fathername">Father's Name</label>
					    <input type="text" class="form-control" id="fathername" placeholder="Father's Name" name="fathername" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="mothername">Mother's Name</label>
					    <input type="text" class="form-control" id="mothername" placeholder="Mother's Name" name="mothername" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="applicantaddress">Applicant's Address</label>
					    <input type="text" class="form-control" id="applicantaddress" placeholder="Enter Address" name="applicantaddress" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="state">State</label>
					     <select name="state" id="state" class="form-control" required>
							<option value="">Select</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands </option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Tripura">Tripura</option>
							<option value="Telangana">Telangana</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Punjab">Punjab</option>
							<option value="Puducherry">Puducherry</option>
							<option value="Odisha">Odisha</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Manipur">Manipur</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Ladakh">Ladakh</option>
							<option value="Kerala">Kerala</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Haryana">Haryana</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Goa">Goa</option>
							<option value="Delhi">Delhi</option>
							<option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Bihar">Bihar</option>
							<option value="Assam">Assam</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="Uttarakhand">Uttarakhand</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					    <!-- <input type="text" class="form-control" id="state" placeholder="State" name="state"> -->
					  </div>

					   <div class="form-group">
					    <label class="required" for="district">District</label>
					     <select name="district" id="district" class="form-control" required>
						  <option value="">Select</option>
						  <option value="option1">option1</option>
						  <option value="option2">option2</option>
						  <option value="option3">option3</option>
						  <option value="option4">option4</option>
						</select>
					    <!-- <input type="text" class="form-control" id="district" placeholder="District" name="district" required> -->
					  </div>

					   <div class="form-group">
					    <label class="required" for="dob">Date Of Birth</label>
					    <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
					  </div>




					  <div class="form-group">
					    <label class="required">Gender</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" value="Male" checked>Male
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" value="Female">Female
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" value="Other">Other
							  </label>
						</div> 
					    <!-- <label class="required"><input type="radio" name="gender" value="Male"class="form-check-input" id="exampleInputPassword1">Male</label>
					   <label class="required"> <input type="radio" name="gender" value="Female"class="form-check-input" id="exampleInput">Female</label>
					    <label class="required"><input type="radio" name="gender"value="Other"class="form-check-input" id="example">Other</label> -->
					  </div>

					 

					  <div class="form-group">
					  		<label for="otherdocument">Any Document</label>
					  		 <input class="form-control" type="file" id="otherdocument" name="otherdocument">
					  </div>

					  <div class="form-group">
					    <label for="comments">Comments</label>
					    <textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
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

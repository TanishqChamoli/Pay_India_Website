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
    				<h2 class="formheader">MSME Registration</h2>
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
		   		<form class="form-container mt-4 form-padding-internal" action="backend/msme_b.php" method = "post" enctype="multipart/form-data">
					  <div class="form-group">
					    <label class="required" for="aadhar">Applicant Aadhar No.</label>
					    <input type="number" class="form-control" name="aadhar" id="aadhar" aria-describedby="emailHelp" placeholder="Enter aadhar" required>
					    <small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
					  </div>

					  <div class="form-group">
					    <label class="required" for="gst">G.S.T. Number </label>
					    <input type="number" class="form-control" id="gst" placeholder="G.S.T number" min="0" name="gst" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="cname">Client Name</label>
					    <input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="category">Choose Category</label>

					    <select name="category" id="category" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">option1</option>
						  <option value="option2">option2</option>
						  <option value="option3">option3</option>
						  <option value="option4">option4</option>
						</select>
					   <!--  <input type="text" class="form-control" id="category" placeholder="Choose Category" name="category"> -->
					  </div>

					  

					  <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="accountno">Bank A/C No.</label>
					    <input type="number" class="form-control" id="accountno" placeholder="Bank A/C No." name="accountno" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="ifsc">IFSC Code</label>
					    <input type="text" class="form-control" id="ifsc" placeholder="IFSC Code" name="ifsc" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="firmname">Firm Name</label>
					    <input type="text" class="form-control" id="firmname" placeholder="Firm Name" name="firmname" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="firmtype">Type Of Firm</label>
					     <select name="firmtype" id="firmtype" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">option1</option>
						  <option value="option2">option2</option>
						  <option value="option3">option3</option>
						  <option value="option4">option4</option>
						</select>
					   <!--  <input type="text" class="form-control" id="firmtype" placeholder="Select Firm Type" name="firmtype"> -->
					  </div>

					  <div class="form-group">
					    <label class="required" for="firmdate">Firm Starting Date</label>
					    <input type="date" class="form-control" id="firmdate" placeholder="Starting Date" name="firmdate" required>
					  </div>

					  

					  <div class="form-group">
					    <label class="required" for="natureofwork">Nature Of Work</label>
					    <select name="natureofwork" id="natureofwork" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">option1</option>
						  <option value="option2">option2</option>
						  <option value="option3">option3</option>
						  <option value="option4">option4</option>
						</select>
					   <!--  <input type="text" class="form-control" id="natureofwork" placeholder="Please tell what you deals in..." name="natureofwork"> -->
					  </div>

					  <div class="form-group">
					    <label class="required" for="oaddress">Office Address</label>
					    <input type="text" class="form-control" id="oaddress" placeholder="Enter Office Address" name="oaddress" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="state">State</label>
					     <select name="state" id="state" class="form-control" required>
							<option value="">Select</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Andaman and Nicobar Islands ">Andaman and Nicobar Islands </option>
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
					    <label class="required" for="pincode">Pincode</label>
					    <input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required>
					  </div>

					  <div class="form-group">
					    <label class="required">Gender</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" value="Male">Male
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
					    <label class="required">Employee Working</label><br>
					    <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="ew" value="Yes">Yes
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="ew" value="No">No
							  </label>
							</div>
						</div>

					  <div class="form-group">
					   <label class="required">Physically Handicapped</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio1" value="Yes">Yes
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio1" value="No">No
							  </label>
							</div>
					  </div>

					  <div class="form-group">
					  		<label class="required" for="myfile">Upload PAN Card Copy</label>
					  		 <input class="form-control" type="file" id="myfile" name="myfile">
					  </div>

					  <div class="form-group">
					  		<label for="otherdocument">Any Other Document</label>
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

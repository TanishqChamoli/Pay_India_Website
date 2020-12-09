<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAN Card UTI</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	


    <div class="container mb-5">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center mt-3 mb-3">PAN Card UTI</h1>
    		</div>
    	</div>
    	<div class="row">


    		<div class="col-12">
    			

		   		<form class="form-container mt-4">

		   			<div class="form-group">
					    <label class="required" for="cname">Client Name</label>
					    <input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="uname">Username</label>
					    <input type="text" class="form-control" id="uname" placeholder="User Name" name="uname" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="o-address">Office Address</label>
					    <input type="text" class="form-control" id="o-address" placeholder="Enter Office Address" name="o-address" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile Number" name="mn" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="email">Email Address</label>
					    <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
					  </div>
					   <div class="form-group">
					    <label class="required" for="state">State</label>
					     <select name="state" id="state" class="form-control" required>
							<option value="">Select</option>
							<option value="option1">Andhra Pradesh</option>
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
					  </div>

					  <div class="form-group">
					    <label class="required" for="firmname">Firm Name</label>
					    <input type="text" class="form-control" id="firmname" placeholder="Firm Name" min="0" name="firmname" required>
					  </div>
					   <div class="form-group">
					    <label class="required" for="aadhar">Applicant Aadhar No.</label>
					    <input type="number" class="form-control" name="aadhar" id="aadhar" placeholder="Enter aadhar" required>
					    <small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
					  </div>
					   <div class="form-group">
					    <label class="required" for="pan">PAN Card No. </label>
					    <input type="number" class="form-control" id="pan" placeholder="PAN number" min="0" name="pan" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="account-type">Choose Account Type</label>

					    <select name="account-type" id="account-type" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">option1</option>
						  <option value="option2">option2</option>
						  <option value="option3">option3</option>
						  <option value="option4">option4</option>
						</select>
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

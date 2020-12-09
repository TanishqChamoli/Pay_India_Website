<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GST</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	

    <div class="container mb-5">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center mt-3 mb-3">GST</h1>
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
		   		<form class="form-container mt-4"  action="backend/itr gst_b.php" method = "post" enctype="multipart/form-data">
		   			 <div class="form-group">
					    <label class="required" for="cname">Client Name</label>
					    <input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="firmname">Firm Name</label>
					    <input type="text" class="form-control" id="firmname" placeholder="Firm Name" name="firmname" required>
                      </div>
                      <div class="form-group">
					    <label for="email">Client Email</label>
					    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="firmtype">Type Of Firm</label>
					     <select name="firm" id="firmcategory" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">Proprietorship</option>
						  <option value="option2">Partnership</option>
						  <option value="option3">Private Limited Company</option>
						  <option value="option4">Society/Trust</option>
						</select>
                      </div>
                      <div class="form-group">
					    <label class="required" for="oaddress">Office Address</label>
					    <input type="text" class="form-control" id="oaddress" placeholder="Enter Office Address" name="oaddress" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="city">City</label>
					    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
                      </div>
                      <div class="form-group">
					    <label class="required" for="pincode">Pincode</label>
					    <input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required>
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
					    <label class="required" for="bactivity">Nature Of Business Activity</label>
					    <textarea class="form-control" name="bactivity" id="bactivity" placeholder="Type here..."></textarea>
                      </div>
                      <div class="form-group">
					    <label class="required" for="placeofbusiness">Whether Place of Business is</label>
					     <select name="placeofbusiness" id="placeofbusiness" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">Rented</option>
						  <option value="option2">Self Owned</option>
						  <option value="option3">Authorised</option>
						</select>
                      </div>
                      <div class="form-group">
					    <label class="required" for="bactivity">Nature Of Business Activity</label>
					    <textarea class="form-control" name="bactivity" id="bactivity" placeholder="Type here..."></textarea>
                      </div>
                    <div class="form-group">
                        <label class="required" for="myFile">Upload Passport Size Photo(only jpg,jpeg)</label>
						 <input class="form-control" type="file" id="myFile" name="filename">
						</div>
                	 <div class="form-group">
					    <label class="required" for="gender">Please Confirm that you have attached the following documents</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" checked>Pancard
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Aadhar Card
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Bank Passbook/Statement OR Cancelled Cheque
							  </label>
						</div>
					</div>

						

					  <div class="form-group">
					  		<label for="otherdocument">Any Document</label>
					  		 <input class="form-control" type="file" id="otherdocument" name="otherdocument">
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

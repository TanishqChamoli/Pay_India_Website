<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PF Refund</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>
<body>


	<nav class="navbar navbar-expand-md navbar-dark bg-brand d-md-none d-flex">
        	
		<a href="retailer.php" class="nav-back-btn">
			<span class="fa fa-lg fa-arrow-left"></span>
    	</a>
		<div class="logo-container">
			<a href="retailer.php" class="nav-brand"> 
				<img class="navimg mx-auto" src="shared/images/1.png">
			</a>
		</div>

		<button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li>
					<a href="itr gst.php" class="nav-link">ITR / GST</a>
				</li>
				<li>
					<a href="msme.php" class="nav-link">MSME Registration</a>
				</li>
				<li>
					<a href="votercard.php" class="nav-link">Voter Card</a>
				</li>
				<li>
					<a href="pfrefund.php" class="nav-link active">PF Refund</a>
				</li>
				<li class="accordian">
					<a href="#panNsdl" class="nav-link" data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right"></i></a>
					<div id="panNsdl" class="accordian-content collapse">
						<a href="newPan.php" class="nav-link">New PAN</a><br>
						<a href="form49A.php" class="nav-link">FORM 49A(To Edit)</a>
					</div>
				</li>
				<li>
					<a href="index pan card uti.php" class="nav-link">PAN Card UTI</a>
				</li>
				<li>
					<a href="findyourPAN.php" class="nav-link">Find Your PAN</a>
				</li>
				<li>
					<a href="aaharreprint.php" class="nav-link">Aadhar Reprint</a>
				</li>
				<li>
					<a href="aadharPANLink.php" class="nav-link">Aadhar PAN Link</a>
				</li>
				<li>
					<a href="passport.php" class="nav-link">Passport</a>
				</li>
				<li>
					<a href="pvc card.php" class="nav-link">PVC Card</a>
				</li>
				<li>
					<a href="bill payment.php" class="nav-link">Bill Payment</a>
				</li>
				<li>
					<a href="fssai.php" class="nav-link">FSSAI</a>
				</li>
				<li>
					<a href="insurance.php" class="nav-link">Insurance Form</a>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">Payment Gateway</a>
				</li> -->
			</ul>

			<div class="user-section">
				<h2>User Options</h2>
				<ul class="navbar-nav">
					<li><a href="#" class="nav-link">Account</a></li>
					<li><a href="#" class="nav-link">Wallet</a></li>
					<li><a href="#" class="nav-link">Logout</a></li>
				</ul>
			</div>

		</div>

    </nav>


    <div class="container-fluid mb-5">
    	<div class="row">

    		<div class="col-md-3 d-none d-md-flex sidenav-index">
    			<div class="sidenav">
    				<a href="retailer.php" class="nav-brand"> <img class="navimg" src="shared/images/1.png"></a>
					<a href="itr gst.php" class="sidenav-link">ITR/ GST</a>
					<a href="msme.php" class="sidenav-link">MSME Registration</a>
					<a href="votercard.php" class="sidenav-link">Voter Card</a>
					<a href="pfrefund.php" class="sidenav-link active">PF Refund</a>
					<div class="accordian">
						<a href="#panNsdl" class="sidenav-link"  data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="panNsdl" class="accordian-content collapse">
							<a href="newPan.php" class="sidenav-link">New PAN</a>
							<a href="form49A.php" class="sidenav-link">FORM 49A(To Edit)</a>
						</div>
					</div>
					<a href="index pan card uti.php" class="sidenav-link">PAN Card UTI</a>
					<a href="findyourPAN.php" class="sidenav-link">Find Your PAN</a>
					<a href="aadharreprint.php" class="sidenav-link">Aadhar Reprint</a>
					<a href="aadharPANLink.php" class="sidenav-link">Aadhar PAN Link</a>
					<a href="passport.php" class="sidenav-link">Passport</a>
					<a href="pvc card.php" class="sidenav-link">PVC Card</a>
					<a href="bill payment.php" class="sidenav-link">Bill Payment</a>
					<a href="fssai.php" class="sidenav-link">FSSAI</a>
					<a href="insurance.php" class="sidenav-link">Insurance Form</a>
					<!-- <a href="#" class="sidenav-link">Payment Gateway</a> -->
				</div>

    		</div>
    		
    		<div class="col-12 padding-sidenav px-0 pr-md-0">
    			<div class="topnav">
    				<h2 class="formheader">PF Refund</h2>
					<input type="search" name="search" class="search" placeholder="Search...">
					<div class="user">
						<!-- <a href="" class="wallet mr-3">Wallet</a> -->
						<!-- <div>
							<a href="" class="fa fa-user-circle-o"></a>
							<ul class="btn btn-secondary dropdown-menu">
								<li><a href="" class="dropdown-item"></a></li>
								<li><a href="" class="dropdown-item"></a></li>
								<li><a href="" class="dropdown-item"></a></li>
							</ul>
						</div> -->
						<div class="btn-group">
							<button type="button" class="fa fa-user-circle-o dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Profile</a>
								<a class="dropdown-item" href="#">Wallet</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log Out</a>
							</div>
						</div>
					</div>
				</div>
    		</div>

    		<div class="col-12 padding-sidenav pr-md-0 main-index">
    			
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">PF Refund</h2>
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
		   		<form class="form-container mt-4 form-padding-internal"  action="backend/pfrefund_b.php" method = "post" enctype="multipart/form-data">
					  <div class="form-group">
					    <label class="required" for="aadhar">Applicant Aadhar No.</label>
					    <input type="number" class="form-control" name="aadhar" id="aadhar" placeholder="Enter aadhar" required>
					    <small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
					  </div>

					  <div class="form-group">
					    <label class="required" for="uan">UAN No. </label>
					    <input type="number" class="form-control" id="uan" placeholder="UAN number" min="0" name="uan" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="pan">PAN Card No. </label>
					    <input type="number" class="form-control" id="pan" placeholder="PAN number" min="0" name="pan" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="cname">Client Name</label>
					    <input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
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
					    <label class="required" for="fathername">Father's Name</label>
					    <input type="text" class="form-control" id="fathername" placeholder="Father's Name" name="fathername" required>
					  </div>

					 

					  <div class="form-group">
					    <label class="required" for="dob">Date Of Birth</label>
					    <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
					  </div>


					  <div class="form-group">
					    <label class="required" for="job">Job Leaving Date</label>
					    <input type="date" class="form-control" id="job" placeholder="Job Leaving Date" name="job" required>
					  </div>

					  

					  <div class="form-group">
					    <label class="required" for="request">Select Request Type</label>
					    <select name="request" id="request" class="form-control">
						  <option value="">Select</option>
						  <option value="option1">Full PF + Pension Withdrawl</option>
						  <option value="option2">75% Advance Required</option>
						  <option value="option3">Transfer PF amount to current company</option>
						  <option value="option4">Update KYC</option>
						   <option value="option4">Relieving	date update</option>
						</select>
					   <!--  <input type="text" class="form-control" id="natureofwork" placeholder="Please tell what you deals in..." name="natureofwork"> -->
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
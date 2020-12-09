<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sidenav</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<nav class="navbar navbar-expand-md navbar-dark bg-brand d-md-none d-flex">
        	
		<a href="index.html" class="nav-back-btn">
			<span class="fa fa-lg fa-arrow-left"></span>
    	</a>
		<div class="logo-container">
			<a href="#" class="nav-brand"> 
				<img class="navimg mx-auto" src="shared/images/1.png">
			</a>
		</div>

		<button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<!-- <li>
					<a href="#" class="nav-link">ITR / GST</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-gst" class="nav-link" data-toggle="collapse">GST<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-gst" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./gst.php" class="nav-link">View</a>
					</div>
				</li>
				<li class="accordian">
					<a href="#nav-itr" class="nav-link" data-toggle="collapse">ITR<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-itr" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./itr.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="./msme.html" class="nav-link">MSME Registration</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-msme-registration" class="nav-link" data-toggle="collapse">MSME Registration<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-msme-registration" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./msme.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="./votercard.html" class="nav-link">Voter Card</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-voter-card" class="nav-link" data-toggle="collapse">Voter Card<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-voter-card" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./votercard.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="./pfrefund.html" class="nav-link">PF Refund</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-pf-refund" class="nav-link" data-toggle="collapse">PF Refund<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-pf-refund" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./pfrefund.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">PAN Card NSDL</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-pan-card-nsdl" class="nav-link" data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-pan-card-nsdl" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./newPAN.php" class="nav-link">View New PAN</a>
						<a href="./form49A.php" class="nav-link">View Form 49A(To Edit)</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">PAN Card UTI</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-pan-card-uti" class="nav-link" data-toggle="collapse">PAN Card UTI<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-pan-card-uti" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./pan-card-uti.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="findyourPAN.html" class="nav-link">Find Your PAN</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-find-your-pan" class="nav-link" data-toggle="collapse">Find Your PAN<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-find-your-pan" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./findyourPAN.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="./aaharreprint.html" class="nav-link">Aadhar Reprint</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-aadhar-reprint" class="nav-link" data-toggle="collapse">Aadhar Reprint<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-aadhar-reprint" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./aadharreprint.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="aadharPANLink.html" class="nav-link">Aadhar PAN Link</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-aadhar-pan-link" class="nav-link" data-toggle="collapse">Aadhar PAN Link<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-aadhar-pan-link" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./aadharPANLink.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">Passport</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-passport" class="nav-link" data-toggle="collapse">Passport<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-passport" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./passport.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">PVC Card</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-pvc-card" class="nav-link" data-toggle="collapse">PVC Card<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-pvc-card" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./pvc-card.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">Bill Payment</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-bill-payment" class="nav-link" data-toggle="collapse">Bill Payment<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-bill-payment" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./billpayment.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="./fssai.html" class="nav-link">FSSAI</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-fssai" class="nav-link" data-toggle="collapse">FSSAI<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-fssai" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./fssai.php" class="nav-link">View</a>
					</div>
				</li>
				<!-- <li>
					<a href="#" class="nav-link">Insurance Form</a>
				</li> -->
				<li class="accordian">
					<a href="#nav-insurance-form" class="nav-link" data-toggle="collapse">Insurance form<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-insurance-form" class="accordian-content collapse">
						<a href="#" class="nav-link">Add</a>
						<a href="./insurance-form.php" class="nav-link">View</a>
					</div>
				</li>
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
    				<a href="#" class="nav-brand"> <img class="navimg" src="shared/images/1.png"></a>
					<!-- <a href="#" class="sidenav-link">ITR/ GST</a> -->
					<div class="accordian">
						<a href="#gst" class="sidenav-link"  data-toggle="collapse">GST<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="gst" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./gst.php" class="sidenav-link">View</a>
						</div>
					</div>
					<div class="accordian">
						<a href="#itr" class="sidenav-link"  data-toggle="collapse">ITR<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="itr" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./itr.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./msme.html" class="sidenav-link">MSME Registration</a> -->
					<div class="accordian">
						<a href="#msme-registration" class="sidenav-link"  data-toggle="collapse">MSME Registration<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="msme-registration" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./msme.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./votercard.html" class="sidenav-link">Voter Card</a> -->
					<div class="accordian">
						<a href="#voter-card" class="sidenav-link"  data-toggle="collapse">Voter Card<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="voter-card" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./votercard.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">PF Refund</a> -->
					<div class="accordian">
						<a href="#pf-refund" class="sidenav-link"  data-toggle="collapse">PF Refund<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="pf-refund" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./pfrefund.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">PAN Card NSDL</a> -->
					<div class="accordian">
						<a href="#pan-card-nsdl" class="sidenav-link"  data-toggle="collapse">PAN card NSDL<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="pan-card-nsdl" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./newPAN.php" class="sidenav-link">View New PAN</a>
							<a href="./form49A.php" class="sidenav-link">View Form 49(To Edit)</a>

						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">PAN Card UTI</a> -->
					<div class="accordian">
						<a href="#pan-card-uti" class="sidenav-link"  data-toggle="collapse">PAN Card UTI<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="pan-card-uti" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./pan-card-uti.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./findyourPAN.html" class="sidenav-link">Find Your PAN</a> -->
					<div class="accordian">
						<a href="#find-your-pan" class="sidenav-link"  data-toggle="collapse">Find Your PAN<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="find-your-pan" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./findyourPAN.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./aadharreprint.html" class="sidenav-link">Aadhar Reprint</a> -->
					<div class="accordian">
						<a href="#aadhar-reprint" class="sidenav-link"  data-toggle="collapse">Aadhar Reprint<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="aadhar-reprint" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./aadharreprint.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./aadharPANLink.html" class="sidenav-link">Aadhar PAN Link</a> -->
					<div class="accordian">
						<a href="#aadhar-pan-link" class="sidenav-link"  data-toggle="collapse">Aadhar PAN Link<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="aadhar-pan-link" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./aadharPANLink.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">Passport</a> -->
					<div class="accordian">
						<a href="#passport" class="sidenav-link"  data-toggle="collapse">Passport<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="passport" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./passport.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">PVC Card</a> -->
					<div class="accordian">
						<a href="#pvc-card" class="sidenav-link"  data-toggle="collapse">PVC Card<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="pvc-card" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./pvc-card.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">Bill Payment</a> -->
					<div class="accordian">
						<a href="#bill-payment" class="sidenav-link"  data-toggle="collapse">Bill Payment<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="bill-payment" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./billpayment.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="./fssai.html" class="sidenav-link">FSSAI</a> -->
					<div class="accordian">
						<a href="#fssai" class="sidenav-link"  data-toggle="collapse">FSSAI<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="fssai" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./fssai.php" class="sidenav-link">View</a>
						</div>
					</div>
					<!-- <a href="#" class="sidenav-link">Insurance Form</a> -->
					<div class="accordian">
						<a href="#insurance-form" class="sidenav-link"  data-toggle="collapse">Insurance Form<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="insurance-form" class="accordian-content collapse">
							<a href="#" class="sidenav-link">Add</a>
							<a href="./insurance-form.php" class="sidenav-link">View</a>
						</div>
					</div>
				</div>

    		</div>
    		
    		<!-- <div class="col-12 padding-sidenav px-0 pr-md-0">
    			<div class="topnav">
    				<h2 class="formheader">Aadhar PAN Link</h2>
					<input type="search" name="search" class="search" placeholder="Search...">
					<div class="user">
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
    		</div> -->

    		<!-- <div class="col-12 padding-sidenav pr-md-0 main-index">
    			
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">Aadhar PAN Link</h2>
    			</div>

		   		<form class="form-container mt-4 form-padding-internal">

		   			  <div class="form-group">
					    <label class="required" for="afname">Applicant Full Name</label>
					    <input type="text" class="form-control" id="afname" placeholder="Applicant Full Name" name="afname" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="mn">Mobile Number</label>
					    <input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
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
					    <label class="required" for="dob">Date Of Birth</label>
					    <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="pincode">Pincode</label>
					    <input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required>
					  </div>

					  <div class="form-group">
					    <label class="required" for="gender">Gender</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" checked>Male
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Female
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Other
							  </label>
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
    			
    		</div> -->
    		
    	</div>
			
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

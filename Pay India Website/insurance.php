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
					<a href="msme.php" class="nav-link active">MSME Registration</a>
				</li>
				<li>
					<a href="votercard.php" class="nav-link">Voter Card</a>
				</li>
				<li>
					<a href="pfrefund.php" class="nav-link">PF Refund</a>
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
					<a href="aadharreprint.php" class="nav-link">Aadhar Reprint</a>
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
					<a href="msme.php" class="sidenav-link active">MSME Registration</a>
					<a href="votercard.php" class="sidenav-link">Voter Card</a>
					<a href="pfrefund.php" class="sidenav-link">PF Refund</a>
					<div class="accordian">
						<a href="#panNsdl" class="sidenav-link"  data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="panNsdl" class="accordian-content collapse">
							<a href="newPan.php" class="sidenav-link">New PAN</a>
							<a href="form49A.php" class="sidenav-link">FORM 49A(To Edit)</a>
						</div>
					</div>
					<a href="index pan card uti.php\" class="sidenav-link">PAN Card UTI</a>
					<a href="findyourPAN.php" class="sidenav-link">Find Your PAN</a>
					<a href="aadharreprint.php" class="sidenav-link">Aadhar Reprint</a>
					<a href="aadharreprint.php" class="sidenav-link">Aadhar PAN Link</a>
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
    				<h2 class="formheader">MSME Registration</h2>
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
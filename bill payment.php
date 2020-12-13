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
    				<h2 class="formheader">Bill Payment</h2>
					<?php include("retailer_wallet.php"); ?>

    		<div class="col-12 padding-sidenav pr-md-0 main-index">
    			
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">Bill Payment</h2>
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
		   		<form class="form-container mt-4 form-padding-internal" action="backend/bill_payment_b.php" method = "post" enctype="multipart/form-data">
					<div class="form-group">
					    <label class="required" for="ptype">Payment Type</label>

					    <select name="ptype" id="ptype" class="form-control">
						  <option value="">Normal Bill Payments</option>
						  <option value="option1">Partial Bill Payments</option>
						  <option value="option2">Bills above 25000 INR</option>
						</select>
					   <!--  <input type="text" class="form-control" id="category" placeholder="Choose Category" name="category"> -->
					  </div>
					  <div class="form-group">
					    <label class="required" for="cano">CA Number</label>
					    <input type="number" class="form-control" name="cano" id="cano" aria-describedby="emailHelp" placeholder="Enter CA Number" required>
					    <small id="emailHelp" class="form-text text-muted">We'll never share your CA number with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label class="required" for="operatorcircle">Select Operator Circle</label>
					     <select name="operatorcircle" id="operatorcircle" class="form-control" required>
							<option value="">Select</option>
							<option value="option1">Andhra Prade</option>
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
					    <label class="required" for="amount">Amount</label>
					    <input type="number" class="form-control" name="amount" id="amount" aria-describedby="emailHelp" placeholder="Enter Amount" required>
					  
					  </div>
					  <div class="form-group">
					    <label class="required" for="operatorcircle">Select Operator Circle</label>
					     <select name="operatorcircle1" id="operatorcircle" class="form-control" required>
							<option value="">Select</option>
							<option value="Eastern Power distribution Co Ltd">Eastern Power distribution Co Ltd</option>
							<option value="Southern Power distribution Co Ltd ">Southern Power distribution Co Ltd </option>
							<option value="Assam Power(non) ">Assam Power(APDCL NON-RAPDR)</option>
							<option value="Assam Power ">Assam Power(APDCL RAPDR)</option>
							<option value="North Bihar Power Distribution Company  ">North Bihar Power Distribution Company </option>
							<option value="South Bihar Power Distribution Company  ">South Bihar Power Distribution Company </option>
							<option value="Chattisgarh State Power Distribution Co. Ltd.">Chattisgarh State Power Distribution Co. Ltd.</option>
							<option value="DNH Power Distribution Co. Ltd.">DNH Power Distribution Co. Ltd.</option>
							<option value="Daman and Diu Electricity">Daman and Diu Electricity</option>
							<option value="Goa Electricity Department">Goa Electricity Department</option>
							<option value="Dakshin Gujarat Vij Company Limited">Dakshin Gujarat Vij Company Limited</option>
							<option value="Madhya Gujarat Vij Company Limited">Madhya Gujarat Vij Company Limited</option>
							<option value="Paschim Gujarat Vij Company Limited">Paschim Gujarat Vij Company Limited</option>
							<option value="Uttar Gujarat Vij Company Limited">Uttar Gujarat Vij Company Limited</option>										
							<option value="Torrent Power Ahmedabad">Torrent Power Ahmedabad</option>
							<option value="Torrent Power Surat">Torrent Power Surat</option>
							<option value="Dakshan Haryana Bijli Vitran Nigam">Dakshan Haryana Bijli Vitran Nigam</option>
							<option value="Uttar Haryana Bijli Vitran Nigam">Uttar Haryana Bijli Vitran Nigam</option>
							<option value="Himachal Pradesh State Electricity Board">Himachal Pradesh State Electricity Board</option>
							<option value="Jharkhand Bijli Vitran Nigam">Jharkhand Bijli Vitran Nigam</option>
							<option value="jamshedpur Utilities and Services Company Ltd">jamshedpur Utilities and Services Company Ltd.</option>
							<option value="Bangalore Electricity">Bangalore Electricity</option>
							<option value="Chamundeshwari Electricity Supply">Chamundeshwari Electricity Supply</option>
							<option value="Gulbarg Electricity Supply Company Ltd">Gulbarg Electricity Supply Company Ltd.</option>
							<option value="Hubli Electricity">Hubli Electricity</option>
							<option value="Mangalore Electricity Supply Company Ltd">Mangalore Electricity Supply Company Ltd.</option>
							<option value="Kerala State Electricity Board">Kerala State Electricity Board</option>
							<option value="MP Madhya Kshetra Vidyut Vitran-RURAL">MP Madhya Kshetra Vidyut Vitran-RURAL </option>
							<option value="Madhya Pradesh Madhya Kshetra Vidyut Vitran Company-Bhopal">Madhya Pradesh Madhya Kshetra Vidyut Vitran Company-Bhopal </option>
							<option value="Madhya Pradesh Paschim Kshetra Vidyut Vitran Company-Bhopal">Madhya Pradesh Paschim Kshetra Vidyut Vitran Company-NONRAPDR </option>
							<option value="Madhya Pradesh Poorv Kshetra Vidyut Vitran Company-Bhopal">Madhya Pradesh Poorv Kshetra Vidyut Vitran Company-Jabalpur </option>
							<option value="ADANI Electricity">ADANI Electricity</option>
							<option value="BEST Mumbai">BEST Mumbai</option>

							<option value="Maharashtra State Electricity Distribution Company  Ltd">Maharashtra State Electricity Distribution Company  Ltd</option>
							<option value="SNDL nagpur">SNDL nagpur</option>
							<option value="TATA Power-Mumbai">TATA Power-Mumbai</option>
							<option value="TATA Power-Bhiwandi">TATA Power-Bhiwandi</option>
							<option value="Meghalaya Power Dist Corp Ltd">Meghalaya Power Dist Corp Ltd</option>
							<option value="Power and Electricity Department Mizoram">Power and Electricity Department Mizoram</option>
							<option value="Department Of Power Nagaland">Department Of Power Nagaland</option>
							<option value="BSES Rajdhani Power Ltd">BSES Rajdhani Power Ltd</option>
							<option value="BSES Yamuna Power Ltd">BSES Yamuna Power Ltd</option>
							<option value="TATA Power-delhi">TATA Power-Delhi</option>
							<option value="CESU-Odisha">CESU-Odisha</option>
							<option value="NESCO-Odisha">NESCO-Odisha</option>
							<option value="SOUTHCO-Odisha">SOUTHCO-Odisha</option>
							<option value="WESCO-Odisha">WESCO-Odisha</option>
							<option value="Punjab State Power Corporation Ltd">Punjab State Power Corporation Ltd</option>
							<option value="Ajmer Vidyut Vitran Nigam">Ajmer Vidyut Vitran Nigam </option>
							<option value="Bharatpur Electricity Services Ltd">Bharatpur Electricity Services Ltd </option>
							<option value="Bikaner Electricity Supply Ltd">Bikaner Electricity Supply Ltd </option>
							<option value="jaipur Vidyut Vitran Nigam">jaipur Vidyut Vitran Nigam </option>
							<option value="Jodhpur Vidyut Vitran Nigam">Jodhpur Vidyut Vitran Nigam </option>
							<option value="Kota Electricity Distribution Ltd">Kota Electricity Distribution Ltd </option>
							<option value="TP AJmer Distribution Ltd">TP AJmer Distribution Ltd </option>
							<option value="Sikkim Power">Sikkim Power</option>
							<option value="Tamil Nadu Electricity Board">Tamil Nadu Electricity Board</option>
							<option value="Tripura Electricity">Tripura Electricity</option>
							<option value="Kanpur Electricity Supply Company Ltd">Kanpur Electricity Supply Company Ltd</option>
							<option value="Noida Power Company">Noida Power Company</option>
							<option value="Torrent Power Agra">Torrent Power Agra</option>
							<option value="UP Power Corp-RURAL">UP Power Corp-RURAL</option>
							<option value="UP Power Corp-URBAN">UP Power Corp-URBAN</option>
							<option value="Uttarakhand Power Corporation Ltd">Uttarakhand Power Corporation Ltd</option>
							<option value="Calcutta Electricity Supply Corporation">Calcutta Electricity Supply Corporation</option>
							<option value="Durgapur Projects Ltd">Durgapur Projects Ltd</option>
							<option value="West Bengal State Electricity Distribution">West Bengal State Electricity Distribution</option>
							
						</select>
						<div class="form-group">
							<label class="required" for="duedate">Due Date</label>
							<input type="date" class="form-control" id="duedate" placeholder=" Date" name="duedate" required>
						  </div>
						  <div class="form-group">
							<label class="required" for="cname">Client Name</label>
							<input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
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

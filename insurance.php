<?php include("./backend/head_check_retailer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pay India</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
	<link rel="stylesheet" href="reveal.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">Insurance</h2>
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
						} ?>
					</h3>

				</div>
				<form class="form-container mt-4 form-padding-internal" action="backend/insurance_b.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="required" for="fname">First Name of The Vehicle Owner</label>
						<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
					</div>
					<div class="form-group">
						<label class="required" for="fname">Last Name of The Vehicle Owner</label>
						<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
					</div>
					<div class="form-group">
						<label class="required" for="fname">Communication Address of The Owner</label>
						<input type="text" class="form-control" id="address" placeholder="Enter Communication Address of The Owner" name="address" required>
					</div>
					<div class="form-group">
						<label class="required" for="fname">Pincode</label>
						<input type="number" class="form-control" id="pin" placeholder="Enter Pin Code" name="pincode" required>
					</div>
					<div class="form-group">
						<label class="required" for="state">State</label>
						<select name="state" id="state" class="form-control" required>
							<option value="">Select State</option>
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
					</div>
					<div class="form-group">
						<label class="required" for="district">District</label>
						<select name="district" id="district" class="form-control" required>
							<option value="">Select District</option>
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
							<option value="option4">option4</option>
						</select>
					</div>
					<div class="form-group">
						<label class="required" for="city">City</label>
						<input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
					</div>
					<div class="form-group">
						<label class="required" for="fname">Nominee First Name</label>
						<input type="text" class="form-control" id="fname" placeholder="Enter Nominee First Name" name="nfname" required>
					</div>
					<div class="form-group">
						<label class="required" for="fname">Nominee Last Name</label>
						<input type="text" class="form-control" id="lname" placeholder="Enter Nominee Last Name" name="nlname" required>
					</div>
					<div class="form-group">
						<label class="required" for="relation">Relation With Nominee</label>
						<input type="text" class="form-control" id="relation" placeholder="Relation With Nominee" name="relation" required>
					</div>
					<div class="form-group">
						<label class="required" for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
					</div>
					<div class="form-group">
						<label class="required" for="phone">Phone</label>
						<input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
					</div>

					<div class="form-group">
						<label class="required" for="type">Type Of Vehicle</label>
						<input type="text" class="form-control" id="type" placeholder="Enter Type Of Vehicle" name="typev" required>
					</div>
					<div class="form-group">
						<label class="required" for="type">Type Of Use</label>
						<input type="text" class="form-control" id="type" placeholder="Enter Type Of Use" name="typeu" required>
					</div>
					<div class="form-group">
						<label class="required" for="registeration">Reg. Number of Vehicle</label>
						<input type="text" class="form-control" id="reg" placeholder="Enter Reg. Number of Vehicle" name="registeration" required>
					</div>
					<div class="form-group">
						<label class="required" for="year">Year Of Manufacture</label>
						<input type="number" class="form-control" id="year" placeholder="Enter Year of Manufacture" name="year" required>
					</div>
					<div class="form-group">
						<label class="required" for="date">Date Of Manufacture</label>
						<input type="date" class="form-control" id="date" placeholder="Enter Date of Manufacture" name="date" required>
					</div>
					<div class="form-group">
						<label class="required" for="name">Name of The Manufacturer</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Name of the Manufacturer" name="name" required>
					</div>
					<div class="form-group">
						<label class="required" for="model">Model</label>
						<input type="text" class="form-control" id="model" placeholder="Enter Name of the Vehicle with Model" name="model" required>
					</div>
					<div class="form-group">
						<label class="required" for="engine">Enginer Number</label>
						<input type="text" class="form-control" id="engine" placeholder="Enter Engine Number" name="enginno" required>
					</div>
					<div class="form-group">
						<label class="required" for="chassis">Chassis Number</label>
						<input type="text" class="form-control" id="chassis" placeholder="Enter Chassis Number" name="chassisno" required>
					</div>
					<div class="form-group">
						<label class="required" for="loan">Is There any Loan on the Vehicle</label><br>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="loan" id="optradio-yes" value="Yes">Yes
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="loan" id="optradio-no" value="No">No
							</label>
						</div>
					</div>
					<div class="form-group" id="bank-name">
						<label class="required" for="loan">Name of Bank /NBFC</label>
						<input type="text" class="form-control" id="bankName" placeholder="Enter Name of Bank /NBFC" name="bankname" >
					</div>
					<div class="form-group">
						<label class="required" for="engineCap">Engine Capacity</label>
						<input type="number" class="form-control" id="engineCap" placeholder="Enter Engine Capacity" name="engineCap" required>
					</div><br>

					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="pai" value="Personal Accidental Insurance of Rs. 15 Lac">Personal Accidental Insurance of Rs. 15 Lac
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="lil" value="Limited Insured Liability To Rs 6000">Limited Insured Liability To Rs 6000
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="otherdocument">Adhaar Card of Owner/DL/Passport/Voter Card</label>
						<input class="form-control" type="file" id="adhaar" name="adhaar">
					</div>
					<div class="form-group">
						<label for="otherdocument">Reg. Certificate/Previous Policy of this Vehicle</label>
						<input class="form-control" type="file" id="adhaar" name="registry">
					</div>

					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="conf1" value="true" required>I HEREBY CONFIRM THAT I HAVE VERIFIED THE ABOVE DETAILS AND CONFIRM THEN SAME TO BE TRUE AND ACCURATE IN ALL ASPECTS. IF AT ANY TIME IT IS FOUND THAT THE ABOVE DETAILS ARE INCORRECT/INVALID, AND INSURANCE COMPANY DENIES THE CLAIM DUE TO SUCH INCORRECT/INVALID DETAILS. THE FINANCE SUVIDHA KENDRA SHALL HAVE NO RESPONSIBILITY OF THE SAME.

							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="conf2" value="true" required>I ALSO HEREBY AGREE THAT I SHALL INFORM THE COMPANY ABOUT ANY INCORRECT DETAILS BEEN MENTIONED IN THE POLICY ISSUED, WITHIN 24 HOURS OF ISSUANCE, IN CASE I FAIL TO INFORM WITHIN 24 HRS THE FINANCE SUVIDHA KENDRA SHALL HAVE NO RESPONSIBILITY OF THE SAME.

							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="comments">Any Comments</label>
						<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
					</div>
					<div class="form-group">
						<label for="order">Your Order</label>
						<table>
							<tr>
								<td style="border:1px solid; padding:5px;">
									Third Party Premium Cover
								</td>
								<td style="border:1px solid; padding:5px;">
									887.36
								</td>
							</tr>
							<tr>
								<td style="border:1px solid; padding:5px;">
									Personal Accidental Insurance
								</td>
								<td style="border:1px solid; padding:5px;">
									391
								</td>
							</tr>
							<tr>
								<td style="border:1px solid; padding:5px;">
									Total Amount
								</td>
								<td style="border:1px solid; padding:5px;">
									1278.36
								</td>
							</tr>
							<tr>
								<td style="border:1px solid; padding:5px;">
									Commission
								</td>
								<td style="border:1px solid; padding:5px;">
									38
								</td>
							</tr>
							<tr>
								<td style="border:1px solid; padding:5px;">
									Net Amount Payable
								</td>
								<td style="border:1px solid; padding:5px;">
									1240.36
								</td>
							</tr>
						</table>
					</div>
					<button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
				</form>



			</div>

		</div>

	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script>
		$('#optradio-yes').prop('checked', true);

		$('[name="loan"]').click((e) => {
			let id = e.target.id;

			if (id === 'optradio-yes') {
				$('#bank-name').removeClass('d-none');
			}

			if (id === 'optradio-no') {
				$('#bank-name').addClass('d-none');
			}
		});
	</script>
</body>

</html>
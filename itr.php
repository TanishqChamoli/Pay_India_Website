<?php include("./backend/head_check_retailer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ITR Application Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
	<link rel="stylesheet" type="text/css" href="reveal.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">ITR</h2>
			<?php include("retailer_wallet.php"); ?>
			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">ITR</h2>
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
				<form class="form-container mt-4 form-padding-internal" action="backend/itr_b.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="required" for="a-year">Assesment Year</label>
						<select name="a-year" id="a-year" class="form-control" required>
							<option value="">Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required">Income Details of Customer</label><br>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" id="incomeDetails" class="form-check-input" name="incomedetails" value="I will provide income details">I will provide income details
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" id="no-form" class="form-check-input" value="Call my customer" name="incomedetails">Call my customer
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" id="no-form" class="form-check-input" value="Form 16 / Income details attached" name="incomedetails">Form 16 / Income details attached
							</label>
						</div>
					</div>
					<div id="add-income-details">
						<div class="form-group reveal-if-active">
							<label class="required" for="a-s">Annual Salary / Pension Amount</label>
							<input type="number" class="form-control" id="a-s" placeholder="Enter Amount" name="a-s">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="note">Name of the Employer</label>
							<input type="text" class="form-control" id="note" placeholder="Enter Name" name="note">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="salary">Salary / Pension Description</label>
							<input type="text" class="form-control" id="salary" placeholder="Salary / Pension Description" name="salary">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="abia">Annual Business Income Amount</label>
							<input type="number" class="form-control" id="abia" placeholder="Ente Amount" name="abia">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="business-name">Name of the Business</label>
							<input type="text" class="form-control" id="business-name" placeholder="Business Name" name="business-name">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="bid">Busness Income Description</label>
							<input type="text" class="form-control" id="bid" placeholder="Busness Income Description" name="bid">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="aria">Annual Rental Income Amount</label>
							<input type="number" class="form-control" id="aria" placeholder="Enter Amount" name="aria">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="rid">Rental Income Description</label>
							<input type="text" class="form-control" id="rid" placeholder="Rental Income Description" name="rid">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="aosa">Annual Other Sources Amount</label>
							<input type="number" class="form-control" id="aosa" placeholder="Enter Amount" name="aosa">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="osd">Other Sources Description</label>
							<input type="text" class="form-control" id="osd" placeholder="Other Sources Description" name="osd">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="aaia">Annual Agricultural Income Amount</label>
							<input type="number" class="form-control" id="aaia" placeholder="Enter Amount" name="aaia">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="aid">Agricultural Income Description</label>
							<input type="text" class="form-control" id="aid" placeholder="Client Name" name="aid">
						</div>

						<div class="form-col-span-2 text-center mt-1 mb-3 reveal-if-active">
							<h3 class="font-weight-bold">Annual Deductions</h3>
						</div>


						<div class="form-group reveal-if-active">
							<label class="required" for="lip">Life Insurance Premium</label>
							<input type="number" class="form-control" id="lip" placeholder="Enter Life Insurance Premium" name="lip">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="csf">Children School Fees</label>
							<input type="number" class="form-control" id="csf" placeholder="Children School Fees" name="csf">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="ppf">PPF Amount</label>
							<input type="number" class="form-control" id="ppf" placeholder="Enter PPF Amount" name="ppf">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="hip">Health Insurance Premium</label>
							<input type="number" class="form-control" id="hip" placeholder="Health Insurance Premium" name="hip">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="odus">Other Deduction Under Section 80C</label>
							<input type="number" class="form-control" id="odus" placeholder="Other Deduction Under Section 80C" name="odus">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="gdoodus">Give Details Of Other Deduction Under Section 80C</label>
							<input type="text" class="form-control" id="gdoodus" placeholder="Give Details Of Other Deduction Under Section 80C" name="gdoodus">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="oa">Other Amount</label>
							<input type="number" class="form-control" id="oa" placeholder="Other Amount" name="oa">
						</div>
						<div class="form-group reveal-if-active">
							<label class="required" for="gdooa">Give Details Of Other Amount</label>
							<input type="text" class="form-control" id="gdooa" placeholder="Give Details Of Other Amount" name="gdooa">
						</div>
					</div>

					<div class="form-group">
						<label class="required" for="e-verify">E-Verify Return</label>
						<select name="e-verify" id="e-verify" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<p class="form-text text-muted">Get your Return verified through AADHAR OTP. Please note that this facility is only available to customers, whose aadhar is linked with mobile.</p>
						<p class="form-text text-muted">NOTE : The income tax return needs to be verified within 120 days. Please send the signed copy to CPC, Bengaluru through Government Ordinary Post / Speed within 120 days. Otherwise, the return become invalid.</p>
					</div>

					<div class="form-col-span-2 text-center mt-1 mb-3">
						<h3 class="font-weight-bold">Balance Sheet</h3>
					</div>


					<div class="form-group">
						<label class="required" for="balancereturn">Balance Return</label>
						<select name="balancereturn" id="balancereturn" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<p class="form-text text-muted">NOTE : Please note that the Rs. 500 charges are minimum. Charges may increase depending on work.</p>
					</div>

					<div class="form-col-span-2 text-center mt-1 mb-3">
						<h3 class="font-weight-bold">Capital Gain</h3>
					</div>


					<div class="form-group">
						<label class="required" for="capitalgain">Capital Gain</label>
						<select name="capitalgain" id="capitalgain" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<p class="form-text text-muted">NOTE : Please note that the Rs. 500 charges are minimum. Charges may increase depending on work.</p>
					</div>

					<div class="form-group">
						<label class="required" for="tax-payable">Tax Payable * Rs.1</label>
						<input type="number" class="form-control" id="tax-payable" placeholder="Enter Amount" name="tax-payable" required>
					</div>

					<div class="form-group">
						<label for="otherdocument">Any Document</label>
						<input class="form-control" type="file" id="otherdocument" name="otherdocument">
					</div>

					<div class="form-group">
						<label for="comments">Comments</label>
						<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary formbtn mx-auto submit mb-3 mt-3">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script src="itr.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script type="text/javascript" defer>
		$('[name="incomedetails"]').click((e) => {
			let id = e.target.id;
			if (id === 'incomeDetails') {
				$('#add-income-details').removeClass('d-none');
			}
			if (id === 'no-form') {
				$('#add-income-details').addClass('d-none');
			}
		});
	</script>

</body>

</html>
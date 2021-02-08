<?php include("./backend/head_check_retailer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Passport</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">Passport</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">Passport</h2>
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
				<form class="form-container mt-4 form-padding-internal" action="backend/passport_b.php" method="post" enctype="multipart/form-data">
					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Services Required</h3>
					</div>
					<div class="form-group">
						<label class="required" for="apply">Applying For</label>
						<select name="apply" id="apply" class="form-control" required>
							<option value="">Select</option>
							<option value="New/Fresh Passport">New/Fresh Passport</option>
							<option value="Reissue Passport">Reissue Passport</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="type-of-application">Type of Application</label>
						<select name="type-of-application" id="type-of-application" class="form-control" required>
							<option value="">Select</option>
							<option value="Normal">Normal</option>
							<option value="Tatkal">Tatkal</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="passporttype">Type of Passport Booklet</label>
						<select name="passporttype" id="passporttype" class="form-control" required>
							<option value="">Select</option>
							<option value="36 Pages">36 Pages</option>
							<option value="60 Pages">60 Pages</option>
						</select>
					</div>



					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Applicant Details</h3>
					</div>
					<div class="form-group">
						<label class="required" for="afname">Applicant First Name</label>
						<input type="text" class="form-control" id="afname" placeholder="Applicant First Name" name="afname" required>
					</div>
					<div class="form-group">
						<label class="required" for="amname">Applicant Middle Name</label>
						<input type="text" class="form-control" id="amname" placeholder="Applicant Middle Name" name="amname" required>
					</div>
					<div class="form-group">
						<label class="required" for="asname">Applicant Surname</label>
						<input type="text" class="form-control" id="asname" placeholder="Applicant Surname" name="asname" required>
					</div>
					<div class="form-group">
						<label class="required" for="aadhar">Applicant Aadhar No.</label>
						<input type="number" class="form-control" name="aadhar" id="aadhar" placeholder="Enter aadhar" required>
						<small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
					</div>
					<div class="form-group">
						<label class="required" for="maritalstatus">Marital Status</label>
						<select name="maritalstatus" id="maritalstatus" class="form-control" required>
							<option value="">Select</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="Widow/Widower">Widow/Widower</option>
							<option value="Separated">Separated</option>
						</select>
					</div>
					<div class="form-group">
						<label class="required" for="dob">Date Of Birth</label>
						<input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
					</div>

					<div class="form-group">
						<label class="required" for="birthcountry">Is your place of birth out of India</label>
						<select name="birthcountry" id="birthcountry" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="birthplace">Birth Village or Town or City</label>
						<input type="text" class="form-control" id="birthplace" placeholder="Birh Place" name="birthplace" required>
					</div>

					<!-- <div class="form-group">
					    <label class="required" for="mothername">Mother's Name</label>
					    <input type="text" class="form-control" id="mothername" placeholder="Mother's Name" name="mothername" required>
					  </div>

					   <div class="form-group">
					    <label class="required" for="applicantaddress">Applicant's Address</label>
					    <input type="text" class="form-control" id="applicantaddress" placeholder="Enter Address" name="applicantaddress" required>
					  </div> -->

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
						<label class="required" for="citizenship">Citizenship of India by</label>
						<select name="citizenship" id="citizenship" class="form-control" required>
							<option value="">Select</option>
							<option value="Birth">Birth</option>
							<option value="Descent">Descent</option>
							<option value="Registration / Naturalization">Registration / Naturalization</option>
						</select>
					</div>



					<!-- <div class="form-group">
					    <label class="required" for="dob">Date Of Birth</label>
					    <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
					  </div> -->

					<div class="form-group">
						<label for="pan">PAN (if available)</label>
						<input type="number" class="form-control" id="pan" placeholder="PAN Card number" name="pan">
					</div>
					<div class="form-group">
						<label for="voter-id">Voter ID (if available)</label>
						<input type="number" class="form-control" id="voter-id" placeholder="Voter ID Card number" name="voter-id">
					</div>

					<div class="form-group">
						<label class="required" for="education-qualification">Education Qualification</label>
						<select name="education-qualification" id="education-qualification" class="form-control" required>
							<option value="">Select</option>
							<option value="7th pass or less">7th pass or less</option>
							<option value="Between 8th and 9th Standard">Between 8th and 9th Standard</option>
							<option value="10th pass or above">10th pass or above</option>
							<option value="Graduate or above">Graduate or above</option>
						</select>
						<!-- <input type="text" class="form-control" id="district" placeholder="District" name="district" required> -->
					</div>

					<div class="form-group">
						<label class="required" for="sel_emp_type">Employment Type</label>

						<select required="true" class="form-control" id="sel_emp_type" data-toggle="tooltip" data-placement="top" data-html="true" name="sel_emp_type" onchange="flip_emptype();">
							<option value="">Select Employment Type</option>
							<option value="Government">Government</option>
							<option value="Homemaker">Homemaker</option>
							<option value="Not employed">Not employed</option>
							<option value="Others">Others</option>
							<option value="Owners, Partners &amp; Directors of companies which are members of CII, FICCI &amp; ASSOCHAM">Owners, Partners &amp; Directors of companies which are members of CII, FICCI &amp; ASSOCHAM </option>
							<option value="Private">Private</option>
							<option value="PSU">PSU</option>
							<option value="Retired Government Servant">Retired Government Servant</option>
							<option value="Retired- Private Service">Retired- Private Service</option>
							<option value="Self Employed">Self Employed</option>
							<option value="Statutory Body">Statutory Body</option>
							<option value="Student">Student</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="govt-servant">Is or Spouse/Parent, a govt servant</label>
						<select name="govt-servant" id="govt-servant" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="non-ncr">Are you eligible for Non-NCR category</label>
						<select name="non-ncr" id="non-ncr" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label for="mark">Visible Distinguishing Mark (If any?)</label>
						<input type="text" class="form-control" id="mark" placeholder="Visible Distinguishing Mark" name="mark">
					</div>

					<div class="form-group">
						<label class="required" for="other-names">Are you known by any other names ?</label>
						<select name="other-names" id="other-names" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="name-changed">Have you ever changed your name ?</label>
						<select name="name-changed" id="name-changed" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Family Details (Father/Mother/Legal Guardian details; at least one is mandatory.) </h3>
					</div>
					<div class="form-group">
						<label for="f-f-name">Father's First Name</label>
						<input type="text" class="form-control" id="f-f-name" placeholder="Father's First Name" name="f-f-name" required>
					</div>
					<div class="form-group">
						<label for="f-m-name">Father's Middle Name</label>
						<input type="text" class="form-control" id="f-m-name" placeholder="Father's Middle Name" name="f-m-name" required>
					</div>
					<div class="form-group">
						<label for="f-s-name">Surname</label>
						<input type="text" class="form-control" id="f-s-name" placeholder="Applicant Surname" name="f-s-name" required>
					</div>

					<div class="form-group">
						<label for="m-f-name">Mother's First Name</label>
						<input type="text" class="form-control" id="m-f-name" placeholder="Mother's First Name" name="m-f-name">
					</div>
					<div class="form-group">
						<label for="m-m-name">Mother's Middle Name</label>
						<input type="text" class="form-control" id="m-m-name" placeholder="Mother's Middle Name" name="m-m-name">
					</div>
					<div class="form-group">
						<label for="m-s-name">Surname</label>
						<input type="text" class="form-control" id="m-s-name" placeholder="Applicant Surname" name="m-s-name">
					</div>

					<div class="form-group">
						<label for="l-g-f-name">Legal Guardian's First Name </label>
						<input type="text" class="form-control" id="l-g-f-name" placeholder="Legal Guardian's First Name " name="l-g-f-name">
					</div>
					<div class="form-group">
						<label for="l-g-s-mname">Middle Name</label>
						<input type="text" class="form-control" id="l-g-s-mname" placeholder="Applicant Middle Name" name="l-g-m-name">
					</div>
					<div class="form-group">
						<label for="l-g-s-name">Surname</label>
						<input type="text" class="form-control" id="l-g-s-name" placeholder="Surname" name="l-g-s-name">
					</div>


					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold"> Present Residential Address Details (where applicant presently resides)</h3>
					</div>



					<div class="form-group">
						<label class="required" for="p-address">Is your present address out of India?</label>
						<select name="p-address" id="p-address" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label for="h-no.">House No. and Street No.</label>
						<input type="text" class="form-control" id="h-no." placeholder="Surname" name="h-no.">
					</div>
					<div class="form-group">
						<label class="required" for="state/province">State / Province</label>
						<select name="state/province" id="state/province" class="form-control" required>
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
						<label class="required" for="present-district">District</label>
						<select name="present-district" id="present-district" class="form-control" required>
							<option value="">Select</option>
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
							<option value="option4">option4</option>
						</select>
						<!-- <input type="text" class="form-control" id="district" placeholder="District" name="district" required> -->
					</div>

					<div class="form-group">
						<label for="pin">PIN</label>
						<input type="number" class="form-control" id="pin" placeholder="PIN" name="pin">
					</div>

					<div class="form-group">
						<label class="required" for="police-station">Police Station</label>
						<select name="police-station" id="police-station" class="form-control" required>
							<option value="">Select</option>
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
							<option value="option4">option4</option>
						</select>
						<!-- <input type="text" class="form-control" id="district" placeholder="District" name="district" required> -->
					</div>

					<div class="form-group">
						<label class="required" for="mn">Mobile Number</label>
						<input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
					</div>

					<div class="form-group">
						<label class="required" for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Client Name" name="email" required>
					</div>

					<div class="form-group">
						<label class="required" for="address">Do you have a Permanent Address? </label>
						<select name="address" id="address" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>


					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Emergency Contact Details</h3>
					</div>

					<div class="form-group">
						<label class="required" for="e-name">Applicant Full Name</label>
						<input type="text" class="form-control" id="e-name" placeholder="Applicant Full Name" name="e-name" required>
					</div>

					<div class="form-group">
						<label class="required" for="e-mn">Mobile Number</label>
						<input type="number" class="form-control" id="e-mn" placeholder="Mobile number" name="e-mn" required>
					</div>

					<div class="form-group">
						<label class="required" for="e-email">Email</label>
						<input type="email" class="form-control" id="e-email" placeholder="Client Name" name="e-email" required>
					</div>


					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Previous Passport / Application Details</h3>
					</div>

					<div class="form-group">
						<label class="required" for="certificate">Have you ever held/hold any Identity Certificate?</label>
						<select name="certificate" id="certificate" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="passport-detail">Detail of Previous / Current Diplomatic/Official Passport </label>
						<select name="passport-detail" id="passport-detail" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Details not available / Never Hold Diplomatic / Official Passport</option>
							<option value="No">No</option>
						</select>
					</div>


					<div class="form-group">
						<label class="required" for="ap-for-passport">Have you ever applied for passport, but not issued? </label>
						<select name="ap-for-passport" id="ap-for-passport" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>


					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Other Details</h3>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-1"> 1) Provide the following details if there are any criminal proceedings pending against the applicant. Are any proceedings in respect of an offence alleged to have been committed by you pending before a criminal court in India? </label>
						<select name="o-d-1" id="o-d-1" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-2">Has any warrant or summons for your appearance been issued & pending before a court under any law for the time being in force? </label>
						<select name="o-d-2" id="o-d-2" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-3">Has a warrant for your arrest been issued by a court under any law for the time being in force? </label>
						<select name="o-d-3" id="o-d-3" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-4"> Has an order prohibiting your departure from India been made by any court? </label>
						<select name="o-d-4" id="o-d-4" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-5"> 2) Provide the following details if the applicant has been convicted by a court in India. Have you at, any time during the period of five years immediately preceding the date of this application been convicted by a court in India for offence involving moral turpitude and sentenced in respect thereof to imprisonment for not less than two years? </label>
						<select name="o-d-5" id="o-d-5" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-6"> 3) Provide the following details if the applicant has been refused/denied passport.
							Have you ever been refused/denied passport? </label>
						<select name="o-d-6" id="o-d-6" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-7">Has your passport ever been impounded? </label>
						<select name="o-d-7" id="o-d-7" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-8">Has your passport ever been revoked? </label>
						<select name="o-d-8" id="o-d-8" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-9"> 4) Provide the following details if applicant has applied for or been granted foreign citizenship. Have you ever been granted citizenship by any other country? </label>
						<select name="o-d-9" id="o-d-9" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-10">Have you ever held the passport of any other country at any time? </label>
						<select name="o-d-10" id="o-d-10" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>


					<div class="form-group">
						<label class="required" for="o-d-11">Have you ever surrendered your Indian passport?</label>
						<select name="o-d-11" id="o-d-11" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-12">Have you ever applied for renunciation of Indian citizenship?</label>
						<select name="o-d-12" id="o-d-12" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-13">5) Provide the following details if applicant has returned to India on Emergency Certificate. Have you ever returned to India on Emergency Certificate (EC)? </label>
						<select name="o-d-13" id="o-d-13" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-14">Have you ever been deported from any country?</label>
						<select name="o-d-14" id="o-d-14" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="o-d-15">Have you ever been repatriated from any country back to India? </label>
						<select name="o-d-15" id="o-d-15" class="form-control" required>
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-col-span-2 text-center mt-3">
						<h3 class="font-weight-bold">Documents Submitted as Proof</h3>
					</div>


					<div class="form-group">
						<label class="required" for="proof-of-birth">Proof of Birth</label>
						<select name="proof-of-birth" id="proof-of-birth" class="form-control" required>
							<option value="">Select</option>
							<option value="Pan Card">Pan Card</option>
							<option value="Aadhar Card">Aadhar Card</option>
							<option value="Driving Licence">Driving Licence</option>
							<option value="Voter ID">Voter ID</option>
							<option value="Birth Certificate">Birth Certificate</option>
							<option value="Transfer/School Leaving Certificate">Transfer/School Leaving Certificate</option>
							<option value="Matriculation/10th/12th Certificate">Matriculation/10th/12th Certificate</option>
							<option value="Service Record/Pay Pension Order">Service Record/Pay Pension Order</option>
							<option value="Policy Bond">Policy Bond</option>
							<option value="Orphan Declaration">Orphan Declaration</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="present-residential-proof">Proof of Present Residential Address</label>
						<select name="proof-present-residential-proof-birth" id="proof-present-residential-proof-birth" class="form-control" required>
							<option value="">Select</option>
							<option value="Aadhaar Card">Aadhaar Card</option>
							<option value="Voter ID">Voter ID</option>
							<option value="Electricity Bill">Electricity Bill</option>
							<option value="Telephone Bill">Telephone Bill</option>
							<option value="Water Bill">Water Bill</option>
							<option value="Spause Passport">Spause Passport</option>
							<option value="Parents Passport">Parents Passport</option>
							<option value="Rent Agreement">Rent Agreement</option>
							<option value="Bank Account Passbook">Bank Account Passbook</option>
							<option value="Gas Connection Bill">Gas Connection Bill</option>
							<option value="IT Assessment Order">IT Assessment Order</option>
							<option value="Employer Certificate">Employer Certificate</option>
						</select>
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
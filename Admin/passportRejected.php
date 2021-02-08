<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM passport";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE passport SET status='false' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/passportRejected.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM passport where status='reject'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Passport Rejected</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../Distributor/style.css"> -->
	<link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>
	<?php include("sidenav2.php"); ?>
	<?php include("navbar2.php"); ?>
	<div class="col-12 padding-sidenav pr-md-0 main-index">
		<div class="table-responsive">
			<?php if (sizeof($ans) > 0) { ?>
				<table class="table table-bordered" id="datatable">
					<thead>
						<tr>
							<th scope="col">Applying for</th>
							<th scope="col">Type of application</th>
							<th scope="col">Passport Type</th>
							<th scope="col">First name</th>
							<th scope="col">Middle name</th>
							<th scope="col">Surname</th>
							<th scope="col">aadhar_no</th>
							<th scope="col">marital_status</th>
							<th scope="col">dob</th>
							<th scope="col">birth_country_india</th>
							<th scope="col">birthplace</th>
							<th scope="col">state1</th>
							<th scope="col">district</th>
							<th scope="col">citizenship</th>
							<th scope="col">pan_card_no</th>
							<th scope="col">voter_id</th>
							<th scope="col">education_qualification</th>
							<th scope="col">emp_type</th>
							<th scope="col">govt_servant</th>
							<th scope="col">non_ncr</th>
							<th scope="col">mark</th>
							<th scope="col">other_names </th>
							<th scope="col">name_changed</th>
							<th scope="col">father_first_name</th>
							<th scope="col">father_middle_name</th>
							<th scope="col">father_surname</th>
							<th scope="col">mother_first_name </th>
							<th scope="col">mother_middle_name</th>
							<th scope="col">mother_surname</th>
							<th scope="col">guardian_first_name</th>
							<th scope="col">guardian_middle_name</th>
							<th scope="col">guardian_surname</th>
							<th scope="col">present_address</th>
							<th scope="col">house_no</th>
							<th scope="col">state_province</th>
							<th scope="col">present_district</th>
							<th scope="col">pincode</th>
							<th scope="col">mobile_number</th>
							<th scope="col">email</th>
							<th scope="col">address1 </th>
							<th scope="col">applicant_name </th>
							<th scope="col">applicant_mobile</th>
							<th scope="col">applicant_email</th>
							<th scope="col">certificate1 </th>
							<th scope="col">passport_detail </th>
							<th scope="col">applied_for_passport</th>
							<th scope="col">pending_proceeding</th>
							<th scope="col">warrant_or_summon </th>
							<th scope="col">warrant_for_arrest</th>
							<th scope="col">prohibit_departure</th>
							<th scope="col">convicted</th>
							<th scope="col">refused_denied_passport </th>
							<th scope="col">passport_impounded</th>
							<th scope="col">passport_revoked</th>
							<th scope="col">foreign_citizenship </th>
							<th scope="col">passport_other_country</th>
							<th scope="col">surrendered</th>
							<th scope="col">renunciation</th>
							<th scope="col">emergency_certi</th>
							<th scope="col">deported_from_other_country</th>
							<th scope="col">repatriated</th>
							<th scope="col">comments</th>
							<th scope="col">proof_of_birth</th>
							<th scope="col">residential_birth_proof</th>
							<th scope="col">other_document</th>
							<th scope="col">Retry</th>

						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['apply_for'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['type_of_application'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['passport_type'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['first_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['middle_name'] ?></p>
								</td>
								</td>
								<td>
									<p><?php echo $ans[$x]['surname'] ?></p>
								</td>
								</td>
								<td>
									<p><?php echo $ans[$x]['aadhar_no'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['marital_status'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['dob'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['birth_country_india'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['birthplace'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['state1'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['district'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['citizenship'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pan_card_no'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['voter_id'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['education_qualification'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['emp_type'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['govt_servant'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['non_ncr'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mark'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['other_names'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['name_changed'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['father_first_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['father_middle_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['father_surname'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mother_first_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mother_middle_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mother_surname'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['guardian_first_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['guardian_middle_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['guardian_surname'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['present_address'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['house_no'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['state_province'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['present_district'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pincode'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mobile_number'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['email'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['address1'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['applicant_name'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['applicant_mobile'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['applicant_email'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['certificate1'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['passport_detail'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['applied_for_passport'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pending_proceeding'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['warrant_or_summon'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['warrant_for_arrest'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['prohibit_departure'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['convicted'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['refused_denied_passport'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['passport_impounded'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['passport_revoked'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['foreign_citizenship'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['passport_other_country'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['surrendered'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['renunciation'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['emergency_certi'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['deported_from_other_country'] ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['repatriated'] ?></p>
								</td>
								<td>
									<?php if ($ans[$x]['comments'] != "") { ?>
										<p><?php echo $ans[$x]['comments']; ?></p>
									<?php } else {
										echo "No comments";
									} ?>
								</td>
								<td>
									<?php if ($ans[$x]['proof_of_birth'] != "") { ?>
										<p><a href="../uploads/<?php echo $ans[$x]['proof_of_birth']; ?>">Proof of Birth</a></p>
									<?php } else {
										echo "No attachment";
									} ?>
								</td>
								<td>
									<?php if ($ans[$x]['residential_birth_proof'] != "") { ?>
										<p><a href="../uploads/<?php echo $ans[$x]['residential_birth_proof']; ?>">Residential birth proof</a></p>
									<?php } else {
										echo "No attachment";
									} ?>
								</td>
								<td>
									<?php if ($ans[$x]['other_document'] != "") { ?>
										<p><a href="../uploads/<?php echo $ans[$x]['other_document']; ?>">otherdocument</a></p>
									<?php } else {
										echo "No attachment";
									} ?>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/passportRejected.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Retry"></a>
								</td>
							</tr>
					<?php
					}
				} else {
					echo "<h2>There is no data</h2>";
				}
					?>
						</tbody>
				</table>
		</div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
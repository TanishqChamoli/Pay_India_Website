<?php include("Admin1_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM itr_gst";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE itr_gst SET status='false' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/gstRejected.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM itr_gst where status='reject'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GST Rejected</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>

	<?php include("sidenav.php"); ?>
	<?php include("navbar.php"); ?>

	<div class="col-12 padding-sidenav pr-md-0 main-index">
		<?php if (sizeof($ans) > 0) { ?>
			<div class="table-responsive">
				<table class="table table-bordered" id="datatable">
					<thead>
						<tr>
							<th scope="col">Client Name</th>
							<th scope="col">Firm Name</th>
							<th scope="col">Client Email</th>
							<th scope="col">Mobile</th>
							<th scope="col">Firm Type</th>
							<th scope="col">Office Address</th>
							<th scope="col">City</th>
							<th scope="col">Pincode</th>
							<th scope="col">Account No</th>
							<th scope="col">IFSC</th>
							<th scope="col">Nature of Business Activity</th>
							<th scope="col">Place of Business</th>
							<th scope="col">Photo</th>
							<th scope="col">Confirm Docs</th>
							<th scope="col">Other Document</th>
							<th scope="col">Accept-Retry</th>
						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['client_name']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['firm_name']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['client_email']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mobile_number']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['firm_type']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['office_address']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['city']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pincode']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['acc_no']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['ifsc']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['nature_of_business_activity']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['placeofbusiness']; ?></p>
								</td>
								<td>
									<p>
										<p><a href="../uploads/<?php echo $ans[$x]['photo']; ?>">Uploaded Image</a></p>
								</td>
								<td>
									<p><a href="../uploads/<?php echo $ans[$x]['confirm_docs']; ?>">Confirm Documnent</a></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['other_document']; ?></p>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/gstRejected.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Retry"></a>
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
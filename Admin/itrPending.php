<?php include("Admin1_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM itr";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE itr SET status='reject' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/itrPending.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM itr where status='false'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ITR Pending</title>
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
							<th scope="col">Assesment Year</th>
							<th scope="col">Income Details of Customer</th>
							<th scope="col">Anual Salary</th>
							<th scope="col">Name of the Employeer</th>
							<th scope="col">Salary</th>
							<th scope="col">Annual Business Income Amount</th>
							<th scope="col">Name of the Business</th>
							<th scope="col">Busness Income Description</th>
							<th scope="col">Annual Rental Income Amount</th>
							<th scope="col">Rental Income Description</th>
							<th scope="col">Annual Other Sources Amount</th>
							<th scope="col">Other Sources Description</th>
							<th scope="col">Annual Agricultural Income Amount</th>
							<th scope="col">Agricultural Income Description</th>
							<th scope="col">Life Insurance Premium</th>
							<th scope="col">Children School Fees</th>
							<th scope="col">PPF Amount</th>
							<th scope="col">Health Insurance Premium</th>
							<th scope="col">Other Deduction Under Section 80C</th>
							<th scope="col">Give Details Of Other Deduction Under Section 80C</th>
							<th scope="col">Other Amount</th>
							<th scope="col">Give Details Of Other Amount</th>
							<th scope="col">E-Verify Return</th>
							<th scope="col">Balance Return</th>
							<th scope="col">Capital Gain</th>
							<th scope="col">Tax Payable</th>
							<th scope="col">Comments</th>
							<th scope="col">Other Document</th>
							<th scope="col">Reject</th>
							<th scope="col">Reply</th>
						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['ayear']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['incomedetails']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['anualsalary']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['note']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['salary']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['abia']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['businessname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['bid']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['aria']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['rid']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['aosa']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['osd']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['aaia']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['aid']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['lip']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['csf']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['ppf']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['hip']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['odus']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['gdoodus']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['oa']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['gdooa']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['everify']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['balancereturn']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['capitalgain']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['taxpayable']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['comments']; ?></p>
								</td>
								<td>
									<?php if ($ans[$x]['other_documents'] != "") { ?>
										<a href='../uploads/<?php echo $ans[$x]['other_documents']; ?>'>Open</a></p>
									<?php } else { ?>
										<p>There is no data</p>
									<?php } ?>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/itrPending.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Reject"></a>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/itr.php?id=<?php echo $ans[$x]['id']; ?>&r_id=<?php echo $ans[$x]['r_id']; ?>"><input type="button" value="Reply"></a>
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
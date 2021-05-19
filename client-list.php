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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0 ac">
		<div class="topnav">
			<h2 class="formheader">User Details</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">
				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">User Details</h2>
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
				<?php
				$conn = mysqli_connect('localhost', 'root', '', 'payindia');
				$email = $_SESSION['retailer'];
				$sql = "SELECT * FROM retailers WHERE email ='$email' ";
				$result = mysqli_query($conn, $sql);
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$id = $ans[0]['id'];
				$sql = "SELECT * FROM add_client where r_id=$id";
				$result = mysqli_query($conn, $sql);
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
				?>
				<div class="table-responsive">
					<?php if (sizeof($ans) > 0) { ?>
						<table class="table table-bordered" id="datatable">
							<thead>
								<tr>
									<th scope="col">Name of Authorised Signatory</th>
									<th scope="col">Mobile</th>
									<th scope="col">Email</th>
									<th scope="col">GST Number</th>
									<th scope="col">client_name</th>
									<th scope="col">address</th>
									<th scope="col">Pass of GST Portal</th>
									<th scope="col">Reply</th>
								</tr>
							</thead>
							<?php
							for ($x = 0; $x < sizeof($ans); $x++) {
							?>
								<tbody>
									<tr>
										<td>
											<p><?php echo $ans[$x]['name_of_authorised_signatory']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['mobile_number']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['email']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['gst_no']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['client_name']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['address']; ?></p>
										</td>
										<td>
											<p><?php echo $ans[$x]['pass_of_gst_portal']; ?></p>
										</td>
										<td>
											<button data-toggle="modal" data-target="#fileReturnModal<?php echo $ans[$x]['id'] ?>">File Return</button>
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
		</div>
		<?php
		if (sizeof($ans) > 0) {
			for ($x = 0; $x < sizeof($ans); $x++) {
		?>
				<div id="fileReturnModal<?php echo $ans[$x]['id'] ?>" class="modal fade" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="fileReturnModal">File return</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h4 class="return-details">User details</h4>
								<div class="table-container mt-0">
									<table id="clients" class="table-striped clients">
										<tr>
											<th scope="col">Name of Authorised Signatory</th>
											<th scope="col">Mobile</th>
											<th scope="col">Email</th>
											<th scope="col">GST Number</th>
											<th scope="col">client_name</th>
											<th scope="col">address</th>
											<th scope="col">Pass of GST Portal</th>
										</tr>
										<tr>
											<td>
												<p><?php echo $ans[$x]['name_of_authorised_signatory']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['mobile_number']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['email']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['gst_no']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['client_name']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['address']; ?></p>
											</td>
											<td>
												<p><?php echo $ans[$x]['pass_of_gst_portal']; ?></p>
											</td>
										</tr>
									</table>
								</div>
								<div class="mt-5">
									<h4 class="return-details">Return details</h4>
								</div>
								<form class="form-container" action="./backend/client-list_b.php" method="post" enctype="multipart/form-data">
									<div class="form-group mt-3">
										<label>Select period of Return(Year and Month)?</label>
										<label class="required" for="district">Year</label>
										<select name="year" id="year" class="form-control">
											<option value="">Please Select</option>
											<option value="option1">option1</option>
											<option value="option2">option2</option>
											<option value="option3">option3</option>
											<option value="option4">option4</option>
										</select>
									</div>
									<div class="form-group mt-auto">
										<label class="required" for="district">Month</label>
										<select name="month" id="month" class="form-control">
											<option value="">Please Select</option>
											<option value="option1">option1</option>
											<option value="option2">option2</option>
											<option value="option3">option3</option>
											<option value="option4">option4</option>
										</select>
									</div>
									<div class="form-group form-col-span-2">
										<label class="required">Whether Client want to file the return?</label><br>
										<div class="form-check-inline">
											<label class="form-check-label" for="optradio-yes">
												<input type="radio" class="form-check-input" name="optradio" id="optradio-yes" value="yes" checked>Yes
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label" for="optradio-no">
												<input type="radio" class="form-check-input" name="optradio" id="optradio-no" value="no">No
											</label>
										</div>
									</div>
									<div id="file-return" class="form-container form-col-span-2 d-none">
										<div class="form-group">
											<label class="required" for="purchase-bills">No. of Purchase Bills</label>
											<input type="number" class="form-control" id="purchase-bills" placeholder="Number of purchase bills" name="purchase-bills">
										</div>

										<div class="form-group">
											<label class="required" for="sale-bills">No. of Sale Bills</label>
											<input type="number" class="form-control" id="sale-bills" placeholder="Number of sale bills" name="sale-bills">
										</div>


										<div class="form-group">
											<label for="upload-purchase-bill">Purchase Bill-Upload(PDF)</label>
											<input class="form-control" type="file" id="upload-purchase-bill" name="upload-purchase-bill">
										</div>

										<div class="form-group">
											<label for="upload-sale-bill">Sale Bill-Upload(PDF)</label>
											<input class="form-control" type="file" id="upload-sale-bill" name="upload-sale-bill">
										</div>
									</div>
									<div class="form-group form-col-span-2">
										<label for="comments">Any Comments</label>
										<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
									</div>
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['name_of_authorised_signatory']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['mobile_number']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['email']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['gst_no']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['client_name']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['address']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $ans[$x]['pass_of_gst_portal']; ?>" hidden />
									<input type="text" name="user[]" required value="<?php echo $id; ?>" hidden />



									<button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		}
		?>
	</div>
</body>
<script type="text/javascript" defer>
	$('#optradio-yes').prop('checked', true);

	$('[name="optradio"]').click((e) => {
		let id = e.target.id;

		if (id === 'optradio-yes') {
			$('#file-return').addClass('d-none');
		}

		if (id === 'optradio-no') {
			$('#file-return').removeClass('d-none');
		}
	});
</script>

</html>
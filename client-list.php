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
				<!-- <form class="form-container mt-4 form-padding-internal" action="backend/itr gst_b.php" method="post" enctype="multipart/form-data">
                    <label class="required" for="gst">Enter the GST number below and proceed</label>
					<input type="text" class="form-control" id="gst" placeholder="GST Number" name="gstno" required>
                    <button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
				</form> -->

				<div class="client-main">
					<div class="table-container">
						<table id="clients" class="table-striped clients">
							<tr>
								<th>Sr.No.</th>
								<th>GST Number</th>
								<th>Mobile</th>
								<th>Entity Name</th>
								<th>Authorised Name</th>
								<th>Email</th>
								<th>Address</th>
								<th>Get Portal?</th>
								<th>Added Date</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>1</td>
								<td>123</td>
								<td>2938419302</td>
								<td>Royal</td>
								<td>abcd</td>
								<td>@gmail</td>
								<td>asdf</td>
								<td>yes/no</td>
								<td>Date</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fileReturnModal">File Return</button></td>
							</tr>
						</table>

					</div>
					<nav class="table-nav">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="fileReturnModal" tabindex="-1" role="dialog" aria-labelledby="fileReturnModal" aria-hidden="true">
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
								<th>Sr.No.</th>
								<th>GST Number</th>
								<th>Mobile</th>
								<th>Entity Name</th>
								<th>Authorised Name</th>
								<th>Email</th>
							</tr>
							<tr>
								<td>1</td>
								<td>123</td>
								<td>2938419302</td>
								<td>Royal</td>
								<td>abcd</td>
								<td>@gmail</td>
							</tr>
						</table>
					</div>

					<div class="mt-5">
						<h4 class="return-details">Return details</h4>
					</div>
					<form class="form-container" action="" method="post" enctype="multipart/form-data">
						<div class="form-group mt-3">
							<!-- <h5>Select period of Return(Year and Month)?</h5> -->
							<label>Select period of Return(Year and Month)?</label>
							<label class="required" for="district">Year</label>
							<select name="year" id="year" class="form-control" required>
								<option value="">Please Select</option>
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
							</select>
						</div>

						<div class="form-group mt-auto">
							<label class="required" for="district">Month</label>
							<select name="month" id="month" class="form-control" required>
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
								<input type="number" class="form-control" id="purchase-bills" placeholder="Number of purchase bills" name="purchase-bills" required>
							</div>

							<div class="form-group">
								<label class="required" for="sale-bills">No. of Sale Bills</label>
								<input type="number" class="form-control" id="sale-bills" placeholder="Number of sale bills" name="sale-bills" required>
							</div>


							<div class="form-group">
								<label for="upload-purchase-bill">Purchase Bill-Upload(PDF)</label>
								<input class="form-control" type="file" id="upload-purchase-bill" name="upload-purchase-bill" required>
							</div>

							<div class="form-group">
								<label for="upload-sale-bill">Sale Bill-Upload(PDF)</label>
								<input class="form-control" type="file" id="upload-sale-bill" name="upload-sale-bill" required>
							</div>
						</div>
						<div class="form-group form-col-span-2">
							<label for="comments">Any Comments</label>
							<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
						</div>

						<button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

		// $('#optradio-yes').click((e) => {
		// 	$('#file-return').addClass('d-none');
		// });

		// $('#optradio-no').click((e) => {
		// 	$('#file-return').removeClass('d-none');
		// });
	</script>

</body>

</html>
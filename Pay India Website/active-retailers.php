<?php include("./backend/head_check_retailer.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Active Retailers</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<!-- <nav class="navbar navbar-expand-md navbar-dark bg-brand d-md-none d-flex">
        	
		<a href="index.html" class="nav-back-btn">
			<span class="fa fa-lg fa-arrow-left"></span>
    	</a>
		<div class="logo-container">
			<a href="#" class="nav-brand"> 
				<img class="navimg mx-auto" src="1.png">
			</a>
		</div>

		<button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li>
					<a href="mainpage.html" class="nav-link">Distribotor Portal</a>
				</li>
				<li class="accordian">
					<a href="#nav-manageretailers" class="nav-link active" data-toggle="collapse">Manage Retailers<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-manageretailers" class="accordian-content collapse show">
						<a href="active-retailers.html" class="nav-link active">Active Retailers</a>
						<a href="inactive-retailers.html" class="nav-link">Inactive Retailers</a>
					</div>
				</li>
				<li class="accordian">
					<a href="#nav-retailers" class="nav-link"  data-toggle="collapse">Reatilers<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-retailers" class="accordian-content collapse">
						<a href="add-retailers.html" class="nav-link">Add Retailers</a>
					</div>
				</li>
				<li class="accordian">
					<a href="#nav-uti" class="nav-link"  data-toggle="collapse">UTI Coupon Request<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-uti" class="accordian-content collapse">
						<a href="purchase-coupon.html" class="nav-link">Purchase Coupon</a>
					</div>
				</li>
				<li class="accordian">
					<a href="#nav-incomestatement" class="nav-link"  data-toggle="collapse">Income Statement<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-incomestatement" class="accordian-content collapse">
						<a href="commission-statement.html" class="nav-link">Commission Statement</a>
						<a href="wallet-statement.html" class="nav-link">Wallet Statement</a>
					</div>
				</li>
				<li class="accordian">
					<a href="#nav-fundtransfer" class="nav-link"  data-toggle="collapse">Fund Transfer<i class="fa fa-angle-down float-right"></i></a>
						<div id="nav-fundtransfer" class="accordian-content collapse">
							<a href="transfer-balance.html" class="nav-link">Transfer Balance</a>
						</div>
				</li>
				<li class="accordian">
					<a href="#nav-walletrequest" class="nav-link"  data-toggle="collapse">Wallet Request<i class="fa fa-angle-down float-right"></i></a>
					<div id="nav-walletrequest" class="accordian-content collapse">
						<a href="wallet-topup.html" class="nav-link">Wallet TopUp</a>
					</div>
				</li>
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

    </nav> -->


    <div class="container-fluid mb-5">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center mt-3 mb-3">Active Retailers</h1>
    		</div>
    	</div>
    	<!-- <div class="row">
    		<div class="col-md-3 d-none d-md-flex sidenav-index">
    			<div class="mt-4 mb-0 d-md-none">
    				<h2 class="formheader">Active Retailers</h2>
    			</div>
    			<div class="sidenav">
    				<a href="#" class="nav-brand"> <img class="navimg" src="../shared/images/1.png"></a>
    				<div>
						<a href="mainpage.html" class="sidenav-link">Distributor Portal</a>
					</div>
					<div class="accordian">
						<a href="#manageretailers" class="sidenav-link active"  data-toggle="collapse">Manage Reatilers<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="manageretailers" class="accordian-content collapse show">
							<a href="active-retailers.html" class="sidenav-link active">Active Retailers</a>
							<a href="inactive-retailers.html" class="sidenav-link">Inactive Retailers</a>
						</div>
					</div>
					<div class="accordian">
						<a href="#retailers" class="sidenav-link"  data-toggle="collapse">Reatilers<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="retailers" class="accordian-content collapse">
							<a href="add-retailers.html" class="sidenav-link">Add Retailers</a>
						</div>
					</div>
					<div class="accordian">
						<a href="#uti" class="sidenav-link"  data-toggle="collapse">UTI Coupon Request<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="uti" class="accordian-content collapse">
							<a href="purchase-coupon.html" class="sidenav-link">Purchase Coupon</a>
						</div>
					</div>

					<div class="accordian">
						<a href="#incomestatement" class="sidenav-link"  data-toggle="collapse">Income Statement<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="incomestatement" class="accordian-content collapse">
							<a href="commission-statement.html" class="sidenav-link">Commission Statement</a>
							<a href="wallet-statement.html" class="sidenav-link">Wallet Statement</a>
						</div>
					</div>

					<div class="accordian">
						<a href="#fundtransfer" class="sidenav-link"  data-toggle="collapse">Fund Transfer<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="fundtransfer" class="accordian-content collapse">
							<a href="transfer-balance.html" class="sidenav-link">Transfer Balance</a>
						</div>
					</div>
					<div class="accordian">
						<a href="#walletrequest" class="sidenav-link"  data-toggle="collapse">Wallet Request<i class="fa fa-angle-down float-right pr-3"></i></a>
						<div id="walletrequest" class="accordian-content collapse">
							<a href="wallet-topup.html" class="sidenav-link">Wallet TopUp</a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
 -->
    	<!-- <div class="row padding-sidenav px-0 pr-md-0">
    		<div class="col-12 px-0 pr-md-0">
    			<div class="topnav px-8">
    				<h2 class="formheader">Active Retailers</h2>
					<input type="search" name="search" class="search" placeholder="Search...">
					<div class="user">
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
    	</div> -->

    	<div class="row">
    		<div class="col-12 col-md-3">
				<div class="card mt-3 mb-4">
					<div class="card-body topicons">
						<div class="figures">
							<h2 class="card-number d-inline-block">100</h2>
							<i class="fa fa-users d-inline-block float-right"></i>
						</div>
						<h5 class="card-title">Retailers</h5>
						<h6 class="card-subtitle mb-2 text-muted">Total Active Retailers</h6>
					</div>
				</div>
    		</div>
    		<div class="col-12 col-md-3">
				<div class="card mt-3 mb-4">
					<div class="card-body topicons">
						<div class="figures">
							<h2 class="card-number d-inline-block">100</h2>
							<i class="fa fa-users d-inline-block float-right"></i>
						</div>
						<h5 class="card-title">User Banned</h5>
						<h6 class="card-subtitle mb-2 text-muted">Total Suspended Retailers</h6>
					</div>
				</div>
    		</div>
    		<div class="col-12 col-md-3">
				<div class="card mt-3 mb-4">
					<div class="card-body topicons">
						<div class="figures">
							<h2 class="card-number d-inline-block">100</h2>
							<i class="fa fa-area-chart d-inline-block float-right"></i>
						</div>
						<h5 class="card-title">Order Recieved</h5>
						<h6 class="card-subtitle mb-2 text-muted">Total Retailer Order Received</h6>
					</div>
				</div>
    		</div>
    		<div class="col-12 col-md-3">
				<div class="card mt-3 mb-4">
					<div class="card-body topicons">
						<div class="figures">
							<h2 class="card-number d-inline-block">100</h2>
							<i class="fa fa-line-chart d-inline-block float-right"></i>
						</div>
						<h5 class="card-title">Total Earnings</h5>
						<h6 class="card-subtitle mb-2 text-muted">Total Earning Order</h6>
					</div>
				</div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-12">
				<div class="table-container">
					<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"width="100%">
						<thead>
							<tr>
								<th>First name</th>
								<th>Last name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
								<th>Extn.</th>
								<th>E-mail</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger</td>
								<td>Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
								<td>5421</td>
								<td>t.nixon@datatables.net</td>
								<td>
									<button type="submit" class="btn action-btn">
										<i class="fa fa-edit"></i>
									</button>
								</td>
								<td>
									<button type="submit" class="btn action-btn">
										<i class="fa fa-window-close"></i>
									</button>
								</td>
							</tr>
							<!-- <tr>
								<td>Garrett</td>
								<td>Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
								<td>8422</td>
								<td>g.winters@datatables.net</td>
							</tr>
							<tr>
								<td>Ashton</td>
								<td>Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
								<td>1562</td>
								<td>a.cox@datatables.net</td>
							</tr>
							<tr>
								<td>Cedric</td>
								<td>Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
								<td>6224</td>
								<td>c.kelly@datatables.net</td>
							</tr> -->
						</tbody>
					</table>
				</div>
					<!-- <div class="formactionbtn">
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Edit</button>
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Suspend</button>
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Save</button>
					</div> -->
    		</div>
    	</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
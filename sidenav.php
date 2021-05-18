<nav class="navbar navbar-expand-md navbar-dark bg-brand d-md-none d-flex">

    <a href="retailer.php" class="nav-back-btn">
        <span class="fa fa-lg fa-arrow-left"></span>
    </a>
    <div class="logo-container">
        <a href="retailer.php" class="nav-brand">
            <img class="navimg mx-auto" src="shared/images/1.png">
        </a>
    </div>

    <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li>
                <a href="itr.php" class="nav-link">ITR</a>
            </li>
            <li>
                <a href="itr gst.php" class="nav-link">GST</a>
            </li>
            <!-- Added GST RETURN accordian -->
            <li class="accordian">
                <a href="#gstReturn" class="nav-link" data-toggle="collapse">GST Return<i class="fa fa-angle-down float-right"></i></a>
                <div id="gstReturn" class="accordian-content collapse">
                    <a href="addClient.php" class="nav-link">Add Client</a><br>
                    <a href="client-list.php" class="nav-link">Clients List</a>
                </div>
            </li>
            <li>
                <a href="msme.php" class="nav-link">MSME Registration</a>
            </li>
            <li>
                <a href="votercard.php" class="nav-link">Voter Card</a>
            </li>
            <li>
                <a href="pfrefund.php" class="nav-link">PF Refund</a>
            </li>
            <li class="accordian">
                <a href="#panNsdl" class="nav-link" data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right"></i></a>
                <div id="panNsdl" class="accordian-content collapse">
                    <a href="newPan.php" class="nav-link">New PAN</a><br>
                    <a href="form49A.php" class="nav-link">FORM 49A</a>
                </div>
            </li>
            <li>
                <a href="index pan card uti.php" class="nav-link">PAN Card UTI</a>
            </li>
            <li>
                <a href="findyourPAN.php" class="nav-link">Find Your PAN</a>
            </li>
            <li>
                <a href="aaharreprint.php" class="nav-link">Aadhar Reprint</a>
            </li>
            <li>
                <a href="aadharPANLink.php" class="nav-link">Aadhar PAN Link</a>
            </li>
            <li>
                <a href="passport.php" class="nav-link">Passport</a>
            </li>
            <li>
                <a href="pvc card.php" class="nav-link">PVC Card</a>
            </li>
            <li>
                <a href="bill payment.php" class="nav-link">Bill Payment</a>
            </li>
            <li>
                <a href="fssai.php" class="nav-link">FSSAI</a>
            </li>
            <li>
                <a href="insurance.php" class="nav-link">Insurance Form</a>
            </li>
            <!-- <li>
					<a href="#" class="nav-link">Payment Gateway</a>
				</li> -->
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

</nav>


<div class="container-fluid mb-5">
    <div class="row">

        <div class="col-md-3 d-none d-md-flex sidenav-index">
            <div class="sidenav">
                <a href="retailer.php" class="nav-brand"> <img class="navimg" src="shared/images/1.png"></a>
                <a href="itr.php" class="sidenav-link">ITR</a>
                <a href="itr gst.php" class="sidenav-link">GST</a>
                <!-- Added GST RETURN accordian -->
                <div class="accordian">
                    <a href="#gstReturn" class="sidenav-link" data-toggle="collapse">GST Return<i class="fa fa-angle-down float-right pr-3"></i></a>
                    <div id="gstReturn" class="accordian-content collapse">
                        <a href="addClient.php" class="sidenav-link">Add Client</a>
                        <a href="client-list.php" class="sidenav-link">Clients List</a>
                    </div>
                </div>
                <a href="msme.php" class="sidenav-link">MSME Registration</a>
                <a href="votercard.php" class="sidenav-link">Voter Card</a>
                <a href="pfrefund.php" class="sidenav-link">PF Refund</a>
                <div class="accordian">
                    <a href="#panNsdl" class="sidenav-link" data-toggle="collapse">PAN Card NSDL<i class="fa fa-angle-down float-right pr-3"></i></a>
                    <div id="panNsdl" class="accordian-content collapse">
                        <a href="newPan.php" class="sidenav-link">New PAN</a>
                        <a href="form49A.php" class="sidenav-link">FORM 49A</a>
                    </div>
                </div>
                <a href="index pan card uti.php" class="sidenav-link">PAN Card UTI</a>
                <a href="findyourPAN.php" class="sidenav-link">Find Your PAN</a>
                <a href="aadharreprint.php" class="sidenav-link">Aadhar Reprint</a>
                <a href="aadharPANLink.php" class="sidenav-link">Aadhar PAN Link</a>
                <a href="passport.php" class="sidenav-link">Passport</a>
                <a href="pvc card.php" class="sidenav-link">PVC Card</a>
                <a href="bill payment.php" class="sidenav-link">Bill Payment</a>
                <a href="fssai.php" class="sidenav-link">FSSAI</a>
                <a href="insurance.php" class="sidenav-link">Insurance Form</a>
                <!-- <a href="#" class="sidenav-link">Payment Gateway</a> -->
            </div>

        </div>
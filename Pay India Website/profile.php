<?php include("./backend/head_check_retailer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include("sidenav.php"); ?>
    <div class="col-12 padding-sidenav px-0 pr-md-0">
        <div class="topnav">
            <h2 class="formheader">Profile</h2>
            <?php include("retailer_wallet.php"); ?>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'payindia');
            $email = $_SESSION['retailer'];
            $sql = "SELECT * FROM retailers WHERE email ='$email'";
            $result = mysqli_query($conn, $sql);
            $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
            <div class="row padding-sidenav px-0 pr-md-0">
                <div class="col-12">
                    <form class="form-container mt-4 form-padding-internal">
                        <div class="form-col-span-2 text-center mt-3">
                            <h3 class="font-weight-bold">User Basic Details</h3>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="<?php echo $ans[0]['email']; ?>" name="email" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mn">Mobile Number</label>
                            <input type="number" class="form-control" id="mn" placeholder="<?php echo $ans[0]['mobile']; ?>" name="mn" disabled>
                        </div>
                        <div class="form-group">
                            <label for="cname">Client Name</label>
                            <input type="text" class="form-control" id="cname" placeholder="<?php echo $ans[0]['cname']; ?>" name="cname" disabled>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="<?php echo $ans[0]['address']; ?>" name="address" disabled>
                        </div>
                        <div class="form-col-span-2 text-center mt-5">
                            <h3 class="font-weight-bold">Services Rate For You</h3>
                        </div>
                        <div class="form-group">
                            <label for="nii">NII ITR Rate</label>
                            <input type="number" class="form-control" id="nii" placeholder="<?php echo $ans[0]['nii']; ?>" name="nii" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tir">Taxable ITR Rate</label>
                            <input type="number" class="form-control" id="tir" placeholder="<?php echo $ans[0]['tir']; ?>" name="tir" disabled>
                        </div>

                        <div class="form-group">
                            <label for="np">Normal Passport</label>
                            <input type="number" class="form-control" id="np" placeholder="<?php echo $ans[0]['np']; ?>" name="np" disabled>
                        </div>

                        <div class="form-group">
                            <label for="grr">GST Return Rate</label>
                            <input type="number" class="form-control" id="grr" placeholder="<?php echo $ans[0]['grr']; ?>" name="grr" disabled>
                        </div>

                        <div class="form-group">
                            <label for="rbr">Regular Bill Rate</label>
                            <input type="number" class="form-control" id="rbr" placeholder="<?php echo $ans[0]['rbr']; ?>" name="rbr" disabled>
                        </div>

                        <div class="form-group">
                            <label for="lbr">Late Bill Rate</label>
                            <input type="number" class="form-control" id="lbr" placeholder="<?php echo $ans[0]['lbr']; ?>" name="lbr" disabled>
                        </div>

                        <div class="form-group">
                            <label for="vir">Verify ITR Rate</label>
                            <input type="number" class="form-control" id="vir" placeholder="<?php echo $ans[0]['vir']; ?>" name="vir" disabled>
                        </div>

                        <div class="form-group">
                            <label for="upr">UTI PAN Rate</label>
                            <input type="number" class="form-control" id="upr" placeholder="<?php echo $ans[0]['upr']; ?>" name="upr" disabled>
                        </div>

                        <div class="form-group">
                            <label for="gstreg">GST Registration</label>
                            <input type="number" class="form-control" id="gstreg" placeholder="<?php echo $ans[0]['gstreg']; ?>" name="gstreg" disabled>
                        </div>

                        <div class="form-group">
                            <label for="pfrefund">PF Refund</label>
                            <input type="number" class="form-control" id="pfrefund" placeholder="<?php echo $ans[0]['pfrefund']; ?>" name="pfrefund" disabled>
                        </div>

                        <div class="form-group">
                            <label for="fastpanrate">Fast PAN Rate</label>
                            <input type="number" class="form-control" id="fastpanrate" placeholder="<?php echo $ans[0]['fastpanrate']; ?>" name="fastpanrate" disabled>
                        </div>

                        <div class="form-group">
                            <label for="pvc">PVC Card</label>
                            <input type="number" class="form-control" id="pvc" placeholder="<?php echo $ans[0]['pvc']; ?>" name="pvc" disabled>
                        </div>

                        <div class="form-group">
                            <label for="nadr">News AD Rate</label>
                            <input type="number" class="form-control" id="nadr" placeholder="<?php echo $ans[0]['nadr']; ?>" name="nadr" disabled>
                        </div>

                        <div class="form-group">
                            <label for="udyog">Udyog Aadhar Rate</label>
                            <input type="number" class="form-control" id="udyog" placeholder="<?php echo $ans[0]['udyog']; ?>" name="udyog" disabled>
                        </div>
                        <div class="form-group">
                            <label for="date">Date of Joining</label>
                            <input type="text" class="form-control" id="date" placeholder="<?php echo $ans[0]['create_date']; ?>" name="date" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
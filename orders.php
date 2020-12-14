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
            <div class="row padding-sidenav px-0 pr-md-0">
                <div class="col-12">
                    <form action="orders.php" method="post">
                        <select name="data">
                            <option value="" selected disabled hidden>Choose here</option>
                            <option value="itr_gst">ITR/ GST</option>
                            <option value="msme">MSME Registration</option>
                            <option value="votercard">Voter Card</option>
                            <option value="pfrefund">PF Refund</option>
                            <option value="">PAN Card NSDL</option>
                            <option value="">New PAN</option>
                            <option value="">FORM 49A(To Edit)</option>
                            <option value="index_pan_card_uti">PAN Card UTI</option>
                            <option value="">Find Your PAN</option>
                            <option value="aadhar_reprint">Aadhar Reprint</option>
                            <option value="aadharpan_link">Aadhar PAN Link</option>
                            <option value="msmeort">Passport</option>
                            <option value="pvc_card">PVC Card</option>
                            <option value="bill_payment">Bill Payment</option>
                            <option value="fssai">FSSAI</option>
                            <option value="insurance">Insurance Form</option>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                    <?php
                    if (isset($_POST['data'])) {
                        $conn = mysqli_connect('localhost', 'root', '', 'payindia');
                        $email = $_SESSION['retailer'];
                        $table = $_POST['data'];
                        $sql = "SELECT * FROM retailers WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        $r_id = $ans[0]['id'];
                        $sql = "SELECT * FROM $table WHERE r_id = $r_id";
                        $result = mysqli_query($conn, $sql);
                        if (is_object($result)) {
                            $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            // print_r($ans);
                            foreach ($ans as $x) {
                                print_r($x);
                    ?>

                    <?php
                            }
                        } else {
                            echo "No data!";
                        }
                    }
                    ?>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
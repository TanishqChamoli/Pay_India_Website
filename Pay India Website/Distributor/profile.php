<?php include("./backend/head_check.php"); ?>
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
    <?php include("topnav.php"); ?>
    <div class="row padding-sidenav px-0 pr-md-0">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'payindia');
        $sql = "SELECT * FROM retailers";
        $result = mysqli_query($conn, $sql);
        $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <div class="col-12">
            <div class="table-container">
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Name</th>
                            <th>Allowed(TRUE/FALSE)</th>
                            <th>Address</th>
                            <th>nii</th>
                            <th>tir</th>
                            <th>np</th>
                            <th>grr</th>
                            <th>rbr</th>
                            <th>lbr</th>
                            <th>vir</th>
                            <th>UPR</th>
                            <th>Gstreg</th>
                            <th>Pfrefund</th>
                            <th>Fastpanrate</th>
                            <th>PVC</th>
                            <th>Nadr</th>
                            <th>Udyog</th>
                            <th>Create_date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ans as $value) { ?>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['mobile']; ?></td>
                            <td><?php echo $value['cname']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['address']; ?></td>
                            <td><?php echo $value['nii']; ?></td>
                            <td><?php echo $value['tir']; ?></td>
                            <td><?php echo $value['np']; ?></td>
                            <td><?php echo $value['grr']; ?></td>
                            <td><?php echo $value['rbr']; ?></td>
                            <td><?php echo $value['lbr']; ?></td>
                            <td><?php echo $value['vir']; ?></td>
                            <td><?php echo $value['upr']; ?></td>
                            <td><?php echo $value['gstreg']; ?></td>
                            <td><?php echo $value['pfrefund']; ?></td>
                            <td><?php echo $value['fastpanrate']; ?></td>
                            <td><?php echo $value['pvc']; ?></td>
                            <td><?php echo $value['nadr']; ?></td>
                            <td><?php echo $value['udyog']; ?></td>
                            <td><?php echo $value['create_date']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
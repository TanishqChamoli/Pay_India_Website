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
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'payindia');
                    $email = $_SESSION['retailer'];
                    $sql = "SELECT * FROM retailers WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $r_id = $ans[0]['id'];
                    $sql = "SELECT type,reply,comments,q_id,date FROM admin1_replies  WHERE r_id = '$r_id' UNION SELECT type,reply,comments,q_id,date FROM admin2_replies WHERE r_id = '$r_id'";
                    $result = mysqli_query($conn, $sql);
                    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $keys = (array_keys($ans[0]));
                    ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <?php foreach ($keys as $x) { ?>
                                        <th scope="col"><?php echo $x; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($ans as $val) {
                                ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $val['type']; ?></p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="./reply/<?php echo $val['reply']; ?>">REPLY</a>
                                            </p>
                                        </td>
                                        <td>
                                            <p><?php echo $val['comments']; ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $val['q_id']; ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $val['date']; ?></p>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php include("Admin1_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'payindia');
    $sql = "SELECT * FROM client_gst_data";
    $id = $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $sql = "UPDATE client_gst_data SET status='reject' WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        $address = "http://localhost/Pay%20India%20Website/Admin/client_list_gstPending.php";
        header("Location: " . $address);
        die();
    }
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM client_gst_data where status='false'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GST Pending</title>
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
                            <th scope="col">year</th>
                            <th scope="col">month</th>
                            <th scope="col">y_n</th>
                            <th scope="col">purchasebills</th>
                            <th scope="col">salebills</th>
                            <th scope="col">uploadpurchasebill</th>
                            <th scope="col">uploadsalebill</th>
                            <th scope="col">comments</th>
                            <th scope="col">name_of_authorised_signatory</th>
                            <th scope="col">mobile_number</th>
                            <th scope="col">email</th>
                            <th scope="col">gst_no</th>
                            <th scope="col">client_name</th>
                            <th scope="col">address</th>
                            <th scope="col">pass_of_gst_portal</th>
                            <th scope="col">status</th>
                            <th scope="col">r_id</th>
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
                                    <p><?php echo $ans[$x]['year']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['month']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['y_n']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['purchasebills']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['salebills']; ?></p>
                                </td>
                                <td>
                                    <?php if ($ans[$x]['uploadpurchasebill'] != "") { ?>
                                        <p><a href="../uploads/<?php echo $ans[$x]['uploadpurchasebill']; ?>">Purchase bill</a></p>
                                    <?php } else {
                                        echo "No attachment";
                                    } ?>
                                </td>
                                <td>
                                    <?php if ($ans[$x]['uploadsalebill'] != "") { ?>
                                        <p><a href="../uploads/<?php echo $ans[$x]['uploadsalebill']; ?>">Sale bill</a></p>
                                    <?php } else {
                                        echo "No attachment";
                                    } ?>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['comments']; ?></p>
                                </td>
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
                                    <p><?php echo $ans[$x]['status']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['r_id']; ?></p>
                                </td>
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/client_list_gstPending.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Reject"></a>
                                </td>
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/client_list_gst.php?id=<?php echo $ans[$x]['id']; ?>&r_id=<?php echo $ans[$x]['r_id']; ?>"><input type="button" value="Reply"></a>
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
<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'payindia');
    $sql = "SELECT * FROM pan";
    $id = $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $sql = "UPDATE pan SET status='reject' WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        $address = "http://localhost/Pay%20India%20Website/Admin/newPanPending.php";
        header("Location: " . $address);
        die();
    }
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM pan where status='false'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Pan Pending</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../Distributor/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>

    <?php include("sidenav2.php"); ?>
    <?php include("navbar2.php"); ?>
    <div class="col-12 padding-sidenav pr-md-0 main-index">
        <div class="table-responsive">
            <?php if (sizeof($ans) > 0) { ?>
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile no.</th>
                            <th scope="col">Aadhar</th>
                            <th scope="col">Pan</th>
                            <th scope="col">Name to Print</th>
                            <th scope="col">Father name</th>
                            <th scope="col">Mother name</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Otherdocument</th>
                            <th scope="col">Comments</th>
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
                                    <p><?php echo $ans[$x]['afname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['mn']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['aadhar']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['pan']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['nameprint']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['fname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['mname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['dob']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['gender']; ?></p>
                                </td>
                                <td>
                                    <?php if ($ans[$x]['other_document'] != "") { ?>
                                        <p><a href="../uploads/<?php echo $ans[$x]['other_document']; ?>">otherdocument</a></p>
                                    <?php } else {
                                        echo "No attachment";
                                    } ?>
                                </td>
                                <td>
                                    <?php if ($ans[$x]['comments'] != "") { ?>
                                        <p><?php echo $ans[$x]['comments']; ?></p>
                                    <?php } else {
                                        echo "No comments";
                                    } ?>
                                </td>
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/newPanPending.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Reject"></a>
                                </td>
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/newPan.php?id=<?php echo $ans[$x]['id']; ?>&r_id=<?php echo $ans[$x]['r_id']; ?>"><input type="button" value="Reply"></a>
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
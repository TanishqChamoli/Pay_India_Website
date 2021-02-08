<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'payindia');
    $sql = "SELECT * FROM form49a";
    $id = $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $sql = "UPDATE form49a SET status='reject' WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        $address = "http://localhost/Pay%20India%20Website/Admin/form49aPending.php";
        header("Location: " . $address);
        die();
    }
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM form49a where status='false'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form49a Pending </title>
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
                            <th scope="col">Area Code</th>
                            <th scope="col">Aotype</th>
                            <th scope="col">Range Code</th>
                            <th scope="col">Ao_no</th>
                            <th scope="col">Category</th>
                            <th scope="col">Applicant Surname</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">abbreviation_yes_or_no</th>
                            <th scope="col">abbreviation_of_name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Photograph</th>
                            <th scope="col">Sign</th>
                            <th scope="col">Comments</th>
                            <th scope="col">other_surname</th>
                            <th scope="col">other_firstname</th>
                            <th scope="col">other_lastname</th>
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
                                    <p><?php echo $ans[$x]['area_code']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['aotype']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['range_code']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['ao_no']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['category']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['applicant_surname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['first_name']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['last_name']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['abbreviation_yes_or_no']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['abbreviation_of_name']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['gender']; ?></p>
                                </td>
                                <td>
                                    <?php if ($ans[$x]['photograph'] != "") { ?>
                                        <p><a href="../uploads/<?php echo $ans[$x]['photograph']; ?>">Other document</a></p>
                                    <?php } else {
                                        echo "No attachment";
                                    } ?>
                                </td>
                                <td>
                                <?php if ($ans[$x]['sign'] != "") { ?>
                                        <p><a href="../uploads/<?php echo $ans[$x]['sign']; ?>">Other document</a></p>
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
                                    <p><?php echo $ans[$x]['other_surname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['other_firstname']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ans[$x]['other_lastname']; ?></p>
                                </td>
                                
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/form49aPending.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Reject"></a>
                                </td>
                                <td>
                                    <a href="http://localhost/Pay%20India%20Website/Admin/form49a.php?id=<?php echo $ans[$x]['id']; ?>&r_id=<?php echo $ans[$x]['r_id'];?>"><input type="button" value="Reply"></a>
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
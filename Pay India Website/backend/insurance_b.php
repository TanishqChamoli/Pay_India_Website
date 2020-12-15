<?php
$target_dir =  "../uploads/";

$registration_no = $_POST['regnumber'];
$policy_expired_or_not = $_POST['policy'];
$last_claim = $_POST['claim'];


$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO insurance(registration_no,policy_expired_or_not,last_claim,r_id)VALUES('$registration_no','$policy_expired_or_not',
    '$last_claim','$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../insurance.php?message=successfully added the info!");
} else {
    header("Location: ../insurance.php?message=insertion failed");
}

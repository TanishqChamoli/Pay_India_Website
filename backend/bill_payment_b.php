<?php
$target_dir =  "../uploads/";

$payment_type = $_POST['ptype'];
$ca_number = $_POST['cano'];
$operator_circle = $_POST['operatorcircle'];
$amount = $_POST['amount'];
$operator_circle_1 = $_POST['operatorcircle1'];
$due_date = $_POST['duedate'];
$client_name = $_POST['cname'];

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO bill_payment(payment_type,ca_number,operator_circle,amount,operator_circle_1,due_date,
    client_name,r_id)VALUES('$payment_type','$ca_number','$operator_circle','$amount','$operator_circle_1','$due_date',
    '$client_name','$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../bill payment.php?message=successfully added the info!");
} else {
    header("Location: ../bill payment.php?message=insertion failed");
}

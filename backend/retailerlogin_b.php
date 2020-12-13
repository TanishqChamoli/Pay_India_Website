<?php
$email = $_POST['Email-id'];
$pass =  $_POST['Password'];

$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT password FROM retailers";
$result = mysqli_query($conn, $sql);

$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (!(empty($ans))) {
    print_r($ans);
    $hashed_password = $ans[0]['password'];
    $re = password_verify($pass, $hashed_password);
    // print($re);
    if ($re) {
        session_start();
        $_SESSION['retailer'] = $email;
    }
}
$address = "http://localhost/Pay%20India%20Website/retailer.php";
header("Location: " . $address);

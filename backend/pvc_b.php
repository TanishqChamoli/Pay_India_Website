<?php

$target_dir =  "../uploads/";
$date = new DateTime();

$cname = $_POST['cname'];
$fpass = $_POST['fpass'];
$dispatchaddress = $_POST['dispatchaddress'];
$mobile = $_POST['mn'];

$document = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["document"]["name"]);
$targetFilePath = $target_dir . $document;

$conn = mysqli_connect('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$sql = "INSERT INTO pvc_card(cname,fpass,dispatch_address,mobile,document,r_id) 
    VALUES('$cname','$fpass','$dispatchaddress','$mobile','$document','$r_id')";
// print($sql);

if (mysqli_query($conn, $sql)) {
    move_uploaded_file($_FILES["document"]["tmp_name"], $targetFilePath);
    header("Location: ../pvc card.php?message=successfully added the info!");
} else {
    header("Location: ../pvc card.php?message=insertion failed");
}

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

$sql = "INSERT INTO pvc_card(cname,fpass,dispatch_address,mobile,document) 
    VALUES('$cname','$fpass','$dispatchaddress','$mobile','$document')";
// print($sql);

if (mysqli_query($conn, $sql)) {
    move_uploaded_file($_FILES["document"]["tmp_name"], $targetFilePath);
    header("Location: ../pvc card.php?message=successfully added the info!");
} else {
    header("Location: ../pvc card.php?message=insertion failed");
}

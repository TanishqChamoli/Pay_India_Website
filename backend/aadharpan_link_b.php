<?php

$target_dir =  "../uploads/";
$date = new DateTime();

$name = $_POST['afname'];
$mobile = $_POST['mn'];
$aadhar=$_POST['aadhar'];
$pan = $_POST['pan'];
$dob = $_POST['dob'];
$pincode = $_POST['pincode'];
$gender = $_POST['optradio'];

// echo  $gender;

$otherdocument = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $otherdocument = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $otherdocument;
    move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
}
// print_r($_FILES);
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}
// echo $comments.$otherdocument;

$conn = mysqli_connect('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$sql = "INSERT INTO aadharpan_link(name,mobile,aadhar_no,pan_card,dob,pincode,gender,other_document,comment,r_id) 
    VALUES('$name','$mobile','$aadhar','$pan','$dob','$pincode','$gender','$otherdocument','$comments','$r_id')";

// print($sql);

if (mysqli_query($conn, $sql)) {
    header("Location: ../aadharPANLink.php?message=successfully added the info!");
} else {
    header("Location: ../aadharPANLink.php?message=insertion failed");
}

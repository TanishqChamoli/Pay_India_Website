<?php

$target_dir =  "../uploads/";
$date = new DateTime();

$name = $_POST['afname'];
$dob = $_POST['dob'];
$mobile = $_POST['mn'];
$relative_name = $_POST['relativename'];
$relative_type = $_POST['selectrelative'];
$street = $_POST['street'];
$village = $_POST['village'];
$postoffice = $_POST['postoffice'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$district = $_POST['district'];
$ageproof_option = $_POST['ageproof'];
$addressproof_option = $_POST['addressproof'];
$gender = $_POST['Gender'];

$otherdocument = "";

// date+uniqueid

if (!empty($_FILES["otherdocument"]["name"])) {
    $otherdocument = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $otherdocument;
    move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
}
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}

$conn = mysqli_connect('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$ageproofdocument = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["ageproofdocument"]["name"]);
$targetFilePath = $target_dir . $ageproofdocument;
move_uploaded_file($_FILES["ageproofdocument"]["tmp_name"], $targetFilePath);

$addressproofdocument = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["addressproofdocument"]["name"]);
$targetFilePath = $target_dir . $addressproofdocument;
move_uploaded_file($_FILES["addressproofdocument"]["tmp_name"], $targetFilePath);

$sql = "INSERT INTO votercard(name,dob,mobile,relative_name,relative_type,street,village,postoffice,pincode,state,
district,ageproof_option,addressproof_option,gender,ageproofdocument,addressproofdocument,otherdocument,comments,r_id) 
VALUES('$name','$dob','$mobile','$relative_name','$relative_type','$street','$village','$postoffice','$pincode','$state',
'$district','$ageproof_option','$addressproof_option','$gender','$ageproofdocument','$addressproofdocument','$otherdocument','$comments','$r_id')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../votercard.php?message=successfully added the info!");
} else {
    header("Location: ../votercard.php?message=insertion failed");
}

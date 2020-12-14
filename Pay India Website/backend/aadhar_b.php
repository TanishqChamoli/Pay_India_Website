<?php
$target_dir =  "../uploads/";
$date = new DateTime();

$aadhar_no = $_POST['aadhar'];
$mobile = $_POST['mn'];

$other_documents = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $other_documents = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $other_documents;
    echo  $targetFilePath;
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
$sql = "INSERT INTO aadhar_reprint(aadhar_no,mobile,other_documents,comments,r_id) 
    VALUES('$aadhar_no','$mobile','$other_documents','$comments','$r_id')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../aadharreprint.php?message=successfully added the info!");
} else {
    header("Location: ../aadharreprint.php?message=insertion failed");
}

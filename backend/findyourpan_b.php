<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$applicant_full_name = $_POST['afname'];
$father_name = $_POST['fathername'];
$mother_name = $_POST['mothername'];
$address = $_POST['applicantaddress'];
$state = $_POST['state'];
$district = $_POST['district'];
$dob = $_POST['dob'];
$mobile = $_POST['mn'];
$gender = $_POST['optradio'];

$other_document = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $other_document = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $other_document;
    move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
}
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO findyourpan(applicant_full_name,father_name,mother_name,address,state,district,dob,mobile,gender,comments,other_document,r_id)
    VALUES('$applicant_full_name','$father_name','$mother_name','$address','$state','$district','$dob','$mobile','$gender','$comments','$other_document','$r_id')";

if ($conn->query($sql) == TRUE) {
    header("Location: ../findyourPAN.php?message=successfully added the info!");
} else {
    header("Location: ../findyourPAN.php?message=insertion failed");
}

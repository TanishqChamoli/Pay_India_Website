<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$aadhar_no = $_POST['aadhar'];
$uan_no = $_POST['uan'];
$pan_card_no = $_POST['pan'];
$client_name = $_POST['cname'];
$mobile_number = $_POST['mn'];
$acc_no = $_POST['accountno'];
$ifsc = $_POST['ifsc'];
$father_name = $_POST['fathername'];
$dob = $_POST['dob'];
$job_leaving_date = $_POST['job'];
$request_type = $_POST['request'];

$other_document = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $other_document = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $other_document;
    echo  $targetFilePath;
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
$sql = "INSERT INTO pfrefund(aadhar_no,uan_no,pan_card_no,client_name,mobile_number,acc_no,ifsc,father_name,dob,job_leaving_date,request_type,comments,other_document,r_id)
    VALUES('$aadhar_no','$uan_no','$pan_card_no','$client_name','$mobile_number','$acc_no','$ifsc','$father_name','$dob','$job_leaving_date','$request_type',
    '$comments','$other_document','$r_id')";

if ($conn->query($sql) == TRUE) {
    header("Location: ../pfrefund.php?message=successfully added the info!");
} else {
    header("Location: ../pfrefund.php?message=insertion failed");
}

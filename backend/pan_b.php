<?php
$target_dir =  "../uploads/";
$date = new DateTime();

$afname = $_POST['afname'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];
$nameprint = $_POST['nameprint'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dob = $_POST['dob'];
$gender = $_POST['Gender'];

$mn = "";
if (!empty($_POST["mn"])) {
    $mn = $_POST['mn'];
}

$other_documents = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $other_documents = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $other_documents;
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

$sql  = "INSERT INTO pan(afname,mn,aadhar,pan,nameprint,fname,mname,dob,gender,comments,other_document,r_id)
VALUES('$afname','$mn','$aadhar','$pan','$nameprint','$fname','$mname','$dob','$gender','$comments','$other_documents','$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../newPan.php?message=successfully added the info!");
} else {
    echo mysqli_error($conn);
}

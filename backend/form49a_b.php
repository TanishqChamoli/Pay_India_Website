<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$area_code = $_POST['afname'];
$aotype = $_POST['aotype'];
$range_code = $_POST['rangecode'];
$ao_no = $_POST['aono'];
$category = $_POST['category'];
$applicant_surname = $_POST['surname'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$abbreviation_yes_or_no = $_POST['optradio1'];
$abbreviation_of_name = $_POST['abb'];
$gender = $_POST['optradio'];

$photograph = "";
if (!empty($_FILES["Photograph"]["name"])) {
    $photograph = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["Photograph"]["name"]);
    $targetFilePath = $target_dir . $photograph;
    move_uploaded_file($_FILES["Photograph"]["tmp_name"], $targetFilePath);
}
$sign = "";
if (!empty($_FILES["signature"]["name"])) {
    $sign = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["signature"]["name"]);
    $targetFilePath = $target_dir . $sign;
    move_uploaded_file($_FILES["signature"]["tmp_name"], $targetFilePath);
}
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}
if($abbreviation_yes_or_no =='Yes'){
    $other_surname = $_POST['surname2'];
    $other_firstname = $_POST['firstname2'];
    $other_lastname = $_POST['lastname2'];
}else{
    $other_surname = "";
    $other_firstname = "";
    $other_lastname = "";
}

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO form49a(area_code,aotype,range_code,ao_no,category,applicant_surname,first_name,last_name,abbreviation_yes_or_no,abbreviation_of_name,other_surname,other_firstname
,other_lastname,gender,photograph,sign,comments,r_id)
    VALUES('$area_code','$aotype','$range_code','$ao_no','$category','$applicant_surname','$first_name','$last_name','$abbreviation_yes_or_no','$abbreviation_of_name','$other_surname','$other_firstname',
    '$other_lastname','$gender','$photograph','$sign','$comments','$r_id')";
// echo($sql);
if ($conn->query($sql) == TRUE) {
    header("Location: ../form49A.php?message=successfully added the info!");
    // echo ($)
} else {
    header("Location: ../form49A.php?message=insertion failed");
}

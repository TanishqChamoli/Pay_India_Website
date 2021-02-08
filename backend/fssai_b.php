<!-- enctype="multipart/form-data" -->

<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$aadhar_no = $_POST['aadhar'];
$pan_card_no = $_POST['pan'];
$business_detail = $_POST['businessdetail'];
$email = $_POST['email'];
$mobile_number = $_POST['mn'];

$photo_name = $aadhar_no . basename($_FILES["uploadphoto"]["name"]);
$targetFilePath = $target_dir . $photo_name;
move_uploaded_file($_FILES["uploadphoto"]["tmp_name"], $targetFilePath);

$noc = $aadhar_no . basename($_FILES["noc"]["name"]);
$targetFilePath = $target_dir . $noc;
move_uploaded_file($_FILES["noc"]["tmp_name"], $targetFilePath);

$address_proof = $aadhar_no . basename($_FILES["baproof"]["name"]);
$targetFilePath = $target_dir . $address_proof;
move_uploaded_file($_FILES["baproof"]["tmp_name"], $targetFilePath);

// not required.
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

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$sql = "INSERT INTO fssai(aadhar_no,pan_card_no,business_detail,email,mobile_number,photo_name,noc,address_proof,other_document,comments,r_id)VALUES('$aadhar_no','$pan_card_no','$business_detail','$email','$mobile_number','$photo_name','$noc','$address_proof','$other_document','$comments'.'$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../fssai.php?message=successfully added the info!");
} else {
    header("Location: ../fssai.php?message=insertion failed");
}

?>
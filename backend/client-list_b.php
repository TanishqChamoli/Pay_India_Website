<?php
$target_dir =  "../uploads/";
$date = new DateTime();

$year = $_POST['year'];
$month = $_POST['month'];
$y_n = $_POST['optradio'];
$purchasebills = $_POST['purchase-bills'];
$salebills = $_POST['sale-bills'];

$name_of_authorised_signatory = $_POST['user'][0];
$mobile_number = $_POST['user'][1];
$email = $_POST['user'][2];
$gst_no = $_POST['user'][3];
$client_name = $_POST['user'][4];
$address = $_POST['user'][5];
$pass_of_gst_portal = $_POST['user'][6];
$r_id = $_POST['user'][7];


$uploadpurchasebill = "";
if (!empty($_FILES["upload-purchase-bill"]["name"])) {
    $uploadpurchasebill = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["upload-purchase-bill"]["name"]);
    $targetFilePath = $target_dir . $other_documents;
    echo  $targetFilePath;
    move_uploaded_file($_FILES["upload-purchase-bill"]["tmp_name"], $targetFilePath);
}

$uploadsalebill = "";
if (!empty($_FILES["upload-sale-bill"]["name"])) {
    $uploadsalebill = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["upload-sale-bill"]["name"]);
    $targetFilePath = $target_dir . $other_documents;
    echo  $targetFilePath;
    move_uploaded_file($_FILES["upload-sale-bill"]["tmp_name"], $targetFilePath);
}
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}

$conn = mysqli_connect('localhost', 'root', '', 'payindia');

$sql = "INSERT INTO client_gst_data(year,month,y_n,purchasebills,salebills,uploadpurchasebill,uploadsalebill,name_of_authorised_signatory,mobile_number,email,gst_no,client_name,address,pass_of_gst_portal,comments,r_id) 
    VALUES('$year','$month','$y_n','$purchasebills','$salebills','$uploadpurchasebill','$uploadsalebill','$name_of_authorised_signatory','$mobile_number','$email','$gst_no','$client_name','$address','$pass_of_gst_portal','$comments','$r_id')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../client-list.php?message=successfully added the info!");
} else {
    header("Location: ../client-list.php?message=insertion failed");
}

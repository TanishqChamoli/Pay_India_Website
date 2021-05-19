<!-- enctype="multipart/form-data" -->

<?php
// $target_dir =  "../uploads/";
$date = new DateTime();
$name_of_authorised_signatory = $_POST['sig'];
$mobile_number = $_POST['mn'];
$email = $_POST['email'];
$gst_no = $_POST['gst'];
$client_name = $_POST['clientname'];
$address = $_POST['address'];
$pass_of_gst_portal= $_POST['gst_portal'];
$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$sql = "INSERT INTO add_client(name_of_authorised_signatory,mobile_number,email,gst_no,client_name,address,pass_of_gst_portal,r_id)VALUES('$name_of_authorised_signatory','$mobile_number','$email','$gst_no','$client_name','$address','$pass_of_gst_portal','$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../addClient.php?message=successfully added the info!");
} else {
    header("Location: ../addClient.php?message=insertion failed");
}

?>
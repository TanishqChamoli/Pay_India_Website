<?php include("head_check.php"); ?>
<?php
$target_dir = "../../reply/";
$date = new DateTime();

$q_id = $_POST['id'];
$r_id = $_POST['r_id'];
$comments = $_POST['comments'];
$db_date = $date->format('d-m-Y');
$type = 'itr_gst';

$conn = mysqli_connect('localhost', 'root', '', 'payindia');

$reply = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["reply"]["name"]);
$targetFilePath = $target_dir . $reply;
move_uploaded_file($_FILES["reply"]["tmp_name"], $targetFilePath);

$sql = "INSERT INTO admin1_replies(type,reply,comments,q_id,r_id,date) VALUES('$type', '$reply','$comments','$q_id','$r_id','$db_date')";
// print($sql);
if (mysqli_query($conn, $sql)) {
    $sql = "UPDATE itr_gst SET status='true' WHERE id ='$q_id'";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        $address = "http://localhost/Pay%20India%20Website/Admin/gstPending.php";
        header("Location: " . $address);
        die();
    } else {
        echo ("FAILED TO CHANGE THE STATUS");
    }
} else {
    echo ("FAILED TO REPLY PROBLEM IN INSERTION OF DATA");
}


?>
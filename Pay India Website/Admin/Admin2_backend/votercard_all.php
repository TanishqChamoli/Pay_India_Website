<?php include("head_check.php"); ?>
<?php
$target_dir = "../../reply/";
$date = new DateTime();

$q_id = $_POST['id'];
$comments = $_POST['comments'];
$db_date = $date->format('d-m-Y');
$type = 'votercard';

$conn = mysqli_connect('localhost', 'root', '', 'payindia');

$reply = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["reply"]["name"]);
$targetFilePath = $target_dir . $reply;
move_uploaded_file($_FILES["reply"]["tmp_name"], $targetFilePath);

$sql = "INSERT INTO admin2_replies(type,reply,comments,q_id,date) VALUES('$type', '$reply','$comments','$q_id','$db_date')";
// print($sql);
if (mysqli_query($conn, $sql)) {
    $sql = "UPDATE votercard SET status='true' WHERE id ='$q_id'";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        $address = "http://localhost/Pay%20India%20Website/Admin/voterCardPending.php";
        header("Location: " . $address);
        die();
    } else {
        echo ("FAILED TO CHANGE THE STATUS");
    }
} else {
    echo ("FAILED TO REPLY PROBLEM IN INSERTION OF DATA");
}


?>
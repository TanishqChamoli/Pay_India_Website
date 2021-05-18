<?php

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$gstNo = $_POST['gst'];

$sql = "SELECT * FROM msme WHERE gst_no = '$gstNo'";

$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];

$userExists = "false";
if ($r_id != null && $r_id != '') {
	$userExists = "true";
}

header("Location: ../addClient.php?userExists=$userExists");

?>
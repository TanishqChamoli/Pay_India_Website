<?php

if ($_POST['Email-id'] == "distributor@test.com" && $_POST['Password'] == "test") {
    session_start();
    $_SESSION['distributor'] = $_POST['Email-id'];
}
$address = "http://localhost/Pay%20India%20Website/Distributor/mainpage.php";
header("Location: " . $address);
<?php

if ($_POST['email'] == "admin2@test.com" && $_POST['password'] == "test") {
    session_start();
    $_SESSION['admin2'] = $_POST['email'];
}
$address = "http://localhost/Pay%20India%20Website/Admin/admin2.php";
header("Location: " . $address);

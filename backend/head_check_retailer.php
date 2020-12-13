<?php
session_start();
$address = "http://localhost/Pay%20India%20Website/customer_login.php";

// check the session if true or not
// includede in the nav bar

if (!isset($_SESSION['retailer'])) {
    header("Location: ".$address);
    die();
}

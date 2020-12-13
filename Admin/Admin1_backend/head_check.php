<?php
session_start();
$address = "http://localhost/Pay%20India%20Website/AdminLogin1.php";

// check the session if true or not
// includede in the nav bar

if (!isset($_SESSION['admin1'])) {
    header("Location: ".$address);
    die();
}

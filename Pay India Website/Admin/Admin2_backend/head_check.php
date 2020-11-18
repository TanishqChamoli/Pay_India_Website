<?php
session_start();
$address = "http://localhost/Pay%20India%20Website/AdminLogin2.php";

// check the session if true or not
// includede in the nav bar 2

if (!isset($_SESSION['admin2'])) {
    header("Location: ".$address);
    die();
}

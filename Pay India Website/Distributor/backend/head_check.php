<?php
session_start();
$address = "http://localhost/Pay%20India%20Website/service_provider_login.php";

// check the session if true or not
// includede in the nav bar

if (!isset($_SESSION['distributor'])) {
    header("Location: ".$address);
    die();
}

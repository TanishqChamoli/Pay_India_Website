<?php
session_start();
$address = "http://localhost/Pay%20India%20Website/profile.php";
$address2 = "http://localhost/Pay%20India%20Website/";
if (!isset($_SESSION['distributor'])) {
    header("Location: " . $address2);
} else {
    header("Location: " . $address);
}

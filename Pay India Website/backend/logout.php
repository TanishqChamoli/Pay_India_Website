<?php
session_start();
session_destroy();
$address = "http://localhost/Pay%20India%20Website/index.php";
header("Location: " . $address);

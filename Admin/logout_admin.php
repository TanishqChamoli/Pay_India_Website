<?php
session_start();
session_destroy();
$address = "http://localhost/Pay%20India%20Website/Admin/admin1.php";
header("Location: ".$address );

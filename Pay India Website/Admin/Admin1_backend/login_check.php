<?php

if($_POST['email']=="admin1@test.com" && $_POST['password']=="test"){
    session_start();
    $_SESSION['admin1']= $_POST['email'];
}
$address = "http://localhost/Pay%20India%20Website/Admin/admin1.php";
header("Location: ".$address );

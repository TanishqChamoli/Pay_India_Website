<?php
$target_dir =  "../uploads/";
$date = new DateTime();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$nfname = $_POST['nfname'];
$nlname = $_POST['nlname'];
$relation = $_POST['relation'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$typev = $_POST['typev'];
$typeu = $_POST['typeu'];
$registeration = $_POST['registeration'];
$year = $_POST['year'];
$date = $_POST['date'];
$name = $_POST['name'];
$model = $_POST['model'];
$enginno = $_POST['enginno'];
$chassisno = $_POST['chassisno'];
$loan = $_POST['loan'];
$bankname = "";
if (!empty($_POST["bankname"])) {
    $bankname = $_POST['bankname'];
}
$engineCap = $_POST['engineCap'];
$pai = "false";
if (!empty($_POST['pai'])) {
    $pai = $_POST['pai'];
}
$lil = "false";
if (!empty($_POST['lil'])) {
    $lil = $_POST['lil'];
}
$conf1 = $_POST['conf1'];
$conf2 = $_POST['conf2'];

$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}
$adhaar = "";
if (!empty($_FILES["adhaar"]["name"])) {
    $adhaar = $date . "-" . uniqid() . basename($_FILES["adhaar"]["name"]);
    $targetFilePath = $target_dir . $adhaar;
    move_uploaded_file($_FILES["adhaar"]["tmp_name"], $targetFilePath);
}
$registry = "";
if (!empty($_FILES["registry"]["name"])) {
    $registry = $date . "-" . uniqid() . basename($_FILES["registry"]["name"]);
    $targetFilePath = $target_dir . $registry;
    move_uploaded_file($_FILES["registry"]["tmp_name"], $targetFilePath);
}

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO insurance(fname,lname,address_person,pincode,state_person,district,city,nfname,nlname,relation,email,phone,typev,typeu,registation,yyear,ddate,nname,model,enginno,chassisno,loan,bankname,enginCap,pai,lil,adhaar,registry,conf1,conf2,comments,r_id)VALUES('$fname','$lname','$address','$pincode','$state','$district','$city','$nfname','$nlname','$relation','$email','$phone','$typev','$typeu','$registeration','$year','$date','$name','$model','$enginno','$chassisno','$loan','$bankname','$engineCap','$pai','$lil','$adhaar','$registry','$conf1','$conf2','$comments','$r_id')";
if ($conn->query($sql) == TRUE) {
    header("Location: ../insurance.php?message=successfully added the info!");
} else {
    header("Location: ../insurance.php?message=insertion failed");
}

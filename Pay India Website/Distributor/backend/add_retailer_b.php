<?php
print_r($_POST);

$email = $_POST['email'];
$mn = $_POST['mn'];
$cname = $_POST['cname'];
$address = $_POST['address'];
$password = $_POST['password'];
$nii = $_POST['nii'];
$tir = $_POST['tir'];
$np = $_POST['np'];
$grr = $_POST['grr'];
$rbr = $_POST['rbr'];
$lbr = $_POST['lbr'];
$vir = $_POST['vir'];
$upr = $_POST['upr'];
$gstreg = $_POST['gstreg'];
$pfrefund = $_POST['pfrefund'];
$fastpanrate = $_POST['fastpanrate'];
$pvc = $_POST['pvc'];
$nadr = $_POST['nadr'];
$udyog = $_POST['udyog'];

$password = password_hash($password, PASSWORD_DEFAULT);

$conn = mysqli_connect('localhost', 'root', '', 'payindia');

$sql = "INSERT INTO retailers(email,mobile,cname,address,password,nii,tir,np,grr,rbr,lbr,vir,upr,gstreg,pfrefund,fastpanrate,pvc,nadr,udyog)
value('$email','$mn','$cname','$address','$password','$nii','$tir','$np','$grr','$rbr','$lbr','$vir','$upr','$gstreg','$pfrefund','$fastpanrate','$pvc','$nadr','$udyog')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../add-retailers.php?message=Successfully added the info!");
} else {
    header("Location: ../add-retailers.php?message=" . mysqli_error($conn) . " - Insertion Failed!");
}

<?php
$target_dir =  "../uploads/";
$date = new DateTime();
    $client_name = $_POST['cname'];
    $username = $_POST['uname'];
    $office_address = $_POST['oaddress'];
    $pincode = $_POST['pincode'];
    $mobile_number = $_POST['mn'];
    $email = $_POST['emddress'];
    $state1 = $_POST['state'];
    $firm_name = $_POST['firmname'];
    $aadhar_no = $_POST['aadhar'];
    $pan_no=$_POST['PANnumber'];
    $account_type = $_POST['acctype'];
    
    $conn = new mysqli('localhost','root','','payindia');

    if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }

    else
    {
        echo "DATABASE connected successfully</br>";
    }
    $sql = "INSERT INTO index_pan_card_uti(client_name,username,office_address,pincode,mobile_number,email,state1,
    firm_name,aadhar_no,pan_no,account_type)VALUES('$client_name','$username','$office_address','$pincode','$mobile_number',
    '$email','$state1','$firm_name','$aadhar_no','$pan_no','$account_type')";
    if($conn->query($sql)==TRUE){
        header("Location: ../index pan card uti.php?message=successfully added the info!");
    }
    else{
        header("Location: ../index pan card uti.php?message=insertion failed");
    }

?>
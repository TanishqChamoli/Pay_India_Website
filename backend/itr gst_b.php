<?php
$target_dir =  "../uploads/";

    $client_name = $_POST['cname'];
    $firm_name = $_POST['firmname'];
    $client_email = $_POST['email'];
    $mobile_number = $_POST['mn'];
    $firm_type = $_POST['firm'];
    $office_address = $_POST['oaddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $acc_no = $_POST['accountno'];
    $ifsc = $_POST['ifsc'];
    $nature_of_business_activity = $_POST['bactivity'];
    $placeofbusiness = $_POST['placeofbusiness'];
    $confirm_docs = $_POST['optradio'];

    $photo = $client_name.basename($_FILES["filename"]["name"]);
    $targetFilePath = $target_dir . $photo;
    move_uploaded_file($_FILES["filename"]["tmp_name"], $targetFilePath);

    $other_document = "";
    if (!empty($_FILES["otherdocument"]["name"])) {
        $other_document = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
        $targetFilePath = $target_dir . $other_document;
        echo  $targetFilePath;
        move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
    }

    $conn = new mysqli('localhost','root','','payindia');

    if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }

    else
    {
        echo "DATABASE connected successfully</br>";
    }
    $sql = "INSERT INTO itr_gst(client_name,firm_name,client_email,mobile_number,firm_type,office_address,city,pincode,acc_no,ifsc,
    nature_of_business_activity,placeofbusiness,photo,confirm_docs,other_document)VALUES('$client_name','$firm_name','$client_email',
    '$mobile_number','$firm_type','$office_address','$city','$pincode','$acc_no','$ifsc','$nature_of_business_activity','$placeofbusiness',
    '$photo','$confirm_docs','$other_document')";

    if($conn->query($sql)==TRUE){
        header("Location: ../itr gst.php?message=successfully added the info!");
    }
    else{
        header("Location: ../itr gst.php?message=insertion failed");
    }

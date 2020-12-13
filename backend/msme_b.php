<?php
$target_dir =  "../uploads/";
$date = new DateTime();
    $aadhar_no = $_POST['aadhar'];
    $gst_no = $_POST['gst'];
    $client_name = $_POST['cname'];
    $category = $_POST['category'];
    $mobile_number = $_POST['mn'];
    $acc_no = $_POST['accountno'];
    $ifsc = $_POST['ifsc'];
    $firm_name = $_POST['firmname'];
    $firm_type = $_POST['firmtype'];
    $firm_date = $_POST['firmdate'];
    $nature_of_work = $_POST['natureofwork'];
    $office_address = $_POST['oaddress'];
    $state1 = $_POST['state'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['optradio'];
    $emp_working = $_POST['ew'];
    $physically_handicapped = $_POST['optradio1'];

    $pan_card = $aadhar_no.basename($_FILES["myfile"]["name"]);
    $targetFilePath = $target_dir . $pan_card;
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath);

    $other_document = "";
    if (!empty($_FILES["otherdocument"]["name"])) {
        $other_document = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
        $targetFilePath = $target_dir . $other_document;
        echo  $targetFilePath;
        move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
    }
    $comments = "";
    if (!empty($_POST["comments"])) {
        $comments = $_POST['comments'];
    }

    $conn = new mysqli('localhost','root','','payindia');

    $sql = "INSERT INTO msme(aadhar_no,gst_no,client_name,category,mobile_number,acc_no,ifsc,firm_name,firm_type,firm_date,nature_of_work,
    office_address,state1,district,pincode,gender,emp_working,physically_handicapped,comments,pan_card,other_document)VALUES('$aadhar_no','$gst_no','$client_name',
    '$category','$mobile_number','$acc_no','$ifsc','$firm_name','$firm_type','$firm_date','$nature_of_work','$office_address','$state1','$district','$pincode',
    '$gender','$emp_working','$physically_handicapped','$comments','$pan_card','$other_document')";

    if($conn->query($sql)==TRUE){
        header("Location: ../fssai.php?message=successfully added the info!");
    }
    else{
        header("Location: ../fssai.php?message=insertion failed");
    }

?>
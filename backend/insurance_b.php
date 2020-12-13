<?php
$target_dir =  "../uploads/";

    $registration_no = $_POST['regnumber'];
    $policy_expired_or_not = $_POST['policy'];
    $last_claim = $_POST['claim'];
    
    
    $conn = new mysqli('localhost','root','','payindia');

    if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }
    else
    {
        echo "DATABASE connected successfully</br>";
    }
    $sql = "INSERT INTO insurance(registration_no,policy_expired_or_not,last_claim)VALUES('$registration_no','$policy_expired_or_not',
    '$last_claim')";
    if($conn->query($sql)==TRUE){
        header("Location: ../insurance.php?message=successfully added the info!");
    }
    else{
        header("Location: ../insurance.php?message=insertion failed");
    }

?>
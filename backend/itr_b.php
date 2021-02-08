<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$ayear = $_POST["a-year"];
$incomedetails = $_POST["incomedetails"];
$anualsalary = $_POST["a-s"];
$note = $_POST["note"];
$salary = $_POST["salary"];
$abia = $_POST["abia"];
$businessname = $_POST["business-name"];
$bid = $_POST["bid"];
$aria = $_POST["aria"];
$rid = $_POST["rid"];
$aosa = $_POST["aosa"];
$osd = $_POST["osd"];
$aaia = $_POST["aaia"];
$aid = $_POST["aid"];
$lip = $_POST["lip"];
$csf = $_POST["csf"];
$ppf = $_POST["ppf"];
$hip = $_POST["hip"];
$odus = $_POST["odus"];
$gdoodus = $_POST["gdoodus"];
$oa = $_POST["oa"];
$gdooa = $_POST["gdooa"];
$everify = $_POST["e-verify"];
$balancereturn = $_POST["balancereturn"];
$capitalgain = $_POST["capitalgain"];
$taxpayable = $_POST["tax-payable"];

$other_documents = "";
if (!empty($_FILES["otherdocument"]["name"])) {
    $other_documents = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["otherdocument"]["name"]);
    $targetFilePath = $target_dir . $other_documents;
    move_uploaded_file($_FILES["otherdocument"]["tmp_name"], $targetFilePath);
}
$comments = "";
if (!empty($_POST["comments"])) {
    $comments = $_POST['comments'];
}
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];
$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql  = "INSERT INTO itr(ayear,incomedetails,anualsalary,note,salary,abia,businessname,bid,aria,rid,aosa,osd,aaia,aid,lip,csf,ppf,hip,odus,gdoodus,oa,gdooa,everify,balancereturn,capitalgain,taxpayable,comments,other_documents,r_id)VALUES('$ayear','$incomedetails','$anualsalary','$note','$salary','$abia','$businessname','$bid','$aria','$rid','$aosa','$osd','$aaia','$aid','$lip','$csf','$ppf','$hip','$odus','$gdoodus','$oa','$gdooa','$everify','$balancereturn','$capitalgain','$taxpayable','$comments','$other_documents','$r_id')";
//print_r($sql);
if ($conn->query($sql) == TRUE) {
    header("Location: ../itr.php?message=successfully added the info!");
} else {
    header("Location: ../itr.php?message=insertion failed");
}

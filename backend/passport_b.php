<?php
$target_dir =  "../uploads/";
$date = new DateTime();
$apply_for = $_POST['apply'];
$type_of_application = $_POST['type-of-application'];
$passport_type = $_POST['passporttype'];
$first_name = $_POST['afname'];
$middle_name = $_POST['amname'];
$surname = $_POST['asname'];
$aadhar_no = $_POST['aadhar'];
$marital_status = $_POST['maritalstatus'];
$dob = $_POST['dob'];
$birth_country_india = $_POST['birthcountry'];
$birthplace = $_POST['birthplace'];
$state1 = $_POST['state'];
$district = $_POST['district'];
$citizenship = $_POST['citizenship'];
$pan_card_no = $_POST['pan'];
$voter_id = $_POST['voter-id'];
$education_qualification = $_POST['education-qualification'];
$emp_type = $_POST['sel_emp_type'];
$govt_servant = $_POST['govt-servant'];
$non_ncr = $_POST['non-ncr'];
$mark = $_POST['mark'];
$other_names = $_POST['other-names'];
$name_changed = $_POST['name-changed'];
$father_first_name = $_POST['f-f-name'];
$father_middle_name = $_POST['f-m-name'];
$father_surname = $_POST['f-s-name'];
$mother_first_name = $_POST['m-f-name'];
$mother_middle_name = $_POST['m-m-name'];
$mother_surname = $_POST['m-s-name'];
$guardian_first_name = $_POST['l-g-f-name'];
$guardian_middle_name = $_POST['l-g-m-name'];
$guardian_surname = $_POST['l-g-s-name'];
$present_address = $_POST['p-address'];
$house_no = $_POST['h-no_'];
$state_province = $_POST['state/province'];
$present_district = $_POST['present-district'];
$pincode = $_POST['pin'];
$mobile_number = $_POST['mn'];
$email = $_POST['email'];
$address1 = $_POST['address'];
$applicant_name = $_POST['e-name'];
$applicant_mobile = $_POST['e-mn'];
$applicant_email = $_POST['e-email'];
$certificate1 = $_POST['certificate'];
$passport_detail = $_POST['passport-detail'];
$applied_for_passport = $_POST['ap-for-passport'];
$pending_proceeding = $_POST['o-d-1'];
$warrant_or_summon = $_POST['o-d-2'];
$warrant_for_arrest = $_POST['o-d-3'];
$prohibit_departure = $_POST['o-d-4'];
$convicted = $_POST['o-d-5'];
$refused_denied_passport = $_POST['o-d-6'];
$passport_impounded = $_POST['o-d-7'];
$passport_revoked = $_POST['o-d-8'];
$foreign_citizenship = $_POST['o-d-9'];
$passport_other_country = $_POST['o-d-10'];
$surrendered = $_POST['o-d-11'];
$renunciation = $_POST['o-d-12'];
$emergency_certi = $_POST['o-d-13'];
$deported_from_other_country = $_POST['o-d-14'];
$repatriated = $_POST['o-d-15'];

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
$proof_of_birth = $_POST['proof-of-birth'];

$residential_birth_proof = $_POST['proof-present-residential-proof-birth'];

// $proof_of_birth = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["proof-of-birth"]["name"]);
// $targetFilePath = $target_dir . $proof_of_birth;
// move_uploaded_file($_FILES["proof-of-birth"]["tmp_name"], $targetFilePath);

// $residential_birth_proof = $date->format('d-m-Y') . "-" . uniqid() . basename($_FILES["proof-present-residential-proof-birth"]["name"]);
// $targetFilePath = $target_dir . $residential_birth_proof;
// move_uploaded_file($_FILES["proof-present-residential-proof-birth"]["tmp_name"], $targetFilePath);

$conn = new mysqli('localhost', 'root', '', 'payindia');
session_start();
$retailer_email = $_SESSION['retailer'];

$sql = "SELECT * FROM retailers WHERE email = '$retailer_email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$r_id = $ans[0]['id'];
$sql = "INSERT INTO passport(apply_for,type_of_application,passport_type,first_name,middle_name,surname,aadhar_no,marital_status,
    dob,birth_country_india,birthplace,state1,district,citizenship,pan_card_no,voter_id,education_qualification,
    emp_type,govt_servant,non_ncr,mark,other_names,name_changed,father_first_name,father_middle_name,father_surname,mother_first_name,
    mother_middle_name,mother_surname,guardian_first_name,guardian_middle_name,guardian_surname,present_address,
    house_no,state_province,present_district,pincode,mobile_number,email,address1,applicant_name,applicant_mobile,
    applicant_email,certificate1,passport_detail,applied_for_passport,pending_proceeding,warrant_or_summon,warrant_for_arrest,
    prohibit_departure,convicted ,refused_denied_passport,passport_impounded,passport_revoked,foreign_citizenship,
    passport_other_country,surrendered,renunciation,emergency_certi,deported_from_other_country,repatriated,comments,
    proof_of_birth,residential_birth_proof,other_document,r_id)VALUES('$apply_for','$type_of_application','$passport_type','$first_name',
    '$middle_name','$surname','$aadhar_no','$marital_status','$dob','$birth_country_india','$birthplace','$state1','$district','$citizenship',
    '$pan_card_no','$voter_id','$education_qualification','$emp_type','$govt_servant','$non_ncr','$mark','$other_names','$name_changed',
    '$father_first_name','$father_middle_name','$father_surname','$mother_first_name','$mother_middle_name','$mother_surname','$guardian_first_name',
    '$guardian_middle_name','$guardian_surname','$present_address','$house_no','$state_province','$present_district','$pincode',
    '$mobile_number','$email','$address1','$applicant_name','$applicant_mobile','$applicant_email','$certificate1','$passport_detail',
    '$applied_for_passport','$pending_proceeding','$warrant_or_summon','$warrant_for_arrest','$prohibit_departure','$convicted','$refused_denied_passport',
    '$passport_impounded','$passport_revoked','$foreign_citizenship','$passport_other_country','$surrendered','$renunciation','$emergency_certi',
    '$deported_from_other_country','$repatriated','$comments','$proof_of_birth','$residential_birth_proof','$other_document','$r_id')";

if ($conn->query($sql) == TRUE) {
    header("Location: ../passport.php?message=successfully added the info!");
} else {
    header("Location: ../passport.php?message=insertion failed");
}

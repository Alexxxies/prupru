<?php
error_reporting(E_ALL);
include("../dbcon.php");
$error='';
if(isset($_POST['submit']))
{
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
    $middlename = filter_input(INPUT_POST, "middlename", FILTER_SANITIZE_SPECIAL_CHARS); 
    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
    $male = filter_input(INPUT_POST, "male", FILTER_SANITIZE_SPECIAL_CHARS);
    $female = filter_input(INPUT_POST, "female", FILTER_SANITIZE_SPECIAL_CHARS);
    $birthday = filter_input(INPUT_POST, "birthday", FILTER_SANITIZE_SPECIAL_CHARS);
    $birthplace = filter_input(INPUT_POST, "birthplace", FILTER_SANITIZE_SPECIAL_CHARS);
    $sss = filter_input(INPUT_POST, "sss", FILTER_SANITIZE_SPECIAL_CHARS);
    $tin = filter_input(INPUT_POST, "tin", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $pluk = filter_input(INPUT_POST, "pluk", FILTER_SANITIZE_SPECIAL_CHARS);
    $contact = filter_input(INPUT_POST, "contact", FILTER_SANITIZE_SPECIAL_CHARS);
    $zip = filter_input(INPUT_POST, "zip", FILTER_SANITIZE_SPECIAL_CHARS);
    $region = filter_input(INPUT_POST, "region", FILTER_SANITIZE_SPECIAL_CHARS);
    $province = filter_input(INPUT_POST, "province", FILTER_SANITIZE_SPECIAL_CHARS);
    $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
    $barangay = filter_input(INPUT_POST, "barangay", FILTER_SANITIZE_SPECIAL_CHARS);
    $lot = filter_input(INPUT_POST, "lot", FILTER_SANITIZE_SPECIAL_CHARS);
    $agentname = filter_input(INPUT_POST, "agentname", FILTER_SANITIZE_SPECIAL_CHARS);
    $agentcode = filter_input(INPUT_POST, "agentcode", FILTER_SANITIZE_SPECIAL_CHARS);
    $efirst = filter_input(INPUT_POST, "efirst", FILTER_SANITIZE_SPECIAL_CHARS);
    $emiddle = filter_input(INPUT_POST, "emiddle", FILTER_SANITIZE_SPECIAL_CHARS);
    $elast = filter_input(INPUT_POST, "elast", FILTER_SANITIZE_SPECIAL_CHARS);
    $rel = filter_input(INPUT_POST, "rel", FILTER_SANITIZE_SPECIAL_CHARS);
    $econtact = filter_input(INPUT_POST, "econtact", FILTER_SANITIZE_SPECIAL_CHARS);
    $eaddress = filter_input(INPUT_POST, "eaddress", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $upload = filter_input(INPUT_POST, "upload", FILTER_SANITIZE_SPECIAL_CHARS);
    
    //gender
    $gender = '';
    if(isset($_POST['gender']) == "male"){
        $male = $_POST['gender'];
        $gender = $male;
    }elseif(isset($_POST['gender']) == "female"){
        $female = $_POST['gender'];
        $gender = $female;
    }
    //yan parang ganan mangyayari

    //civil status
    $civilstatus = ' ';
    $spouse = '';
    $maiden = '';
    if(isset($_POST['civil']) == "single"){
        $single = $_POST['civil'];
        $civilstatus = $single;
    }elseif(isset($_POST['civil']) == "married"){
        $married = $_POST['civil'];
        $civilstatus = $married;
        $spouse = filter_input(INPUT_POST, "spouse", FILTER_SANITIZE_SPECIAL_CHARS);
        $maiden = filter_input(INPUT_POST, "maiden", FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_POST['civil']) == "widow"){
        $widow = $_POST['civil'];
        $civilstatus = $widow;
    }

    //gove
    $gov_emp = '';
    $companyname = '';
    $position = '';
    if(isset($_POST['gov']) == "yes"){
        $gov_emp = $_POST['gov'];
        $companyname = filter_input(INPUT_POST, "companyname", FILTER_SANITIZE_SPECIAL_CHARS);
        $position = filter_input(INPUT_POST, "position", FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_POST['gov']) == "no"){
        $gov_emp = $_POST['gov'];
    }


    $sql = "SELECT * FROM applicantdb WHERE email = '$email'";
    $result = mysqli_query($conn, $sql); 

    if(mysqli_num_rows($result)>0){//so if meron result, may error na email has been taken
        $error = 
        '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Email has already been taken!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
    else
    {
        $sql = "INSERT INTO `applicantdb`(`Email`, `Lastname`, `Firstname`, `Middlename`, 
        `birthdate`, `birthplace`, `gender`, `civil_status`, `contact_number`, `streetname`, `barangay`, `city`, `province`,
         `zip`, `sss`, `tin`, `pluk`, `recruiter_name`,`e_last`, `e_first`, `e_middle`, `applicant_rel`,
          `agent_contact`, `agent_address`, `company_name`, `position`, `if_maiden`, `gov_employ`,
           `if_spouse`)
        VALUES ('$email','$lastname', '$firstname','$middlename','$birthday','$birthplace','$gender',
        '$civilstatus','$contact','$lot','$barangay','$city','$province','$zip','$sss','$tin','$pluk','$agentname',
        '$elast','$efirst','$emiddle','$rel','$econtact','$eaddress','$companyname','$position','$maiden',
        '$gov_emp','$spouse')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo 'successfull';
        }else{
            echo 'something went wrong';
        }
    }
}
echo $error;
?>
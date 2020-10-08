<?php

    $fullName_error = $userName_error = $passwd_error = $confirmPasswd_error = $email_error = $phone_error = $dob_error = $ssn_error = "";
    $fullName = $userName =  $passwd = $confirmPasswd = $email = $phone = $dob = $ssn = $success = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])){
            $fullName_error = "Name is required!";
        }else {
            $fullName = $_POST["name"];
        }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user"])){
            $userName_error = "Username is required!";
        }else {
            $userName = $_POST["user"];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mail"])){
            $email_error = "Email is required!";
        }else {
            $email = $_POST["mail"];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])){
            $passwd_error = "Password is required!";
    }else {
        $passwd = $_POST["pass"];
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["conf"])){
            $confirmPasswd_error = "Password is required!";
     }else {
        $confirmPasswd = $_POST["conf"];
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["phone"])){
            $phone_error = "Phone is required!";
     }else {
        $phone = $_POST["phone"];
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["dob"])){
            $dob_error = "Date of Birth is required!";
    }else {
        $dob = $_POST["dob"];
    }
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ssn"])){
            $ssn_error = "Social Security is required!";
    }else {
        $ssn = $_POST["ssn"];
    }
} 
    $data = $_POST;
    if ($data['pass'] !== $data['conf']) {
    echo '<script>alert("Password and Confirm password should match!")</script>';   
 }
    if($fullName_error == '' and $userName_error == '' and $passwd_error == '' and $confirmPasswd_error == '' and $email_error == '' and $phone_error == '' and $dob_error == '' and $ssn_error == ''){
    $message_body='';
    unset($_POST['submit']);
    foreach($_POST as $key => $value){
    $message_body .= "$key: $value\n";
    $success = "Registration Complete";
    $fullName = $userName =  $passwd = $confirmPasswd = $email = $phone = $dob = $ssn = "";
    }
}
}
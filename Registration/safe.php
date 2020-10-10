<?php
    //set all variable to empty strings
    $fullName_error = $userName_error = $passwd_error = $confirmPasswd_error = $email_error = $phone_error = $dob_error = $ssn_error = $existUser_error = $existPass_error = "";
    $fullName = $userName =  $passwd = $confirmPasswd = $email = $phone = $dob = $ssn = $success = $existUser = $existPass = "";

    //submit form for registration page
    if (isset($_POST['register'])){    //if register button is pressed
    pre_r($_POST); //check if POST has been submitted  
        
    //validation rules for all fields to not be empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])){
            $fullName_error = "Name is required!";
        }else {
            $fullName = $_POST["name"]; //assigns input value to corresponding variable
        }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user"])){
            $userName_error = "Username is required!";
        }else {
            $userName = $_POST["user"];  //assigns input value to corresponding variable
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mail"])){
            $email_error = "Email is required!";
        }else {
            $email = $_POST["mail"];  //assigns input value to corresponding variable
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])){
            $passwd_error = "Password is required!";
    }else {
        $passwd = $_POST["pass"];  //assigns input value to corresponding variable
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["conf"])){
            $confirmPasswd_error = "Password is required!";
     }else {
        $confirmPasswd = $_POST["conf"];  //assigns input value to corresponding variable
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["phone"])){
            $phone_error = "Phone is required!";  
     }else {
        $phone = $_POST["phone"];  //assigns input value to corresponding variable
    }
 }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["dob"])){
            $dob_error = "Date of Birth is required!";
    }else {
        $dob = $_POST["dob"];  //assigns input value to corresponding variable
    }
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ssn"])){
            $ssn_error = "Social Security is required!";
    }else {
        $ssn = $_POST["ssn"];  //assigns input value to corresponding variable
    }
} 

    //checks for no errors in validation and sets the keys and values
    if($fullName_error == '' and $userName_error == '' and $passwd_error == '' and $confirmPasswd_error == '' and $email_error == '' and $phone_error == '' and $dob_error == '' and $ssn_error == ''){
            //password match confirmation
    $data = $_POST;
    if ($data['pass'] !== $data['conf']) {
    echo '<script>alert("Password and Confirm password should match!")</script>';   
 }
        echo "Name: ".$_POST['name'].'<br>';
        echo "Username: ".$_POST['user'].'<br>';
        echo "email: ".$_POST['mail'].'<br>';
        echo "Password: *********" . '<br>';
        echo "email: *********".'<br>';
        echo "phone: ".$_POST['phone'].'<br>';
        echo "date: ".$_POST['dob'].'<br>';
        echo "ssn: ".$_POST['ssn'].'<br>';
        $fullName = $userName =  $passwd = $confirmPasswd = $email = $phone = $dob = $ssn = "";
        }
}
}

//submit form for login page
if (isset($_POST['login'])){ //when login button is pressed
    pre_r($_POST); //check if POST has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["existUser"])){
            $existUser_error = "Name is required!";
        }else {
            $existUser = $_POST["existUser"]; //assigns input value to corresponding variable
        }
    }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["existPass"])){
                $existPass_error = "Password is required!";
            }else {
                $existPass = $_POST["existPass"]; //assigns input value to corresponding variable
            }
        }
    if($existUser_error == '' and $existPass_error == ''){
    echo "First Name: ".$_POST['existUser'].'<br>'; //print out First Name: + name input
    echo "Password: *******".'<br>'; //print out password as *
    $existUser = $existPass ='';
    }
}

//function to store inputs
function pre_r( $array ){
}
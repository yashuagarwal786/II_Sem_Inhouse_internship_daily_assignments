<?php

$name = $_POST["name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$txtPhone = $_POST["txtPhone"];
$pwdPassword = $_POST["pwdPassword"]


echo "Values Received:<br>";
echo "Name: $name <br>";
echo "Gender: $gender <br>";
echo "Email: $email <br>";
echo "Phone: $txtPhone";


//empty
$errors = [];

if(empty($name)){
    $errors[] = "Name is empty <br>";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "email is invalid";
}
if(empty($pwdPassword)){
    $errors[] = "Password cannot be empty";
}
elseif(strlen($pwdPassword)!=8){
    $errors[] = "Password must be of at least 8 digits"
}
if(empty($txtPhone)){
    $errors[] = "Phone Number is Required";
}

elseif(!is_numeric($txtPhone)){
    $errors[] = "Phone Number is invalid";
}
elseif(strlen($txtPhone)!=10){
    $errors[] = "Phone Number must be of 10 digits";
}

if(count($errors)>0){
foreach($errors as $error){
    echo $error. "<br>";
}
}else{
    echo "<br> Form Submitted Successfully";
}










?>
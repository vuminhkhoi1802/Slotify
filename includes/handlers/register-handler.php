<?php

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    return $inputText;
}

if(isset($_POST['registerButton'])) {
    //Register button was pressed

    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $emailID = sanitizeFormString($_POST['emailID']);
    $emailConfirmation = sanitizeFormString($_POST['emailConfirmation']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $account->register($username, $firstName, $lastName, $emailID, $emailConfirmation, $password, $password2);



}


?>
<?php
session_start();
require_once ("connect.php");
if (isset($_POST['userRegistrationInvoice'])){
    $name = $_POST['userRegistrationName'];
    $invoice = $_POST['userRegistrationInvoice'];
    $email = $_POST['userRegistrationEmail'];
    $phone = $_POST['userRegistrationPhone'];
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_invoice'] = $invoice;
    $_SESSION['user_phone'] = $phone;
    $q="select * from user where user_email = '".$email."' or user_phone = '".$phone."' or user_invoice = '".$invoice."'";
    $r = make_query($q) or die(mysqli_error());
    while ($a = mysqli_fetch_array($r)) {
        $check = true;
    }
    if ($check){
        echo json_encode(array('success' => 0));
    } else {
        echo json_encode(array('success' => 1));
    }
}
if (isset($_POST['userRegistrationPassword'])){
    $password = $_POST['userRegistrationPassword'];
    $userId = 1;
    $q="select user_id from user";
    $r = make_query($q) or die(mysqli_error());
    while ($a = mysqli_fetch_array($r)) {
        if ($userId < $a['user_id']){
            $userId = $a['user_id'];
        }
    }
    $userId++;
    $code = $password;
    $name = $_SESSION['user_name'];
    $email = $_SESSION['user_email'];
    $invoice = $_SESSION['user_invoice'];
    $phone = $_SESSION['user_phone'];
    $q="INSERT INTO codes (user_id, code) VALUES ('".$userId."', '".$code."')";
    $r = make_query($q) or die(mysqli_error($link));
    if ($code == $password){
        $q="INSERT INTO user (user_name, user_email, user_invoice, user_phone, user_password)
            VALUES ('".$name."', '".$email."', '".$invoice."', '".$phone."', '".$password."')";
        $r = make_query($q) or die(mysqli_error($link));
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_password'] = $password;
        echo json_encode(array('success' => 2));
    }else{
        echo json_encode(array('success' => 3));
    }
}
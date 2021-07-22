<?php
session_start();
require_once ("connect.php");
$name = $_POST['userRegistrationName'];
$invoice = $_POST['userRegistrationInvoice'];
$email = $_POST['userRegistrationEmail'];
$phone = $_POST['userRegistrationPhone'];
$q="select * from user where user_email = '".$email."' or user_phone = '".$phone."' or user_invoice = '".$invoice."'";
$r = make_query($q) or die(mysqli_error());
while ($a = mysqli_fetch_array($r)) {
    $check = true;
}
if ($check){
    echo json_encode(array('success' => 0));
}else{
    $q="INSERT INTO user (user_name, user_email, user_invoice, user_phone, user_password)
    VALUES ('".$name."', '".$email."', '".$invoice."', '".$phone."', '123')";
    $r = make_query($q) or die(mysqli_error($link));
    echo json_encode(array('success' => 1));
}
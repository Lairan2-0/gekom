<?php
session_start();
require_once ("connect.php");
$userEnterInvoice = $_POST['userEnterInvoice'];
$userEnterPassword = $_POST['userEnterPassword'];
$q="select * from user where user_invoice = '".$userEnterInvoice."'";
$r = make_query($q) or die(mysqli_error());
while ($a = mysqli_fetch_array($r)) {
    if ($userEnterPassword == $a['user_password']){
        $_SESSION['user_id'] = $a['user_id'];
        $_SESSION['user_phone'] = $a['user_phone'];
        $_SESSION['user_password'] = $a['user_password'];
        $_SESSION['user_name'] = $a['user_name'];
        $_SESSION['user_email'] = $a['user_email'];
        $_SESSION['user_invoice'] = $a['user_invoice'];
        echo json_encode(array('success' => 1));
    }else{
        echo json_encode(array('success' => 0));
    }
    $check = true;
}
if (!$check){
    $_SESSION['errorAuth'] = "Неправильно введен логин";
    header("Location: /");
}
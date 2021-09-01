<?php
session_start();
require_once ("connect.php");
$questionType = $_POST['questionType'];
$questionName = $_POST['questionName'];
$questionPhone = $_POST['questionPhone'];
$questionEmail = $_POST['questionEmail'];
$questionAnother = $_POST['questionAnother'];

$q="INSERT INTO qna (qna_name, qna_quest_type, qna_phone, qna_email, qna_quest_another) 
VALUES ('".$questionName."', '".$questionType."', '".$questionPhone."', '".$questionEmail."', '".$questionAnother."')";
$r = make_query($q) or die(mysqli_error($link));
echo json_encode(array('success' => 1));
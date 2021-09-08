<?php
session_start();
if ($chekAuth and !isset($_SESSION['user_id'])){
    header("Location: /");
}
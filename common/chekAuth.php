<?php
if ($chekAuth and !isset($_SESSION['user_id'])){
    header("Location: /");
}
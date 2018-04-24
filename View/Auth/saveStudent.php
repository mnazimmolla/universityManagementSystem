<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;

if ($_POST) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $addr = $_POST['addr'];
    $department = $_POST['department'];

    if ($name == '' or $email == '' or $contact == '' or $date == '' or $addr == '' or $department == '') {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field must not be Empty!</div>";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Invalid E-mail Address!</div>";
    }
    else{
        $newObj = new connect();
        $newObj->setStudent($_POST);
    }
}
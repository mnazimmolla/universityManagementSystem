<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;


if ($_POST) {
    $studentReg = $_POST['studentReg'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $date = $_POST['date'];

    if ($studentReg == '' or $name=='' or $email == '' or $department == '' or $date == '') {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field Must Not be Empty!</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Invalid Email Format!</div>";
    }
    else{
        $newObj = new connect();
        $newObj->enrollCourse($_POST);
    }
}
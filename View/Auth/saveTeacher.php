<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;


if ($_POST) {

    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $courseBtaken = $_POST['courseBtaken'];

    if ($name == '' or $addr == '' or $email == '' or $contact == '' or $designation == '' or $department == '' or $courseBtaken == '') {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field must not be Empty!</div>";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Invalid E-mail</div>";
    }elseif ($courseBtaken<1){
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Credit to be taken field must contain a non-negative value!</div>";
    }
    else{
        $newObj = new connect();
        $newObj->setTeacher($_POST);
    }


}
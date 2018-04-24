<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;
if ($_POST) {

    $department = $_POST['department'];
    $courses = $_POST['courses'];
    $room = $_POST['room'];
    $day = $_POST['day'];
    $fromHour = $_POST['fromHour'];
    $fromMinute = $_POST['fromMinute'];
    $toHour = $_POST['toHour'];
    $toMinute = $_POST['toMinute'];

    if ($department == '' or $courses == '' or $room == '' or $day == '' or $fromHour == '' or $fromMinute == '' or $toHour='' or $toMinute='')
    {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field Must Not be Empty!</div>";
    } else
    {
        $newObj = new connect();
        $newObj->allocateRoom($_POST);
    }
   


}
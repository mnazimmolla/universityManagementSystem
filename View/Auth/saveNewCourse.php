<?php

require_once "../../vendor/autoload.php";
use App\Auth\connect;


if($_POST){
    $code =$_POST['code'];
    $name =$_POST['name'];
    $credit =$_POST['credit'];
    $description =$_POST['desc'];
    $department =$_POST['department'];
    $semester =$_POST['semester'];

    if($code=='' or $name=='' or $credit=='' or $description=='' or $department=='' or $semester==''){
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field must not be Empty!</div>";

    }elseif (strlen($code)<5){
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Code must be at least five (5) characters long</div>";

    }elseif ($credit>5 or $credit<0.5){
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Invalid Credit Range. Credit range is from 0.5 to 5.0</div>";
    }
    else{
        $newObj = new connect();
        $newObj->setCourses($_POST);
    }

}
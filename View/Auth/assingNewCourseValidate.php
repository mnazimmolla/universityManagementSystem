<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;

    if(isset($_POST))
    {
        $dpt = $_POST['department'];
        $teacher = $_POST['teacher'];
        $ctbt = $_POST['ctbt'];
        $rc = $_POST['rc'];
        $cc = $_POST['cc'];
        $c_name = $_POST['c_name'];
        $credit = $_POST['credit'];
    if($dpt =='' or $teacher=='' or $ctbt = ''or $rc=='' or $cc=='' or $c_name=='' or $credit==''){
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Field Must Not Be Empty!</div>";
    }else{
        $newobj = new connect();
        $newobj->assignCourse($_POST);
        }
    }

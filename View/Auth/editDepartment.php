<?php
require_once "../../vendor/autoload.php";
use App\Auth\connect;
if(isset($_POST))
{
    $department_code = $_POST['department_code'];
    $department_name = $_POST['department_name'];

    if(empty($department_code) or empty($department_name))
    {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>All field Required!</div>";
    }
    else
    {
       if(strlen($department_code) <2){
           echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Department Code Will Not Be Less Than 2 Character!</div>";
        }elseif(strlen($department_code) >7 ){
           echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Department Code Will Not Be Greater Than 7 Character!</div>";
        }else{
           $newObj = new connect();
           $newObj->editDepartment($_POST);
       }
    }
}
?>
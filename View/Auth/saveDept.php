<?php
if(isset($_POST))
{
    $department_code = $_POST['department_code'];
    $department_name = $_POST['department_name'];

    if(empty($department_code) or empty($department_name))
    {
        echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>All Fields are Required!</div>";
    }
    else
    {
       if(strlen($department_code) <2){
           echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Department Code Will Not Be Less Than 2 Character!</div>";
        }elseif(strlen($department_code) >7 ){
           echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Department Code Will Not Be Greater Than 7 Character!</div>";
        }elseif($_POST){
           try {
               $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
               $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           } catch (PDOException $e) {
               echo "Database Connection Failed";
               echo $e->getMessage();
           }
           $date = date('Y-m-d');
           $query = "INSERT INTO departments (code, name, creted_at) VALUES ('$department_code' , '$department_name', '$date')";

           $codeExist = "SELECT * FROM departments WHERE code='$department_code'";
           $nameExist = "SELECT * FROM departments WHERE name='$department_name'";

           $codeExist = $handler->prepare($codeExist);
           $codeExist->execute();

           $nameExist = $handler->prepare($nameExist);
           $nameExist->execute();

           if ($codeExist->rowCount() == 1) {
               echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Department Code Already Exist</div>";
               return;
           }

           if ($nameExist->rowCount() == 1) {
               echo "<div class='alert-danger' style=\"padding: 5px;\"><strong>Department Name Already Exist</div>";
               return;
           }

           $stmt = $handler->prepare($query);
           $dataSave = $stmt->execute();
           if ($dataSave) {
               echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Department Saved Successfully</div>";
           }
           else{
               echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Department Saved Failed</div>";
           }
        }
       else
       {
            echo "Wrong Username or Password!!";
        }
    }
}
?>
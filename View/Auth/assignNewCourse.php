<?php

$handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
if(isset($_POST['depart'])){
    $dpt_name = "'".$_POST['depart']. "'";
    $sql = "SELECT * FROM teachers WHERE department=".$dpt_name;
    $stmt = $handler->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);

}
if(isset($_POST['ctbt'])){

    $teacher_id = "'".$_POST['ctbt']. "'";
    $sql = "SELECT courseBtaken FROM teachers WHERE name=".$teacher_id;
    $stmt = $handler->prepare($sql);
    $stmt->execute();
    $credit = $stmt->fetch(PDO::FETCH_ASSOC);


    $teacher_name = "'".$_POST['ctbt']. "'";
    $sql2 = "SELECT SUM(credit) as total FROM courseassigntoteachers WHERE Teacher_name=" .$teacher_name;
    $stmt2 = $handler->prepare($sql2);
    $stmt2->execute();
    $credit2 = $stmt2->fetch(PDO::FETCH_ASSOC);


    $data = [
        "data1"=> $credit,
        "data2"=> $credit2,
    ];
    echo json_encode($data);

}
if(isset($_POST['courseCode'])){
    $dpt_name = "'".$_POST['courseCode']. "'";
    $sql3 = "SELECT * FROM courses WHERE department=" .$dpt_name;
    $stmt3 = $handler->prepare($sql3);
    $stmt3->execute();
    $credit3 = $stmt3->fetchAll();
    echo json_encode($credit3);
}

if(isset($_POST['courseName'])){
    $courseName = "'".$_POST['courseName']. "'";
    $sql3 = "SELECT name, credit FROM courses WHERE code=" .$courseName;
    $stmt3 = $handler->prepare($sql3);
    $stmt3->execute();
    $credit3 = $stmt3->fetch();
    echo json_encode($credit3);
}

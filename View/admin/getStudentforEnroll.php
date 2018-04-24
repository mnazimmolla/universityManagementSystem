<?php

    $data = ($_POST['regNum']);
    $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
    $query = "SELECT students.*, courses.name as c_name FROM students LEFT JOIN courses ON students.department=courses.department WHERE students.id=2";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);

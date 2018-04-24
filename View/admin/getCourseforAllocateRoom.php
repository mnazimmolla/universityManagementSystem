<?php

    $data = ($_POST['courseCode']);
    $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
    $query = "SELECT * FROM courseassigntoteachers";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);

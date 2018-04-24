<?php

    $data = ($_POST['courseCode']);
    $q = "'" . $data . "'";
    $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
    $query = "SELECT * FROM courses WHERE department =" . $q;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
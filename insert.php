<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age  = isset($_POST['age']) ? $_POST['age'] : '';

    
    if (!empty($name) && !empty($age)) {
        
        $stmt = $pdo->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
        $stmt->execute([$name, $age]);

        
        $id = $pdo->lastInsertId();

        
        echo json_encode([
            'id'    => $id,
            'name'  => $name,
            'age'   => $age,
            'status' => 0  
        ]);
    } else {
        echo json_encode(['error' => 'Please fill out both fields.']);
    }
}
?>
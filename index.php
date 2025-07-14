<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>People Demo</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Add a Person</h2>
    <form id="personForm" method="POST" action="insert.php">
    <input type="text" name="name" placeholder="Name" required />
    <input type="number" name="age" placeholder="Age" required min="1" />
    <button type="submit">Submit</button>
</form>

    <h2>Current Records</h2>
    <table id="peopleTable">
        <thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
            <?php
            $stmt = $pdo->query('SELECT * FROM users');
            foreach ($stmt as $row) {
                echo "<tr data-id='{$row['id']}'>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        <td class='status'>{$row['status']}</td>
                        <td><button class='toggleBtn' data-id='{$row['id']}'>Toggle</button></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>
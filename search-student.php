<?php
header('Content-Type: application/json');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';

$conn = new mysqli("localhost", "root", "", "leaningprocess");

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "SELECT name FROM students WHERE name LIKE '%$q%'";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();

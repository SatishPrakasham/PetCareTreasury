<?php

require_once '../config/database.php';

// Create a new instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    try {
        // Use password_hash to hash the password before storing
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO adminlogin (uname, pass) VALUES (:uname, :pass)");
        $stmt->bindParam(':uname', $uname);
        $stmt->bindParam(':pass', $hashedPass);

        $stmt->execute();

        // Return success response
        $response = [
            'status' => 'success',
            'message' => 'Account created successfully',
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } catch (PDOException $e) {
        // Return error response
        $response = [
            'status' => 'error',
            'message' => 'Error creating account: ' . $e->getMessage(),
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // Return error response if parameters are missing
    $response = [
        'status' => 'error',
        'message' => 'Missing parameters',
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

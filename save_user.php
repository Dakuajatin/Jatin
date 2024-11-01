<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username and password from POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create an associative array with user data
    $userData = [
        "username" => $username,
        "password" => $password  // Storing plain text password (not recommended)
    ];

    // Load existing users data from JSON file, or create an empty array if file doesn't exist
    $filePath = 'users.json';
    if (file_exists($filePath)) {
        $users = json_decode(file_get_contents($filePath), true);
    } else {
        $users = [];
    }

    // Add new user data to array
    $users[] = $userData;

    // Encode updated data back to JSON and save to file
    file_put_contents($filePath, json_encode($users, JSON_PRETTY_PRINT));

    header("Location: diamonds.php");
} else {
    echo "Invalid request.";
}
?>
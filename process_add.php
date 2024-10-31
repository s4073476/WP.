<?php
include 'includes/db_connect.inc'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $petname = $_POST['petname'];
    $description = $_POST['description'];
    $age = $_POST['age'];
    $type = $_POST['type'];
    $location = $_POST['location'];

    // Handle image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;

    // Check if the file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        die("File is not an image.");
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        die("Sorry, file already exists.");
    }

    // Try to move the uploaded file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = $_FILES["image"]["name"];
    } else {
        die("Sorry, there was an error uploading the file.");
    }

    // Insert the pet into the database
    try {
        $sql = "INSERT INTO pets (petname, description, age, type, location, image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$petname, $description, $age, $type, $location, $image]);

        echo "Pet added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>

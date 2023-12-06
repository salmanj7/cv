<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "cv"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Education Details
    $school = $_POST["school"];
    $degree = $_POST["degree"];
    $graduation_date = $_POST["graduation_date"];
    $gpa = $_POST["gpa"];

    // Work Experience
    $company = $_POST["company"];
    $job_title = $_POST["job_title"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $job_description = $_POST["job_description"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO cv_data (name, email, phone, address, school, degree, graduation_date, gpa, company, job_title, start_date, end_date, job_description) VALUES ('$name', '$email', '$phone', '$address', '$school', '$degree', '$graduation_date', '$gpa', '$company', '$job_title', '$start_date', '$end_date', '$job_description')";

    if ($conn->query($sql) === TRUE) {
        echo "CV data stored successfully!";
        header("Location: view_cv.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

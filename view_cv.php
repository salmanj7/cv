<?php
// Include your database connection code
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "cv"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the CV data from the database (adjust this query based on your table structure)
$sql = "SELECT * FROM cv_data ORDER BY id DESC LIMIT 1"; // Assuming 'id' is the primary key
$result = $conn->query($sql);

// Display the CV data in HTML format
echo "<h1>View CV</h1>";

while ($row = $result->fetch_assoc()) {
    echo "<h2>{$row['name']}'s CV</h2>";

    // Display Personal Information
    echo "<h3>Personal Information</h3>";
    echo "<p>Email: {$row['email']}</p>";
    echo "<p>Phone: {$row['phone']}</p>";
    echo "<p>Address: {$row['address']}</p>";

    // Display Education Details
    echo "<h3>Education Details</h3>";
    echo "<p>School/University: {$row['school']}</p>";
    echo "<p>Degree: {$row['degree']}</p>";
    echo "<p>Graduation Date: {$row['graduation_date']}</p>";
    echo "<p>GPA: {$row['gpa']}</p>";

    // Display Work Experience
    echo "<h3>Work Experience</h3>";
    echo "<p>Company: {$row['company']}</p>";
    echo "<p>Job Title: {$row['job_title']}</p>";
    echo "<p>Start Date: {$row['start_date']}</p>";
    echo "<p>End Date: {$row['end_date']}</p>";
    echo "<p>Job Description: {$row['job_description']}</p>";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker</title>
</head>

<body>
    <h1>CV Maker</h1>

    <?php
     include_once 'connect.php';
    ?>
    <form method="post" action="connect.php">
        <!-- Personal Information -->
        <h2>Personal Information</h2>
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        Address: <input type="text" name="address" required><br>

        <!-- Education Details -->
        <h2>Education Details</h2>
        School/University Name: <input type="text" name="school" required><br>
        Degree: <input type="text" name="degree" required><br>
        Graduation Date: <input type="date" name="graduation_date" required min="<?php echo date('Y-m-d'); ?>"><br>
        GPA: <input type="text" name="gpa" required><br>

        <!-- Work Experience -->
        <h2>Work Experience</h2>
        Company Name: <input type="text" name="company" required><br>
        Job Title: <input type="text" name="job_title" required><br>
        Start Date: <input type="date" name="start_date" required><br>
        End Date: <input type="date" name="end_date" required><br>
        Job Description: <textarea name="job_description" required></textarea><br>

        <input type="submit" value="Generate CV">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subjects = isset($_POST['subjects']) ? implode(', ', $_POST['subjects']) : '';
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    // Display submitted data
    echo "<h3>Submitted Data:</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Gender: $gender<br>";
    echo "Course: $course<br>";
    echo "Semester: $semester<br>";
    echo "Interested Subjects: $subjects<br>";
    echo "Date of Birth: $dob<br>";
    echo "Address: $address<br>";
}
?>
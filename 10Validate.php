<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stud_roll = $_POST['stud_roll'];
    $stud_name = $_POST['stud_name'];
    $stud_address = $_POST['stud_address'];
    $dob = $_POST['date_of_birth'];
    $mobile_no = $_POST['mobile_no'];
    $branch = $_POST['branch'];

    echo "Roll Number: $stud_roll</br>";
    echo "Name: $stud_name</br>";
    echo "Address: $stud_address</br>";
    echo "Date of Birth: $dob</br>";
    echo "Mobile Number: $mobile_no</br>";
    echo "Branch: $branch</br>";
}
?>
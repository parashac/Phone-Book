<?php
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];


$gender = isset($_POST['gender']) ? $_POST['gender'] : null;

$country = isset($_POST['country']) ? $_POST['country'] : null;

$courses = isset($_POST['courses']) ? implode(", ", $_POST['courses']) : null;

$con = mysqli_connect("localhost", "root", "", "form");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO users (name, address, phone, gender, country, courses)
          VALUES ('$name', '$address', '$phone', '$gender', '$country', '$courses')";

if (mysqli_query($con, $query)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

<?php
$servername = "localhost";
$username = "b776d668ff4142";
$password = "64cec015";
$dbname = "myDB";

$email = $_GET["email"];
$user = $_GET["name"];
$occupation = $_GET["occupation"];
$major = $_GET["major"];
$bio = $_GET["bio"];
$person_tags = $_GET["tags"];



echo "This is test = " . $val;

// Create connection
//Skid
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO  persons (email, person_name, occupation, major, bio, person_tags)
VALUES ($email, $name, $occupation, $major, $bio, $person_tags)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

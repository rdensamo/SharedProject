<?php
$servername = "localhost";
$username = "b776d668ff4142";
$password = "64cec015";
$dbname = "myDB";

$email = $_GET["email"];
$proj_name = $_GET["proj_name"];
$info = $_GET["info"];
$proj_tags = $_GET["tags"];
$purpose = $_GET["purpose"];
$posted_date = $_GET["posted_date"];
$end_date = $_GET["end_date"]



echo "This is test = " . $val;

// Create connection
//Skid
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO  projects (email, proj_name, proj_subj, info, proj_tags, purpose, posted_date, closed_date)
VALUES ($email, $proj_name, $info, $proj_tags, $purpose, $posted_date, $end_date)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

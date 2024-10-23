<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$institution = $_POST['institution'];
$organisation = $_POST['des'];

// Insert data into the database
$sql = "INSERT INTO registrations (title, fname, lname, email, institution, organisation) 
        VALUES ('$title', '$fname', '$lname', '$email', '$institution', '$organisation')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<h1>Welcome " . $title . " " . $fname . " " . $lname . "!</h1>";
echo "<p>Your email is: " . $email . "</p>";
echo "<p>Your institution is: " . $institution . "</p>";
echo "<p>About your organisation: " . $organisation . "</p>";

?>

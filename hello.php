<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        p strong {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $start = htmlspecialchars($_POST['start']);
    $end = htmlspecialchars($_POST['end']);
    $date = htmlspecialchars($_POST['date']);
    $class = htmlspecialchars($_POST['class']);

    //// Database connection settings
    $servername = "localhost"; 
    $username = "root";   
    $password = "";   
    $dbname = "reservations";   

  
    $conn = new mysqli($servername, $username, $password, $dbname);

     
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, number, start, end, date, class) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $number, $start, $end, $date, $class);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "<h1>Reservation Details</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Contact Number:</strong> $number</p>";
        echo "<p><strong>Start Station:</strong> $start</p>";
        echo "<p><strong>Destination Station:</strong> $end</p>";
        echo "<p><strong>Travel Date:</strong> $date</p>";
        echo "<p><strong>Class:</strong> $class</p>";
        echo "<p>Your reservation has been successfully saved to the database!</p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
</div>

</body>
</html>

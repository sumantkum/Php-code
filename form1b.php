<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .display-card {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 18px;
        }
    </style>
</head>

<body>
   <div class="display-card">
    <h1>
        Welcome 
        <?php 
        // Ensure 'title', 'fname', and 'sname' exist before accessing them
        echo (isset($_GET["title"]) ? $_GET["title"] : "Guest") . " " . 
             (isset($_GET["fname"]) ? $_GET["fname"] : "First Name") . " " . 
             (isset($_GET["sname"]) ? $_GET["sname"] : "Surname");
        ?>
    </h1> 

    <p>Email: 
        <?php 
        // Ensure 'email' exists before accessing it
        echo isset($_GET["email"]) ? $_GET["email"] : "No email provided";
        ?>
    </p>

    <p>Phone: 
        <?php 
        // Ensure 'phone' exists before accessing it
        echo isset($_GET["phone"]) ? $_GET["phone"] : "No phone number provided";
        ?>
    </p> 

    <p>Address: 
        <?php 
        // Ensure 'address' exists before accessing it
        echo isset($_GET["address"]) ? $_GET["address"] : "No address provided";
        ?>
    </p>
    <p>Thank you for your Time </p>
</div>


</body>

</html>
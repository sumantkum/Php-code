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
            background-color:white;
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
        <h1>Welcome 
            <?php echo ($_GET["title"] ) . " " . ($_GET["fname"] ) . " " . ($_GET["lname"]); ?>!
        </h1>
        <p>Your email is: <?php echo $_GET["email"] ; ?>
        </p>
        <p>Your institution is: 
            <?php echo $_GET["institution"]; ?>
        </p>
        <p>About your organisation: 
            <?php echo $_GET["des"]; ?>
        </p>
    </div>
</body>
</html>

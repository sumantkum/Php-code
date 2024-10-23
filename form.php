<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        fieldset {
            background-color: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            margin: auto;
        }

        legend {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<fieldset>
    <legend>Railway Reservation Form</legend>

    <form action="hello.php" method="POST">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required>

        <label for="number">Contact Number</label>
        <input type="text" id="number" name="number" placeholder="Enter number" required>

        <label for="start">Start Station</label>
        <input type="text" id="start" name="start" placeholder="Start station" required>

        <label for="end">Destination Station</label>
        <input type="text" id="end" name="end" placeholder="Destination station" required>

        <label for="date">Select a Date</label>
        <input type="date" id="date" name="date" required>

        <label for="class">Class</label>
        <input type="text" id="class" name="class" placeholder="Enter class" required>

        <input type="submit" value="Submit">

    </form>
</fieldset>

</body>
</html>

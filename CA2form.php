<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Symposium Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: white;
            border: 4px solid rgba(207, 190, 203, .6);
            padding: 20px;
            width: 50%;
            margin: 5% auto;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        input,
        textarea,
        select {
            border-radius: 5px;
            background-color: rgba(207, 190, 203, 0.3);
            padding: 10px;
            width: 100%;
            margin: 10px 0;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        input[type="submit"] {
            width: 50%;
            background-color: #6a1b9a;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4a148c;
        }

        h1 {
            color: #6a1b9a;
            margin-bottom: 20px;
        }

        h3 {
            margin-bottom: 8px;
            color: #333;
        }

        .name-fields {
            display: flex;
            justify-content: space-between;
        }

        .name-fields input {
            width: 48%;
        }

        @media (max-width: 768px) {
            form {
                width: 90%;
            }

            .name-fields input {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div>
        <!-- The form uses the GET method and each input has a proper 'name' attribute -->
        <form action="CA2formb.php" method="GET">
            <center>
                <h1>Medicine Symposium Registration Form</h1>
            </center>
            <h3>Full Name</h3>
            <div class="name-fields">
                <select name="title" id="title">
                    <option value="">Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
            </div>

            <h3>Institution</h3>
            <input type="text" name="institution" placeholder="Your Institution">

            <h3>Email Address</h3>
            <input type="email" name="email" placeholder="Your Email">

            <h3>Name of the Organization</h3>
            <textarea name="des" placeholder="Enter Organization Details" rows="3"></textarea>

            <br>
            <center>
                <input type="submit" value="Submit">
            </center>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            width: 28%;
        }
    </style>

</head>

<body>


    <div>

        <center>
            <form action="form1b.php" method="GET">
                --- Hello Invitation Form ---- <br><br>
                <select name="text" id="" name="title">
                    <option value="">Mr.</option>
                    <option value="">Miss.</option>
                    <option value="">Dr.</option>
                    <option value="">Prof.</option>
                </select>
                <label for="text">First Name:</label>
                <input type="text" name="fname" required placeholder="first name">
                <label for="text">Second Name:</label>
                <input type="text" name="sname" required placeholder="second name">
                <br><br>
                <label for="email">Email: </label>
                <input type="email" name="Email" required placeholder="enter email">
                <label for="number">Phone No.</label>
                <input type="phone" name="phone" required placeholder="phone number">
                <br><br>

                <label for="text">Address: </label>
                <textarea name="address" id="text" rows="5" cols="10" placeholder="enter you full address">
        </textarea> <br><br>
                <input type="submit" name="button">


                </fieldset>
        </center>

        </form>

    </div>




</body>

</html>
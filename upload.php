

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: chocolate;
        }
    </style>
</head>
<body>

<h1>Here upload your file</h1>
<form method="post" enctype="multipart/form-data" action="recive.php">

<input type="file" name="myfile" />

<input type="submit" name="upload" value="SEND"/>

</form>
    
</body>
</html>
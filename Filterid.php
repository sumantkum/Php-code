<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter ID Table</title>
    <style>
        body {
            background-color: #f5f666;
            font-family: Arial, sans-serif;
        }
        table {
            width: 50%; /* Adjust width as needed */
            margin: 20px auto; /* Center the table */
            border-collapse: collapse; /* Merge borders */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        }
        th, td {
            border: 1px solid #dddddd; /* Border for table cells */
            text-align: left; /* Align text to the left */
            padding: 8px; /* Add padding */
        }
        th {
            background-color: #f2f2f2; /* Header background color */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Zebra striping for rows */
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Filter ID Table</h1>

<table>
    <tr>
        <th>Filter Name</th>
        <th>Filter ID</th>
    </tr>
    <?php
    // Assuming the filter_list() and filter_id() functions are defined
    foreach (filter_list() as $filter) {
        echo '<tr><td>' . htmlspecialchars($filter) . '</td><td>' . htmlspecialchars(filter_id($filter)) . '</td></tr>';
    }
    ?>
</table>
    
</body>
</html>

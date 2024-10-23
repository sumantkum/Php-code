<html>
<head>
  <title>Form Validation</title> <!-- Added a title tag -->
</head>
<body>  

<?php
// Define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;  // Ensure the function returns the processed data
}
?>

<h2>Form for Personal Details</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  
  E-mail: <input type="email" name="email">
  <br><br>
  
  Website: <input type="text" name="website">
  <br><br>
  
  Comment: <textarea name="comment" rows="3" cols="20"><?php echo $comment;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: " . $name;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "Website: " . $website;
echo "<br>";
echo "Comment: " . $comment;
echo "<br>";
echo "Gender: " . $gender;
?>

</body>
</html>

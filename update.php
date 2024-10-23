<?php include 'connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM student WHERE id='1'"; //Now put the value 8 where data is already deleted.
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>
<div>
  <form action="" method="POST">
    <label for="fname">First Name:</label>
    <input value="<?php echo $row['fname'] ?>" type="text" name="fname" placeholder="First Name" required><br><br>

    <label for="lname">Last Name:</label>
    <input value="<?php echo $row['lname'] ?>" type="text" name="lname" placeholder="Last Name" required><br><br>

    <label for="age">Age:</label>
    <input value="<?php echo $row['age'] ?>" type="number" name="age" placeholder="Age" required><br><br>

    <input type="submit" name="update_btn" value="update">
    <button> <a href="view.php">Back</a></button>
  </form>
</div>
<?php

if (isset($_POST['update_btn'])) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];

  $update = "UPDATE student SET fname='$fname',lname='$lname',age='$age' WHERE id='1'";
  $data = mysqli_query($con, $update);
  if ($data) {
    echo "Entered data is update successfully";
  } else {
    echo "Again save data";
  }
}
?>
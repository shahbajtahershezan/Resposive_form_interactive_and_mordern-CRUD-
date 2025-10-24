<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add New User</h2>
<form method="POST" action="">
  <label>Name:</label>
  <input type="text" name="name" required>
  <label>Email:</label>
  <input type="email" name="email" required>
  <label>Phone:</label>
  <input type="text" name="phone">
  <button type="submit" name="submit">Save</button>
</form>

<a href="index.php">Back</a>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
</body>
</html>

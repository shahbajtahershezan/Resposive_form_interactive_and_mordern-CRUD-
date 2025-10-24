<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $conn->query("UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit User</h2>
<form method="POST">
  <label>Name:</label>
  <input type="text" name="name" value="<?= $row['name'] ?>" required>
  <label>Email:</label>
  <input type="email" name="email" value="<?= $row['email'] ?>" required>
  <label>Phone:</label>
  <input type="text" name="phone" value="<?= $row['phone'] ?>">
  <button type="submit" name="update">Update</button>
</form>

<a href="index.php">Back</a>

</body>
</html>

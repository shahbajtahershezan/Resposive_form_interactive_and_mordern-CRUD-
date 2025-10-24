<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD App</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User List</h2>
<a href="create.php" class="btn">Add New User</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Actions</th>
  </tr>

  <?php
  $result = $conn->query("SELECT * FROM users");
  if ($result->num_rows > 0):
    while($row = $result->fetch_assoc()):
  ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td>
      <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
      <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
    </td>
  </tr>
  <?php endwhile; endif; ?>
</table>

</body>
</html>

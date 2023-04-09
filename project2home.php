<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halifax Canoe and Kayak</title>
</head>
<body>

  <!-- include header.php for header & side nav -->
  <?php include 'header.php'; ?>

  <!-- Start session -->

  <!-- ->Button to Logout.php across all pages -->

  <!-- initial form with 4 fields -->
  <!-- send values of form to problem.php -->
  <form action="problem.php" method="post">
    <!-- 1st field: dropdown menu for title -->
    <label for="title">Title</label>
    <select name="title" id="title" required>
      <option value="mr">Mr</option>
      <option value="ms">Ms</option>
      <option value="mrs">Mrs</option>
    </select>

    <!-- 2nd field: input bar for first name -->
    <label for="fName">First Name</label>
    <input type="text" name="fName" id="fName" required>

    <!-- 3rd field: input bar for last name -->
    <label for="lName">Last Name</label>
    <input type="text" name="lName" id="lName" required>

    <!-- 4th field: dropdwon menu for role -->
    <label for="role">Role</label>
    <select name="role" id="role" required>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
      <option value="CEO">CEO</option>
    </select>

    <!-- submit button -->
    <button type="submit">Submit</button>

  </form>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
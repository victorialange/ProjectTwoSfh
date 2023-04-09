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
        <!-- label only visible to screen readers for accessibility -->
        <label for="title" class="sr-only">Title</label>
    <select name="title" id="title" required>
      <option value="mr">Mr</option>
      <option value="ms">Ms</option>
      <option value="mrs">Mrs</option>
    </select>

    <!-- 2nd field: input bar for first name -->
        <!-- label only visible to screen readers for accessibility -->
        <label for="fName" class="sr-only">First Name</label>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>

    <!-- 3rd field: input bar for last name -->
        <!-- label only visible to screen readers for accessibility -->
        <label for="lName" class="sr-only">Last Name</label>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>

    <!-- 4th field: dropdwon menu for role -->
        <!-- label only visible to screen readers for accessibility -->
        <label for="role" class="sr-only">Role</label>
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
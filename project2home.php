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
  <?php include './includes/header.php'; ?>

  <main>
    <section class="project2homeMain">
      <div class="wrapper">
        <!-- include logoutLink.php for link -->
        <?php include "./includes/logoutLink.php"?>
      </div>

      <div class="supportFormContainer">
        <div class="wrapper">
          <!-- form heading -->
          <h2>Welcome To Your IT Support System</h2>

          <!-- initial form with 4 fields -->
          <!-- send values of form to problem.php -->
          <form action="problem.php" method="post" class="supportForm">
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
            <button type="submit" name="submit" value="Submit">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
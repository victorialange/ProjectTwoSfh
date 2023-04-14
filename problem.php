<?php include './includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halifax Canoe and Kayak</title>
</head>
<body>

  <!-- storing form data -->
  <?php
    // if role= 'admin' -> link to: new-account.php and isnt-working.php 
    // if role = 'manager' ->link to: lost-password.php and isnt-working.php 
    // if role= 'ceo' ->link to: need-help.php and isnt-working.php 

    // checking if post variable is set
    if (isset($_POST['submit'])) {
      // store session data by setting it equal to its post variables retrieved from the form upon submission
      $_SESSION['title'] = $_POST['title'];
      $_SESSION['fName'] = $_POST['fName'];
      $_SESSION['lName'] = $_POST['lName'];
      $_SESSION['role'] = $_POST['role'];
    }
  ?>

  <main>
    <section class="problemMain">
      <div class="wrapper">
        <!-- include logoutLink.php for link -->
        <?php include "./includes/logout-link.php"?>

        <!-- greeting according to rule -->
        <h2>Hello <?php echo $_SESSION['role']; ?></h2>
        <hr>
        <h3>Here are your options:</h3>

        <!-- if role= 'admin' -> link to: new-account.php and isnt-working.php  -->
        <?php if ( $_SESSION['role'] == "Admin" ) { ?> 
          <ul class="optionsUl">
            <!-- redirect to computer isn't working -->
            <li>
              <a href="isnt-working.php">My computer isn't working</a>
            </li>
            <!-- redirect to create new account -->
            <li>
              <a href="new-account.php">Create New Account</a>
            </li>
          </ul>
        <?php } ?>

        <!-- if role = 'manager' ->link to: lost-password.php and isnt-working.php  -->
        <?php if ( $_SESSION['role'] == "Manager" ) { ?> 
          <ul class="optionsUl">
            <!-- redirect to computer isn't working -->
            <li>
              <a href="isnt-working.php">My computer isn't working</a>
            </li>
            <!-- redirect to lost-password -->
            <li>
              <a href="lost-password.php">Lost Password</a>
            </li>
          </ul>
        <?php } ?>

        <!-- if role= 'ceo' ->link to: need-help.php and isnt-working.php -->
        <?php if ( $_SESSION['role'] == "CEO" ) { ?> 
          <ul class="optionsUl">
            <!-- redirect to computer isn't working -->
            <li>
              <a href="isnt-working.php">My computer isn't working</a>
            </li>
            <!-- redirect to need help -->
            <li>
              <a href="need-help.php">Need Help</a>
            </li>
          </ul>
        <?php } ?>
      </div>
    </section>
  </main>
  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
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

  <?php
    echo "Links";
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

  <!-- greeting according to rule -->
  <h2>Hello <?php echo $role; ?></h2>

  <h3>Here are your options:</h3>

  <!-- if role= 'admin' -> link to: new-account.php and isnt-working.php  -->
  <?php if ( $role == "Admin" ) { ?> 
    <ul>
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
  <?php if ( $role == "Manager" ) { ?> 
    <ul>
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
  <?php if ( $role == "CEO" ) { ?> 
    <ul>
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


  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
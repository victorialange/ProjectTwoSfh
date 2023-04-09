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
  ?>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
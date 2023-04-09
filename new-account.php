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
    echo "New Account";
  ?>

  <!-- Form redirect to -> send-email.php emailType = newAccount -->
  <form action="" method="post">
    <!-- can be hidden input in order to store emailType value as newAccount -->
  </form>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
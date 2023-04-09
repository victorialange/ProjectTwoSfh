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

  ?>

  <!-- Content for CEO, just show a phone number to call -->
  <main>
    <section class="needHelpMain">
      <div class="wrapper">
        <!-- ->Button to Logout.php across all pages -->
        <!-- log out - redirect to log out page - destroy session -->
        <a href="logout.php" class="logoutLink">Log out</a>
        <!-- content -->
        <h3>So You Need Help</h3>
        <hr>
        <h4>Call <a href="tel:7001235768">7001235768</a> for support</h4>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
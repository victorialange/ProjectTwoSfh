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

  <?php

  ?>

  <!-- Content for CEO, just show a phone number to call -->
  <main>
    <section class="needHelpMain">
      <div class="wrapper">
        <div class="linksContainer">
          <!-- include backLink.php for going back to options -->
          <?php include "./includes/backLink.php"?>
          <!-- include logoutLink.php for link -->
          <?php include "./includes/logoutLink.php"?>
        </div>

        <!-- content -->
        <h3>So You Need Help</h3>
        <hr>
        <h4>Call <a href="tel:7001235768">7001235768</a> for support</h4>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
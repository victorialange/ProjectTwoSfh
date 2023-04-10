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
    // Destroy session
    session_destroy();
    // this will redirect the user again to the "login page/ the support form"
    header('Refresh: 2; URL = project2home.php');
  ?>

  <main>
    <section class="logoutMain">
      <div class="wrapper">
        <!-- Content: Confirm Logout -->
        <h3 class="message">You logged out successfully.</h3>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
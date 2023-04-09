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
    // defining variable for emailType
    $emailType = "lostPassword";
  ?>

  <main>
    <section class="lostPasswordMain">
      <div class="wrapper">
        <!-- ->Button to Logout.php across all pages -->
        <!-- log out - redirect to log out page - destroy session -->
        <a href="logout.php" class="logoutLink">Log out</a>
        <h2>Lost Your Password? Get a new one here!</h2>
        <hr>
      </div>
      <div class="wrapper">
        <!-- Form redirect to -> send-email.php emailType = lostPassword -->
        <form action="send-email.php" method="post">
          <!-- email input -->
          <label for="existingEmail">Email</label>
          <input type="email" name="existingEmail" id="existingEmail" placeholder="Your Email" required>
          <!-- can be hidden input in order to store emailType value as newAccount -->
          <input type="hidden" name="emailType" value="<?php echo $emailType; ?>">
          <!-- submit button -->
          <button type="submit" name="submit">Get new password</button>
        </form>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
<!-- include header.php for header & side nav -->
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

  <?php
    // defining variable for emailType
    $emailType = "newAccount";
  ?>

  <main>
    <section class="newAccountMain">
      <div class="wrapper">
        <div class="linksContainer">
          <!-- include backLink.php for going back to options -->
          <?php include "./includes/backLink.php"?>
          <!-- include logoutLink.php for link -->
          <?php include "./includes/logoutLink.php"?>
        </div>

        <h2>Create A New Account</h2>
        <hr>
      </div>
      <div class="wrapper">
        <!-- Form redirect to -> send-email.php emailType = newAccount -->
        <form action="send-email.php" method="post" class="sendEmailForm">
          <!-- email input -->
          <label for="newEmail">Email: </label>
          <input type="email" name="email" id="newEmail" placeholder="Your Email" required>
          <!-- can be hidden input in order to store emailType value as newAccount -->
          <input type="hidden" name="emailType" value="<?php echo $emailType; ?>">
          <!-- submit button -->
          <button type="submit" name="submit">Create account</button>
        </form>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
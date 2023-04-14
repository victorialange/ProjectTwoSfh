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
    // if emailType = newAccount-> just display new account msg (Your Account has been created successfully)
    // if emailType = lostPassword-> just display lost password msg (Your Password has been reset/retrieved/your new password is on its way)
    // checking if post variable is set
    if (isset($_POST['submit'])) {
      // store post variable for emailType retrieved from lost password and/or new account form upon submission
      $emailType = $_POST['emailType'];
      // store email retireved as post variable as session variable
      $_SESSION['email'] = $_POST['email'];
    }
  ?>

  <main>
    <section class="sendEmailMain">
      <div class="wrapper">
        <div class="linksContainer">
          <!-- include backLink.php for going back to options -->
          <?php include "./includes/back-link.php"?>
          <!-- include logoutLink.php for link -->
          <?php include "./includes/logout-link.php"?>
        </div>

        <!-- if emailType = newAccount-> just display new account msg  -->
        <?php if ( $emailType == "newAccount" ) { ?> 
          <h3 class="message">New Account was created successfully.</h3>    
        <?php } ?>

        <!-- if emailType = lostPassword-> just display lost password msg -->
        <?php if ( $emailType == "lostPassword" ) { ?> 
          <h3 class="message">Your new password is being sent to your email.</h3>    
        <?php } ?>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include './includes/footer.php'; ?>
</body>
</html>
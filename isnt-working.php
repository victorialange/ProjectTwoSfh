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
  <main>
    <section class="isntWorkingMain">
      <div class="wrapper">
        <!-- ->Button to Logout.php across all pages -->
        <!-- log out - redirect to log out page - destroy session -->
        <a href="logout.php" class="logoutLink">Log out</a>

        <h2>So your computer isn't working...</h2>
        <hr>
        <!-- Content (Gif of your choice) for all roles (Admin, Manager, CEO) -->
        <div class="gifContainer">
          <img src="https://media.tenor.com/0TXhXL0yqDsAAAAd/dean-pelton.gif" alt="Dean Pelton's computer is not working">
        </div>
      </div>
    </section>
  </main>

  <!-- include footer.php for copyright -->
  <?php include 'footer.php'; ?>
</body>
</html>
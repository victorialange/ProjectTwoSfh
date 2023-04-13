<?php
 // initialize session only if no session present
 @session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <!-- importing stylesheet -->
    <link rel="stylesheet" href="./style.css" type="text/css">
    <!-- logo  -->
    <link rel="shortcut icon" type="image/jpg" href="./assets/paddle-blue.jpg">
</head>
<body>
    <!-- Skip Link -->
    <a href="#mainContent" class="skipLink">Skip to main content</a>
    <!-- HEADER -->
    <header>
      <nav class="mainNav">
        <!-- hamburger icon img -->
        <button class="burgerButton" aria-label="click this icon to open the side navigation">
          <img src="./assets/hamburger.png" alt="burger icon to open navigation menu">
        </button>
        <!-- main heading -->
        <div class="mainHeadingContainer">
          <h1>Halifax Canoe and Kayak</h1>
        </div><!-- END main heading -->
        <!-- logo img -->
        <div class="logoContainer">
          <img src="./assets/paddle-white.png" alt="white paddle">
        </div>
      </nav>
    </header>

    <!-- hidden sidenav -->
    <nav class="sideNavHidden">
      <ul class="sideNavContent">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Book Trip</a></li>
        <li><a href="project2home.php">IT Support</a></li>
      </ul>
    </nav>

    <!-- importing jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- importing js file -->
    <script src="script.js"></script>
</body>
</html>
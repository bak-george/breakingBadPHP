<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Breaking Bad Quote Generator 
    contains quotes from the universe of Breaking Bad and Better Call Saul. 
    Most of the quotes are from Walter White (Heisenberg), Jessy Pinkman,
    Skyler White, Saul Goodman and Mike Ehrmantraut. Developed by George Bakoulis">
    <link rel="icon" type="image/x-icon" href="images/walterwhite-breakingBadQuoteGenerator.svg"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"  href="../app.css">
    <link rel="stylesheet" href="../mobile.css">
   <link rel="stylesheet" href="../loader.css">
    <?php 
      if ($heading === 'about') { ?>
          <link rel="stylesheet" href="../about.css">
      <?php } ?>
  <script>
        window.onload = function() {
      setTimeout(function() {
        var elements = document.getElementsByClassName("loader");
        
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.display = "none"; 
        }
      }, 1000);
    }
  </script>
    <title>Breaking Bad Quotes</title>
</head>
<body>
    <div class="loader">
    <img src="images/breakingBadVan.png">
      <p>
        Cooking<span class="dot">.</span><span class="dot">.</span><span class="dot">.</span>
      </p>
    </div>

    <header>
        <div class="title">
            <img src="images/walterwhite-breakingBadQuoteGenerator.svg">
            <h1>Breaking Bad Quote Generator</h1>
        </div>
        <?php require('nav.php'); ?>
    </header>
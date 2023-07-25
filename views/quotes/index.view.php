<?php require base_path('views/partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="" 
                 id="depiction">
            </div>
        </div>
        <div class="character-data">
            <p>Name: <?php echo $randomCharacter['name']; ?></p>
            <p>Nick Name: <?php echo $randomCharacter['nick_name']; ?></p>
            <p>Occupation: <?php echo $randomCharacter['occupation']; ?></p>
            <p>Status: <?php echo $randomCharacter['status']; ?></p>
        </div>
        <div class="quote-box">
            <p id="current-quote">
                <?php echo htmlspecialchars($randomCharacter['quote']);?>
            </p>
        </div>
    </section>
  <?php require base_path('views/partials/footer.php'); ?>
</body>
</html>
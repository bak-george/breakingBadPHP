<?php require base_path('views/partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="<?php echo $character[0]['image'];?>" 
                 id="depiction">
            </div>
        </div>
        <div class="character-data">
            <p>Name: <?php echo htmlspecialchars($character[0]['full_name']); ?></p>
            <p>Nickname: <?php echo htmlspecialchars($character[0]['nickname']); ?></p>
            <p>Occupation: <?php echo htmlspecialchars($character[0]['occupation']); ?></p>
            <p>Status: <?php echo htmlspecialchars($character[0]['status']); ?></p>
          <p>Quote Contributor: <?php echo htmlspecialchars($generatedQuote[0]['contributor_nickname']); ?></p>
        </div>
        <div class="quote-box">
            <p id="current-quote">
                <?php $getQuote = $generatedQuote[0]['quote']; echo htmlspecialchars($getQuote); ?>
            </p>
        </div>
    </section>
    <?php $getId = $generatedQuote[0]['id']; ?>
    <?php require base_path('views/partials/footer.php'); ?>
</body>
</html>
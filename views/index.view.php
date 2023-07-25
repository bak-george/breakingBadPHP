<?php require('partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="<?php echo $character[0]['image'];?>" 
                 id="depiction">
            </div>
        </div>
        <div class="character-data">
            <p>Name: <?php echo $character[0]['full_name']; ?></p>
            <p>Nickname: <?php echo $character[0]['nickname']; ?></p>
            <p>Occupation: <?php echo $character[0]['occupation']; ?></p>
            <p>Status: <?php echo $character[0]['status']; ?></p>
            <?php 
                if ($quote[0]['contributor_nickname'] !== null) { ?>
                    <p>Quote Contributor:                                  
                       <?php echo htmlspecialchars($quote[0]['contributor_nickname']); ?>
                    </p>
            <?php } ?>
        </div>
        <div class="quote-box">
            <p id="current-quote">
                <?php $getQuote = $quote[0]['quote']; echo htmlspecialchars($getQuote); ?>
            </p>
        </div>
     </section>
    <?php require('partials/footer.php'); ?>
</body>
</html>
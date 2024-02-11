<?php require('partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="<?php echo $data['image'];?>"
                     id="depiction" alt="breaking_bad_character_image">
            </div>
        </div>
        <div class="character-data">
            <p>Name: <?php echo htmlspecialchars($data['full_name']); ?></p>
            <p>Nickname: <?php echo htmlspecialchars($data['nickname']); ?></p>
            <p>Occupation: <?php echo htmlspecialchars($data['occupation']); ?></p>
            <p>Status: <?php echo htmlspecialchars($data['status']); ?></p>
        </div>
        <div class="quote-box">
            <p id="current-quote">
                <?php echo htmlspecialchars($data['quote']); ?>
            </p>
        </div>
    </section>
    <?php require('partials/footer.php'); ?>
</body>
</html>
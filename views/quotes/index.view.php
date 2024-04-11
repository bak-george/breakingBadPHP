<?php 
require base_path('views/partials/head.php');
\Sentry\init([
    'dsn' => 'https://51a08e553223cf469c82f6991addb87a@o4507066632503296.ingest.us.sentry.io/4507066634797056',
    'traces_sample_rate' => 1.0,
    'profiles_sample_rate' => 1.0,
  ]);
?>
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
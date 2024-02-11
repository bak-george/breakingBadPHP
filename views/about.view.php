    <?php require('partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="images/bakoulisgeorgeBreakingBad.png" 
                 id="depiction">
            </div>
        </div>
        <div class="developer-data">
            <p>Name: <?php echo htmlspecialchars($developer['name']); ?></p>
            <p>Nickname: <?php echo htmlspecialchars($developer['nick_name']); ?></p>
            <p>Occupation: <?php echo htmlspecialchars($developer['occupation']); ?></p>
            <p>Status: <?php echo htmlspecialchars($developer['status']); ?></p>
            <?php echo "<p>Email: <a href='mailto:" . htmlspecialchars($developer['email']) . "'>" . htmlspecialchars('george_bak at proton.me') . "</a></p>"; ?>
            <p>
                 <a class="content_disclaimer" href="/disclaimer">Read the Content Disclaimer here.</a>
            </p>
        </div>
        <div class="quote-box">
            <p id="current-quote">
                <?php  echo htmlspecialchars($developer['quote']); ?>
            </p> 
        </div>
    </section>
    <?php require('partials/footer.php'); ?>
</body>
</html>
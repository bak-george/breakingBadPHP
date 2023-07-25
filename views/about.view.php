    <?php require('partials/head.php'); ?>
    <section class="container">
        <div class="character-box">
            <div class="character-image">
                <img src="images/bakoulisgeorgeBreakingBad.png" 
                 id="depiction">
            </div>
        </div>
        <div class="character-data">
            <p>Name: <?php echo $developer['name']; ?></p>
            <p>Nickname: <?php echo $developer['nick_name']; ?></p>
            <p>Occupation: <?php echo $developer['occupation']; ?></p>
            <p>Status: <?php echo $developer['status']; ?></p>
            <p>
                 <a class="content_disclaimer" href="/disclaimer">Read the Content Disclaimer here.</a> </p>
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
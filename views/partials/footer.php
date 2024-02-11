<?php

$buttonPages = ['home', 'singlequote'];

if (in_array($heading, $buttonPages)) { ?>
    </main>
    <footer>
        <button type="button" class="btn" onclick="window.location.reload();">
            <img src="images/breakingBadQuoteTestingTube.svg" alt="breakingBadQuoteGenerator beaker icon">
            <h2>Let's Cook!</h2>
        </button>
    </footer>
<?php } ?>


<script src="https://www.google.com/recaptcha/api.js"></script>
<?php

$buttonPages = ['home', 'singlequote'];

if (in_array($heading, $buttonPages)) { ?>
    <button type="button" class="btn" onclick="window.location.reload();">
        <img src="images/breakingBadQuoteTestingTube.svg">
        <h2>Let's Cook!</h2>
    </button>
<?php } ?>


<script src="https://www.google.com/recaptcha/api.js"></script>
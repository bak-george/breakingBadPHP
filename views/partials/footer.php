<?php 

$buttonPages = ['home', 'singlequote'];

if (in_array($heading, $buttonPages)) { ?>
  <form method="GET" action='/show'>
    <button type="submit" class="btn">
          <img src="images/breakingBadQuoteTestingTube.svg">
          <h2>Let's Cook!</h2>
    </button>  
  </form>
<?php } ?>

<script src="https://www.google.com/recaptcha/api.js"></script>
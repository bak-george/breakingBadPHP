<?php 

$submitPages = ['cook', 'quoteCreate'];

if (in_array($heading, $submitPages)) { ?>
  <div class="mt-4">
        <div class="g-recaptcha" data-sitekey="6LdZgEUnAAAAAF-uUPQFR3rcSgdlrLglb7u_qUVI"></div>
      </div>
<?php } ?>
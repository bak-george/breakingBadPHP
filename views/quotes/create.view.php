<?php require base_path('views/partials/head.php'); ?>
  <section class="cook">
    <form method="POST" action="/quote" class="container">
      50-50 partners. You make the quotes. I distribute them.
      <div class="mb-2">
        <select class="form-select" name="character_id" aria-label="Default select example">
          <option value="">Select a character</option>
          <option value="1">Walter White</option>
          <option value="2">Jesse Pinkman</option>
          <option value="3">Saul Goodman</option>
          <option value="4">Gustavo Fring</option>
          <option value="5">Skyler White</option>
          <option value="6">Michael Ehrmantraut</option>
          <option value="7">Henry R. Schrader</option>
          <option value="8">Marie Schrader</option>
          <option value="9">Walter White Jr</option>
          <option value="10">Louis Corbett</option>
          <option value="11">Victor</option>
          <option value="12">Charles McGill</option>
          <option value="13">Kimberly Wexler</option>
          <option value="14">Maximino Arciniega</option>
          <option value="15">Howard G. Hamlin</option>
          <option value="16">Ignacio Varga</option>
        </select>
      </div>

      <?php if (isset($errors['character_id'])) : ?>
          <p class="errors"><?php echo $errors['character_id']; ?></p>
      <?php endif ?>
      <div class="mb-3">
          <label for="contributor_nickname" class="form-label">Your name or nickname</label>
          <input name="contributor_nickname" type="username" class="form-control" placeholder="This is optional. If you provide one it will be visible next to the quote.">
        </div>
      <div class="mb-2">
        <label for="quote" class="form-label">Quote</label>
        <textarea name="quote" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $_POST['body'] ?? ''; ?>
        </textarea>
      </div>
      <?php if (isset($errors['quote'])) : ?>
          <p class="errors"><?php echo $errors['quote']; ?></p>
      <?php endif ?>
     <?php require base_path('views/partials/recaptcha.php'); ?>
      <?php if (isset($errors['recaptcha'])) : ?>
        <p class="errors"><?php echo $errors['recaptcha']; ?></p>
      <?php endif ?>
      <button type="submit" class="btn add_quote_btn">
         <h1>Add quote</h1>
      </button>
    </form>
  </section>
<?php require base_path('views/partials/footer.php'); ?>
</body>
</html>

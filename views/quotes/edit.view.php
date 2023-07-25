<?php require base_path('views/partials/head.php'); ?>
  <form method="POST" action="/quote" class="container">
    <p>I have written the quote down below. I am going to get myself a Nescafe.
    <br>Please don't touch anything on my desk.</p>
    <div class="mb-2">
      <select class="form-select" name="character_id" aria-label="Default select example">
        <option value=""><?php echo $character['full_name'] ?></option>
      </select>
    </div>
    <?php if (isset($errors['character_id'])) : ?>
        <p><?php echo $errors['character_id']; ?></p>
    <?php endif ?>
    <div class="mb-2">
      <label for="quote/edit" class="form-label">Quote</label>
      <textarea name="quote" class="form-control" rows="3"><?= $quote['quote'] ?>
      </textarea>
    </div>
    <?php if (isset($errors['quote'])) : ?>
        <p><?php echo $errors['quote']; ?></p>
    <?php endif ?>
    <button type="submit" class="btn">
       Save
    </button>
  </form>
<?php require base_path('views/partials/footer.php'); ?>
</body>
</html>

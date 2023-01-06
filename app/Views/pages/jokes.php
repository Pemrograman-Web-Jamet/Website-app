<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="jokes.css" />
    <title>Jokes Pages</title>
  </head>

  <body>
    <header>
      <div class="jokes-container">
        <div class="illustration">
          <img src="images/generator.png" alt="" />
        </div>
        <div class="jokes-data">
            <div id="joke" class="joke">// Joke goes here</div>
            <div class="arrow">
                <span id="pre-btn"><img src="images/arrowPrev.png" alt="" /></span>
                <span id="nxt-btn"><img src="images/arrowNext.png" alt="" /></span>
            </div>
        </div>
        <div class="button">
          <div class="likes">
            <span class="likes-btn"><img src="images/likes.png" /></span>
          </div>
          <div class="button-add">
            <button id="jokeBtn" class="btn">Add Jokes</button>
          </div>
          <div class="share">
            <span class="share-btn"><img src="images/share.png" alt="" /></span>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>

        <?= $this->endSection(); ?>
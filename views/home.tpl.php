<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>My Last Ten Blog Posts</title>
  </head>
  <body>
    <ul class="heed">
      <?php foreach ($articles as $article): ?>
        <li class="hentry">
          <a href="/article/<?php echo htmlspecialchars($article->slug); ?>">
            <?php echo htmlspecialchars($article->title); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
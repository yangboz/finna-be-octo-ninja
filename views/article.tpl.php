<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo htmlspecialchars($article->title); ?></title>
  </head>
  <body>
    <h1><?php echo htmlspecialchars($article->title); ?></h1>
    <p><?php echo nl2br(htmlspecialchars(strip_tags($article->content))); ?></p>
  </body>
</html>
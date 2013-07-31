<?php require('backend.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?php echo $author ?>" name="author" />
    <meta content="<?php echo $description ?>" name="description" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link href="style.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  </head>
  <body>
    <div class="page"><?php generate() ?></div>
  </body>
</html>

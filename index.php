<?php require('backend.php') ?>
<!DOCTYPE html>
<title><?= $title ?></title>
<meta charset="utf-8">
<meta content="<?= $author ?>" name="author">
<meta content="<?= $description ?>" name="description">
<meta content="width=device-width,initial-scale=1" name="viewport">
<link href="logo.png" rel="apple-touch-icon icon">
<link href="style.css" rel="stylesheet">
<script src="vendor/jquery-1.8.2.min.js"></script>
<div class="page"><?php generate() ?></div>

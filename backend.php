<?php

error_reporting(0);
require 'key.php';

$endpoint = "https://api.instagram.com/v1/users/self/media/recent?count=60&access_token=${token}";
$page = $_GET['page'];

if ($page) {
  $id = strstr($token, '.', true);
  $endpoint .= "&max_id=${page}_${id}";
} // Token itself contains User ID

$response = json_decode(file_get_contents($endpoint));
$next = strstr($response->pagination->next_max_id, '_', true);

foreach ($response->data as $item) {
  $photos[] = array(
    'caption' => htmlspecialchars($item->caption->text),
    'link' => $item->link,
    'image' => $item->images->low_resolution->url
  );
}

function generate() {
  global $photos, $next;

  foreach ($photos as $mess=>$photo): ?>
    <a
      class="photo"
      href="<?php echo $photo['link'] ?>">
      <img
        src="<?php echo $photo['image'] ?>"
        alt="<?php echo $photo['caption'] ?>"
        title="<?php echo $photo['caption'] ?>"/>
    </a>
    <?php
  endforeach;

  if ($next): ?>
    <script>
      $('body').append('<div class="page"></div>');
      $('.page:last').load('backend.php?page=<?php echo $next ?>&fetch');
    </script>
    <noscript>
      <a class="pagination" href="?page=<?php echo $next ?>">&nbsp;</a>
    </noscript>
    <?php
  endif;
}

isset($_GET['fetch']) and generate();

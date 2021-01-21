<?php
  $links = [
    "home" => "/",
    "products" => "/products"
  ];
?>
<div class="ns-nav">
  <span>This is the nav</span>
  <?php
    foreach ($links as $text => $link) {
      echo '<a href="'.$link.'">'.$text.'</a>';
    }
  ?>
</div>
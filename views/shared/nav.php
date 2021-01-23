<?php
  $links = [
    "home" => "/",
    "products" => "/products"
  ];
?>

<div class="ns-nav">
  <?php
    foreach ($links as $text => $link) {
      echo '<a class="nav-item" href="'.$link.'">'.$text.'</a>';
    }
  ?>
</div>
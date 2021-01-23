<?php
  $links = [
    [
      "text" => "TOP",
      "url" => "/",
    ],
    [
      "text" => "PRODUCTS",
      "url" => "/products",
    ],
    [
      "text" => "私たちについて",
      "url" => "/contact",
    ],
    [
      "text" => "商品注文：お問い合わせ",
      "url" => "/inquiry",
    ],
  ];
?>
<div class="ns-nav">
  <div class="layout">
    <div class="nav-wrapper">
      <div class="nav-left">
      </div>
      <div class="nav-right">
        <?php foreach ($links as $link): ?>
          <a class="nav-item" href="<?= $link['url'] ?>"><?= $link['text'] ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

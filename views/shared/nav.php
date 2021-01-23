<?php
  $links = [
    [
      "text" => "TOP",
      "url" => "/",
    ],
    [
      "text" => "PRODUCTS",
      "url" => "/products",
      "submenu" => [
        [
          "text" => "エアコン室外機カバー",
          "url" => "/products/product1",
        ],
        [
          "text" => "商品名を追加",
          "url" => "/products/product2",
        ],
        [
          "text" => "商品名を追加",
          "url" => "/products/product3",
        ],
      ],
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
        <a class="nav-left__logo" href="/">
          <img src="" alt="andC logo">
          <span>庭と家との調和</span>
        </a>
      </div>
      <div class="nav-right">
        <?php foreach ($links as $link): ?>
          <div class="nav-item">
            <a class="nav-item__link" href="<?= $link['url'] ?>"><?= $link['text'] ?></a>
            <?php if ($link['submenu']): ?>
              <span class="nav-item__submenu">
                <?php foreach ($link['submenu'] as $submenuLink): ?>
                  <a class="nav-item__submenu-link" href="<?= $submenuLink['url'] ?>">ー<?= $submenuLink['text'] ?></a>
                <?php endforeach; ?>
              </span>
            <?php endif ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php
  $products = [
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
  ];
?>
<div class="ns-nav">
  <div class="layout">
    <div class="nav-wrapper">
      <div class="nav-left">
        <a href="/"><img class="nav-left__logo" src="../../assets/images/shared/logo.png" alt="andC logo"></a>
        <span class="nav-left__text">庭と家との調和</span>
      </div>
      <div class="nav-menu" id="nav-menu">
        <div class="nav-item">
          <a class="nav-item__link" href="/">TOP</a>
        </div>
        <div class="nav-item">
          <a class="nav-item__link" href="products">PRODUCTS</a>
          <span class="nav-item__submenu">
            <?php foreach ($products as $product): ?>
              <a class="nav-item__submenu-link" href="<?= $product['url'] ?>">ー<?= $product['text'] ?></a>
            <?php endforeach; ?>
          </span>
        </div>
        <div class="nav-item">
          <a class="nav-item__link" href="/contact" target="_blank">私たちについて<img class="external-link" src="../../assets/images/shared/new-window.png"></a>
        </div>
        <div class="nav-item">
          <a class="nav-item__link" href="/inquiry">商品注文：お問い合わせ</a>
        </div>
      </div>
      <div class="overlay" id="overlay"></div>
      <div class="nav-ham" id="nav-ham">
        <span class="nav-ham__line"></span>
        <span class="nav-ham__line"></span>
        <span class="nav-ham__line"></span>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    const navMenu = document.getElementById('nav-menu');
    const navHam = document.getElementById('nav-ham');
    const overlay = document.getElementById('overlay');

    function toggleMenu() {
      if (navMenu.classList.contains('open')) {
        navMenu.classList.remove('open');
        overlay.classList.remove('open');
      } else {
        navMenu.classList.add('open');
        overlay.classList.add('open');
      }
    }

    navHam.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
  </script>
</div>

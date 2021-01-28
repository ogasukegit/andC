<?php
$metaData = [
  "title" => "シンプルで長く使える室外機カバー（白・茶）｜業務用・一般用｜＆C－ブランドサイト",
  "description" => "サビ・劣化に強く、丈夫なエアコン室外機カバーです。積雪地域や日除け、省エネ効果に最適です。素材は、スチール製で、色は白（ホワイト）とブラウンの2種類ご用意。サイズは、標準サイズと大型室外機用をご用意しています。",
  "keywords" => "",
];
$breadcrumb = [
  [
    "link" => "/inquiry",
    "text" => "業務用（法人の方）ご注文・お問い合わせ",
  ],
  [
    "link" => false,
    "text" => "入力内容確認",
  ],
];
$products = [
  [
    "text" => "室外機カバー",
    "link" => "/products/product1",
  ],
  [
    "text" => "商品名を追加",
    "link" => "/products/product2",
  ],
  [
    "text" => "商品名を追加",
    "link" => "/products/product3",
  ],
  [
    "text" => "商品名を追加",
    "link" => "/products/product4",
  ],
  [
    "text" => "商品名を追加",
    "link" => "/products/product5",
  ],
  [
    "text" => "商品名を追加",
    "link" => "/products/product6",
  ],
];
$slide_images = [
  "/product/top1.png",
  // "/product/top2.png",
  // "/product/top3.png",
  // "/product/top4.png",
  // "/product/top5.png",
  // "/product/top6.png",
]
?>

<?php include('../shared/head.php'); ?>
<div class="ns-product page">
  <div class="nav">
    <p class="nav__title">
      PRODUCTS
    </p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
    <p class="nav__item">―室外機カバー</p>
  </div>
  <div class="layout product-main">
    <?php include '../shared/breadcrumb.php'; ?>
    <h2 class="product-title">
      樹脂コーティング会社が本気で作った、 サビ ・ 劣化に強い、 シンプルデザインのエアコン室外機カバー 【ホワイト ・ ブラウン】 【スチール製】
    </h2>
    <p class="product-description">
      場になじむ、 シンプルモダンなデザイン。 細部までこだわり長く使えるエアコン室外機カバーです。
    </p>
    <div class="product-slider">
      <div class="product-slider__button">
        <div class="product-slider__icon product-slider__icon--left"></div>
      </div>
      <div class="product-slider__image-container" style="background-image: url(<?= $imgPath . $slide["Image"] ?>)">
        <?php foreach ($slide_images as $image) : ?>
          <img src=<?= $imgPath . $image ?>>
        <?php endforeach ?>
      </div>
      <div class="product-slider__button">
        <div class="product-slider__icon product-slider__icon--right"></div>
      </div>
    </div>
    <div class="product-slider">
      <div class="product-slider__button">
        <div class="product-slider__icon product-slider__icon--left"></div>
      </div>
      <div class="product-slider__image-container" style="background-image: url(<?= $imgPath . $slide["Image"] ?>)">
        <?php foreach ($slide_images as $image) : ?>
          <img src="http://placehold.it/900x450">
        <?php endforeach ?>
      </div>
      <div class="product-slider__button">
        <div class="product-slider__icon product-slider__icon--right"></div>
      </div>
    </div>
  </div>

</div>

<script>

</script>
<?php include('../shared/foot.php'); ?>
<?php
  // required page data
  $pageName = "contact";

  $metaData = [
    "title" => "商品注文・お問い合わせ｜一般のお客様｜＆C－ブランドサイト",
    "description" => "＆Cの商品についてのご注文・お問い合わせはこちら。（一般のお客様用）優れた樹脂コーティングをインテリアに。機能的で美しく。",
    "keywords" => "",
  ];
?>

<?php include('../shared/head.php'); ?>
<div class="ns-contact page">
  <?php include('../shared/navigation.php'); ?>
  <div class="layout">
    <h2 class="contact-h2">一般のお客様</h2>
    <p>商品のお問い合わせについては、下記フリーダイヤルより、お願いいたします。</p>
    <p>商品名・内容をお控えの上、ご連絡ください。</p>
    <div class="inner">
      <div class="left">
        <p>フリーダイヤル</p>
        <p class="call-link hide-sp">0120-999-999</p>
        <p class="call-link hide-pc"><a href="tel:0120-999-999">0120-999-999</a></p>
      </div>
      <div class="right">
        <img class="image" src="<?= $imgPath ?>/contact/mouse.jpeg" alt="">
      </div>
    </div>
    <h2 class="contact-h2">＆Cが買えるショップ</h2>
  </div>
  <?php include('../shared/shop-section.php'); ?>
  <div class="layout">
    <h2 class="contact-h2">法人のお客様</h2>
    <div class="button-container">
      <a href="/inquiry" class="button button--blue">
        法人のお客様<br>
        ご注文・お問い合わせはこちら
      </a>
    </div>
  </div>
</div>
<?php include('../shared/foot.php'); ?>

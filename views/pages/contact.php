<?php
  // required page data
  $pageName = "contact";

  $metaData = [
    "title" => "商品注文・お問い合わせ｜一般のお客様｜＆C－ブランドサイト",
    "description" => "＆Cの商品についてのご注文・お問い合わせはこちら。（一般のお客様用）優れた樹脂コーティングをインテリアに。機能的で美しく。",
    "keywords" => "",
  ];

  $breadcrumb = [
    [
      "link" => false,
      "text" => "ご注文•お問い合わせ",
    ],
  ];
?>

<?php include('../shared/head.php'); ?>
<div class="ns-contact page">
  <?php include('../shared/navigation.php'); ?>
  <h1 class="blue-header">ご注文•お問い合わせ</h1>
  <div class="layout">
    <?php include '../shared/breadcrumb.php'; ?>
    <h2 class="contact-h2">一般のお客様</h2>
    <div class="inner">
      <div class="inner-half">
        <p>商品のお問い合わせについては、下記電話番号より、お願いいたします。</p>
        <p>商品名・内容をお控えの上、ご連絡ください。</p>
        <br>
        <p>お問い合わせ先</p>
        <p class="phone-number hide-sp">03-3555-3214</p>
        <div class="hide-pc txt-center">
          <a class="call-button button button--blue" href="tel:03-3555-3214">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
            03-3555-3214
          </a>
        </div>
      </div>
      <div class="inner-half">
        <img class="image" src="<?= $IMAGESPATH ?>/contact/callcenter.jpg" alt="">
      </div>
    </div>
  </div>
  <?php include('../shared/shop-section.php'); ?>
  <div class="layout">
    <h2 class="contact-h2">法人のお客様</h2>
    <div class="button-container">
      <a href="/inquiry" class="button button--blue">法人のお客様<br>ご注文・お問い合わせはこちら</a>
    </div>
    <div class="button-container">
      <a class="arrow-button" href="/">&C トップへ　　</a>
    </div>
  </div>
</div>
<?php include('../shared/foot.php'); ?>

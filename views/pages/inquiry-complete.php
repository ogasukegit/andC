<?php
  // required page data
  $pageName = "inquiry-complete";

  $metaData = [
    "title" => "商品注文・お問い合わせ｜業務用（法人のお客様）｜＆C－ブランドサイト",
    "description" => "＆Cの商品についての業務用（法人のお客様）ご注文・お問い合わせはこちら。優れた樹脂コーティングをインテリアに。機能的で美しく。",
    "keywords" => "",
  ];

  $step = 3;

  $breadcrumb = [
    [
      "link" => "/inquiry",
      "text" => "法人のお客様お問い合わせフォーム",
    ],
    [
      "link" => false,
      "text" => "送信完了",
    ],
  ];
?>
<?php include './_inquiry-head.php'; ?>
  <div class="layout">
    <div class="complete-message">
      <p>お問い合わせいただき誠にありがとうございます。</p>
      <p>追って担当者よりご連絡させていただきます。</p>
      <br/>
      <p>ご入力いただきましたメールアドレスに受付確認メールを送信しております。<br>万が一ご連絡無き場合は、以下宛までお電話ください。</p>
      <br/>
      <p>岩谷マテリアル株式会社　大阪支店</p>
      <p>金属・コーティング本部</p>
      <p>担当：佐藤</p>
      <p class="hide-sp">TEL：06-6261-1946</a></p>
      <p class="hide-pc"><a href="tel:06-6261-1946">TEL：06-6261-1946</a></p>
    </div>
    <div class="button-wrapper">
      <a class="button button--black-ghost" href="home.php">＆Cトップへ</a>
    </div>
  </div>
<?php include './_inquiry-foot.php'; ?>

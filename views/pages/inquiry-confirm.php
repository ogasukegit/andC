<?php
  $step = 2;

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
?>
<?php include './_inquiry-head.php'; ?>
  <div class="layout">
    <h2 class="h2">入力内容確認</h2>
    <p>下記内容でお間違いありませんか？</p>

    <hr>
    <h1>CONFIRM</h1>
    <hr>

    <h2 class="h2">個人情報の取り扱い</h2>
    <p>個人情報の取り扱いについて、詳しくは弊社のプライバシーポリシーをご覧ください。</p>

    個人情報の取り扱い

    □同意します

    <div class="button-wrapper">
      <a class="button button--blue" href="inquiry-input.php">送信</a>
      <a class="button button--black-ghost" href="inquiry-complete.php">修正する</a>
    </div>
  </div>
  <div class="go-to-first-view__wrapper">
    <a class="go-to-first-view__button" href="inquiry-input.php">ページ上部へ</a>
  </div>
<?php include './_inquiry-foot.php'; ?>

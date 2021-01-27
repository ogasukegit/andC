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

  $inquiryType = $_POST["inquiry-type"];
  $productName = $_POST["product-name"];
  $nameKanji = $_POST["name-kanji"];
  $nameKana = $_POST["name-kana"];
  $organizationName = $_POST["organization-name"];
  $departmentName = $_POST["department-name"];
  $postalCode1 = $_POST["postal-code-1"];
  $postalCode2 = $_POST["postal-code-2"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $fax = $_POST["fax"];
  $message = $_POST["message"];
?>
<?php include './_inquiry-head.php'; ?>
  <div class="layout">
    <h2 class="inquiry-h2">入力内容確認</h2>

    <!-- change post destination (handle send and redirect to /inquiry/complete) -->
    <form class="form" method="post" action="inquiry-confirm.php">
      <p class="form__top-text">下記内容でお間違いありませんか？</p>
      <div class="form__row">
        <div class="form__row-left">お問い合わせ項目</div>
        <div class="form__row-right form__row-output"><?= $inquiryType ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">商品名</div>
        <div class="form__row-right form__row-output"><?= $productName ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">氏名</div>
        <div class="form__row-right form__row-output"><?= $nameKanji ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">氏名 よみがな</div>
        <div class="form__row-right form__row-output"><?= $nameKana ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">会社or団体名</div>
        <div class="form__row-right form__row-output"><?= $organizationName ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">部署名</div>
        <div class="form__row-right form__row-output"><?= $departmentName ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">郵便番号</div>
        <div class="form__row-right form__row-output"><?= $postalCode1 ?>-<?= $postalCode2 ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">住所</div>
        <div class="form__row-right form__row-output"><?= $address ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">お電話番号</div>
        <div class="form__row-right form__row-output"><?= $phone ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">メールアドレス</div>
        <div class="form__row-right form__row-output"><?= $email ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">FAX</div>
        <div class="form__row-right form__row-output"><?= $fax ?></div>
      </div>
      <div class="form__row">
        <div class="form__row-left">お問い合わせ内容</div>
        <div class="form__row-right form__row-output"><?= $message ?></div>
      </div>
      <h2 class="inquiry-h2">個人情報の取り扱い</h2>
      <p>個人情報の取り扱いについて、詳しくは弊社の<a href="https://www.imcjpn.co.jp/policy/">プライバシーポリシー</a>をご覧ください。</p>
      <div class="form__row">
        <div class="form__row-left">個人情報の取り扱い</div>
        <div class="form__row-right">
          <label class="clickable"><input type="checkbox" id="personal-info" required>&nbsp;同意します</label>
        </div>
      </div>
      <div class="button-wrapper">
        <input class="button button--blue" type="submit" value="修正する">
        <a class="button button--black-ghost" href="inquiry-input.php">送信</a>
      </div>
    </form>

  </div>

  <!-- <div class="go-to-first-view__wrapper"> -->
    <!-- change link to "/inquiry" -->
    <!-- <a class="go-to-first-view__button" href="inquiry-input.php">ページ上部へ</a> -->
  <!-- </div> -->
<?php include './_inquiry-foot.php'; ?>

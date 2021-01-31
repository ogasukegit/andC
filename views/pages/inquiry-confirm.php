<?php
  $pageName = "inquiry-confirm";

  $metaData = [
    "title" => "商品注文・お問い合わせ｜業務用（法人のお客様）｜＆C－ブランドサイト",
    "description" => "＆Cの商品についての業務用（法人のお客様）ご注文・お問い合わせはこちら。優れた樹脂コーティングをインテリアに。機能的で美しく。",
    "keywords" => "",
  ];

  $step = 2;

  $breadcrumb = [
    [
      "link" => "/inquiry",
      "text" => "法人のお客様お問い合わせフォーム",
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
    <p class="confirm-form__top-text txt-center">下記内容でお間違いありませんか？</p>
    <!-- change post destination (handle send and redirect to /inquiry/complete) -->
    <form class="form confirm-form" method="post" action="inquiry-complete.php">
      <table class="confirm-form__table">
        <tbody>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">お問い合わせ項目</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $inquiryType ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">商品名</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $productName ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">氏名</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $nameKanji ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">氏名 よみがな</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $nameKana ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">会社or団体名</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $organizationName ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">部署名</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $departmentName ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">郵便番号</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $postalCode1 ?>-<?= $postalCode2 ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">住所</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $address ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">お電話番号</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $phone ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">メールアドレス</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $email ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">FAX</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $fax ?></td>
          </div>
          <tr class="confirm-form__row">
            <td class="confirm-form__cell confirm-form__cell--left">お問い合わせ内容</td>
            <td class="confirm-form__cell confirm-form__cell--right"><?= $message ?></td>
          </div>
        </tbody>
      </table>
      <div class="button-wrapper">
        <input class="button button--blue" type="submit" value="修正する">
        <a class="button button--black-ghost" href="inquiry-input.php">　送信　</a>
      </div>
    </form>

  </div>
<?php include './_inquiry-foot.php'; ?>
